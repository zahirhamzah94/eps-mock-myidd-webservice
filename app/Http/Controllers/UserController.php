<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SoapServer;

class UserController extends Controller
{
    public function handle(Request $request)
    {

        try {
           // Load the XML from the request body
           $xml = simplexml_load_string($request->getContent());
           $xml->registerXPathNamespace('soapenv', 'http://schemas.xmlsoap.org/soap/envelope/');
           $xml->registerXPathNamespace('crs', 'http://tempuri.org/CRSService');

           // Check for enquireUserDataReq
           if ($xml->xpath('//crs:enquireUserDataReq')) {
               $data = $xml->xpath('//crs:enquireUserDataReq')[0];
               return $this->enquireUserDataReq(
                   (string) $data->AgencyCode,
                   (string) $data->BranchCode,
                   (string) $data->UserId,
                   (string) $data->TransactionCode,
                   (string) $data->RequestDateTime,
                   (string) $data->ICNumber,
                   (string) $data->RequestIndicator
               );
           }

           // Check for retrieveCitizensDataReq
           if ($xml->xpath('//crs:retrieveCitizensDataReq')) {
               $data = $xml->xpath('//crs:retrieveCitizensDataReq')[0];
               return $this->retrieveCitizensDataReq(
                   (string) $data->AgencyCode,
                   (string) $data->BranchCode,
                   (string) $data->UserId,
                   (string) $data->TransactionCode,
                   (string) $data->RequestDateTime,
                   (string) $data->ICNumber,
                   (string) $data->RequestIndicator
               );
           }

           // If no recognized request was found, return an error response
           return $this->errorResponse("Unknown SOAP request type.");
        } catch (Exception $e) {
            return $this->errorResponse('The element or type could not be found ' . $e->getMessage());

        }
    }

    // Main function for handling enquireUserDataReq
    public function enquireUserDataReq($AgencyCode, $BranchCode, $UserId, $TransactionCode, $RequestDateTime, $ICNumber, $RequestIndicator)
    {
        // Perform the database query to retrieve user information
        $user = DB::table('users')
            ->where('ic_number', $ICNumber)
            ->first();

        // Return a response based on whether the user was found
        if ($user) {
            return $this->successResponse($AgencyCode, $BranchCode, $UserId, $TransactionCode, $ICNumber, $user);
        } else {
            throw new Exception('User not found');
        }
    }

    // Main function for handling enquireUserDataReq
    public function retrieveCitizensDataReq($AgencyCode, $BranchCode, $UserId, $TransactionCode, $RequestDateTime, $ICNumber, $RequestIndicator)
    {
        // Perform the database query to retrieve user information
        $user = DB::table('users')
            ->where('ic_number', $ICNumber)
            ->first();

        // Return a response based on whether the user was found
        if ($user) {
            return $this->successResponseCitizenVerified($AgencyCode, $BranchCode, $UserId, $TransactionCode, $ICNumber, $user);
        } else {
            throw new Exception('User not found');
        }
    }

    // Function to build a successful response
    private function successResponse($AgencyCode, $BranchCode, $UserId, $TransactionCode, $ICNumber, $user)
    {
        $response = <<<XML
        <?xml version="1.0" encoding="utf-8"?>
        <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
            <soapenv:Body>
                <NS1:enquireUserDataRes xmlns:NS1="http://tempuri.org/CRSService">
                    <AgencyCode>{$AgencyCode}</AgencyCode>
                    <BranchCode>{$BranchCode}</BranchCode>
                    <UserId>{$UserId}</UserId>
                    <TransactionCode>{$TransactionCode}</TransactionCode>
                    <ReplyDateTime>{$this->getCurrentDateTime()}</ReplyDateTime>
                    <ReplyIndicator>1</ReplyIndicator>
                    <MessageCode></MessageCode>
                    <ICNumber>{$ICNumber}</ICNumber>
                    <Name>{$user->name}</Name>
                    <EmailAddress>{$user->email}</EmailAddress>
                    <MobilePhoneNumber>{$user->mobile_phone_number}</MobilePhoneNumber>
                    <SmsIndicator></SmsIndicator>
                </NS1:enquireUserDataRes>
            </soapenv:Body>
        </soapenv:Envelope>
        XML;

        return response($response, 200)->header('Content-Type', 'text/xml');
    }

    // Function to build a successful response
    private function successResponseCitizenVerified($AgencyCode, $BranchCode, $UserId, $TransactionCode, $ICNumber, $user)
    {
        $response = <<<XML
        <?xml version="1.0" encoding="utf-8"?>
        <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
            <soapenv:Body>
                <NS1:retrieveCitizensDataRes xmlns:NS1="http://tempuri.org/CRSService">
                    <AgencyCode>{$AgencyCode}</AgencyCode>
                    <BranchCode>{$BranchCode}</BranchCode>
                    <UserId>{$UserId}</UserId>
                    <TransactionCode>{$TransactionCode}</TransactionCode>
                    <ReplyDateTime>{$this->getCurrentDateTime()}</ReplyDateTime>
                    <ICNumber>{$ICNumber}</ICNumber>
                    <ReplyIndicator>1</ReplyIndicator>
                    <MessageCode></MessageCode>
                    <Message></Message>
                    <Name>{$user->name}</Name>
                    <DateOfBirth>{$user->date_of_birth}</DateOfBirth>
                    <Gender>{$user->gender}</Gender>
                    <Race>{$user->race}</Race>
                    <Religion>{$user->religion}</Religion>
                    <PermanentAddress1>{$user->permanent_address1}</PermanentAddress1>
                    <PermanentAddress2>{$user->permanent_address2}</PermanentAddress2>
                    <PermanentAddress3>{$user->permanent_address3}</PermanentAddress3>
                    <PermanentAddressPostcode>{$user->permanent_address_postcode}</PermanentAddressPostcode>
                    <PermanentAddressCityCode>{$user->permanent_address_city_code}</PermanentAddressCityCode>
                    <PermanentAddressStateCode>{$user->permanent_address_state_code}</PermanentAddressStateCode>
                    <CorrespondenceAddress1>{$user->correspondence_address1}</CorrespondenceAddress1>
                    <CorrespondenceAddress2>{$user->correspondence_address2}</CorrespondenceAddress2>
                    <CorrespondenceAddress3>{$user->correspondence_address3}</CorrespondenceAddress3>
                    <CorrespondenceAddressPostcode>{$user->correspondence_address_postcode}</CorrespondenceAddressPostcode>
                    <CorrespondenceAddressCityCode>{$user->correspondence_address_city_code}</CorrespondenceAddressCityCode>
                    <CorrespondenceAddressCityDescription>{$user->correspondence_address_city_description}</CorrespondenceAddressCityDescription>
                    <CorrespondenceAddressStateCode>{$user->correspondence_address_state_code}</CorrespondenceAddressStateCode>
                    <AddressStatus>{$user->address_status}</AddressStatus>
                    <RecordStatus>{$user->record_status}</RecordStatus>
                    <VerifyStatus>{$user->verify_status}</VerifyStatus>
                    <DateOfDeath>{$user->date_of_death}</DateOfDeath>
                    <OldICnumber>{$user->old_ic_number}</OldICnumber>
                    <ResidentialStatus>{$user->residential_status}</ResidentialStatus>
                    <CitizenshipStatus>{$user->citizenship_status}</CitizenshipStatus>
                    <EmailAddress>{$user->email}</EmailAddress>
                    <MobilePhoneNumber>{$user->mobile_phone_number}</MobilePhoneNumber>
                    <PermanentAddressCityDesc>{$user->permanent_address_city_desc}</PermanentAddressCityDesc>
                </NS1:retrieveCitizensDataRes>
            </soapenv:Body>
        </soapenv:Envelope>
        XML;

        return response($response, 200)->header('Content-Type', 'text/xml');
    }

    // Function to build a successful response
    private function successResponseCitizenUnverified($AgencyCode, $BranchCode, $UserId, $TransactionCode, $ICNumber, $user)
    {
        $response = <<<XML
        <?xml version="1.0" encoding="utf-8"?>
        <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
            <soapenv:Body>
                <NS1:retrieveCitizensDataRes xmlns:NS1="http://tempuri.org/CRSService">
                    <AgencyCode>{$AgencyCode}</AgencyCode>
                    <BranchCode>{$BranchCode}</BranchCode>
                    <UserId>{$UserId}</UserId>
                    <TransactionCode>{$TransactionCode}</TransactionCode>
                    <ReplyDateTime>{$this->getCurrentDateTime()}</ReplyDateTime>
                    <ICNumber>{$ICNumber}</ICNumber>
                    <ReplyIndicator>2</ReplyIndicator>
                    <MessageCode>CRS0018</MessageCode>
                    <Message>Pemilik diminta hadir ke JPN untuk menukar Kad Pengenalan ke MyKad.</Message>
                    <Name>{$user->name}</Name>
                    <DateOfBirth>{$user->date_of_birth}</DateOfBirth>
                    <Gender>{$user->gender}</Gender>
                    <Race>{$user->race}</Race>
                    <Religion>{$user->religion}</Religion>
                    <PermanentAddress1>{$user->permanent_address1}</PermanentAddress1>
                    <PermanentAddress2>{$user->permanent_address2}</PermanentAddress2>
                    <PermanentAddress3>{$user->permanent_address3}</PermanentAddress3>
                    <PermanentAddressPostcode>{$user->permanent_address_postcode}</PermanentAddressPostcode>
                    <PermanentAddressCityCode>{$user->permanent_address_city_code}</PermanentAddressCityCode>
                    <PermanentAddressStateCode>{$user->permanent_address_state_code}</PermanentAddressStateCode>
                    <CorrespondenceAddress1>{$user->correspondence_address1}</CorrespondenceAddress1>
                    <CorrespondenceAddress2>{$user->correspondence_address2}</CorrespondenceAddress2>
                    <CorrespondenceAddress3>{$user->correspondence_address3}</CorrespondenceAddress3>
                    <CorrespondenceAddressPostcode>{$user->correspondence_address_postcode}</CorrespondenceAddressPostcode>
                    <CorrespondenceAddressCityCode>{$user->correspondence_address_city_code}</CorrespondenceAddressCityCode>
                    <CorrespondenceAddressCityDescription>{$user->correspondence_address_city_description}</CorrespondenceAddressCityDescription>
                    <CorrespondenceAddressStateCode>{$user->correspondence_address_state_code}</CorrespondenceAddressStateCode>
                    <AddressStatus>{$user->address_status}</AddressStatus>
                    <RecordStatus>{$user->record_status}</RecordStatus>
                    <VerifyStatus>{$user->verify_status}</VerifyStatus>
                    <DateOfDeath>{$user->date_of_death}</DateOfDeath>
                    <OldICnumber>{$user->old_ic_number}</OldICnumber>
                    <ResidentialStatus>{$user->residential_status}</ResidentialStatus>
                    <CitizenshipStatus>{$user->citizenship_status}</CitizenshipStatus>
                    <EmailAddress>{$user->email}</EmailAddress>
                    <MobilePhoneNumber>{$user->mobile_phone_number}</MobilePhoneNumber>
                    <PermanentAddressCityDesc>{$user->permanent_address_city_desc}</PermanentAddressCityDesc>
                </NS1:retrieveCitizensDataRes>
            </soapenv:Body>
        </soapenv:Envelope>
        XML;

        return response($response, 200)->header('Content-Type', 'text/xml');
    }

    // Function to build an error response
    private function errorResponse($message)
    {
        $response = <<<XML
        <?xml version="1.0" encoding="utf-8"?>
        <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
            <soap:Body>
                <error>{$message}</error>
            </soap:Body>
        </soap:Envelope>
        XML;

        return response($response, 500)->header('Content-Type', 'text/xml');
    }

    // Helper function to get the current date and time in the required format
    private function getCurrentDateTime()
    {
        return Carbon::now()->format('Y-m-d\TH:i:s');
    }

    //
}
