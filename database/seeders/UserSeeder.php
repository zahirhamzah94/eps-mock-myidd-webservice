<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listuser = [
            ['name' =>"Jane Smith"          ,"email" =>"janesmith@example.com"	            ,"ic_number"=>"700201015333"  ,"date_of_birth"=>"18/6/1990"   ,"gender"=>"F", "race"=>"Chinese"   ,"religion"=>"Christianity"     ,"permanent_address1"=>"789 Taman Desa"            ,"permanent_address2"=>"Apt 12B"   ,"permanent_address3"=>"Petaling Jaya" ,"permanent_address_postcode"=>"47301"  ,"permanent_address_city_code"=>"PJ"    ,"permanent_address_state_code"=>"SGR"  ,"correspondence_address1"=>"321 Jalan Kerinchi"	,"correspondence_address2"=>"Unit 5C"	,"correspondence_address3"=>"Klang"	        ,"correspondence_address_postcode"=>"42000"	,"correspondence_address_city_code"=>"KLG"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Joshua Cruz"         ,"email" =>"rhamilton@cowan-hernandez.com"	    ,"ic_number"=>"242540739727"  ,"date_of_birth"=>"17/4/2000"   ,"gender"=>"F", "race"=>"Malay"     ,"religion"=>"Islam"            ,"permanent_address1"=>"789 Taman Desa"            ,"permanent_address2"=>"Apt 12B"   ,"permanent_address3"=>"Petaling Jaya" ,"permanent_address_postcode"=>"47301"  ,"permanent_address_city_code"=>"PJ"    ,"permanent_address_state_code"=>"SGR"  ,"correspondence_address1"=>"321 Jalan Kerinchi"	,"correspondence_address2"=>"Unit 5C"	,"correspondence_address3"=>"Klang"	        ,"correspondence_address_postcode"=>"42000"	,"correspondence_address_city_code"=>"KLG"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Leonard Carter"      ,"email" =>"brenda43@haney-clark.com"	        ,"ic_number"=>"498441623157"  ,"date_of_birth"=>"7/4/1961"    ,"gender"=>"F", "race"=>"Others"    ,"religion"=>"Islam"            ,"permanent_address1"=>"789 Taman Desa"            ,"permanent_address2"=>"Apt 12B"   ,"permanent_address3"=>"Petaling Jaya"	,"permanent_address_postcode"=>"47301"  ,"permanent_address_city_code"=>"PJ"    ,"permanent_address_state_code"=>"SGR"  ,"correspondence_address1"=>"321 Jalan Kerinchi"	,"correspondence_address2"=>"Unit 5C"	,"correspondence_address3"=>"Klang"	        ,"correspondence_address_postcode"=>"42000"	,"correspondence_address_city_code"=>"KLG"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Jamie Nunez"         ,"email" =>"lisahansen@morgan.org"	            ,"ic_number"=>"935898722502"  ,"date_of_birth"=>"26/3/1946"   ,"gender"=>"F", "race"=>"Malay"     ,"religion"=>"Christianity"     ,"permanent_address1"=>"789 Taman Desa"            ,"permanent_address2"=>"Apt 12B"   ,"permanent_address3"=>"Petaling Jaya"	,"permanent_address_postcode"=>"47301"  ,"permanent_address_city_code"=>"PJ"    ,"permanent_address_state_code"=>"SGR"  ,"correspondence_address1"=>"321 Jalan Kerinchi"	,"correspondence_address2"=>"Unit 5C"	,"correspondence_address3"=>"Klang"	        ,"correspondence_address_postcode"=>"42000"	,"correspondence_address_city_code"=>"KLG"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'2'],
            ['name' =>"Casey Williams"      ,"email" =>"lcastro@hotmail.com"	            ,"ic_number"=>"849241341563"  ,"date_of_birth"=>"26/12/1980"  ,"gender"=>"M", "race"=>"Indian"    ,"religion"=>"Islam"            ,"permanent_address1"=>"789 Taman Desa"            ,"permanent_address2"=>"Apt 12B"   ,"permanent_address3"=>"Petaling Jaya" ,"permanent_address_postcode"=>"47301"  ,"permanent_address_city_code"=>"PJ"    ,"permanent_address_state_code"=>"SGR"  ,"correspondence_address1"=>"321 Jalan Kerinchi"	,"correspondence_address2"=>"Unit 5C"	,"correspondence_address3"=>"Klang"	        ,"correspondence_address_postcode"=>"42000"	,"correspondence_address_city_code"=>"KLG"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"John Doe"            ,"email" =>"johndoe@example.com"	            ,"ic_number"=>"600101015333"  ,"date_of_birth"=>"15/5/1980"   ,"gender"=>"M", "race"=>"Malay" 	,"religion"=>"Islam"            ,"permanent_address1"=>"123 Jalan Ampang"          ,"permanent_address2"=>"Apt 12B"	,"permanent_address3"=>"Kuala Lumpur"  ,"permanent_address_postcode"=>"50450"  ,"permanent_address_city_code"=>"KL"    ,"permanent_address_state_code"=>"KL"   ,"correspondence_address1"=>"456 Jalan Bukit"	    ,"correspondence_address2"=>"Suite 3A"	,"correspondence_address3"=>"Shah Alam"	    ,"correspondence_address_postcode"=>"40100"	,"correspondence_address_city_code"=>"SA"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Traci Davenport"     ,"email" =>"vickiking@ortiz.com"	            ,"ic_number"=>"607874001468"  ,"date_of_birth"=>"26/11/1991"  ,"gender"=>"M", "race"=>"Others"    ,"religion"=>"Christianity"     ,"permanent_address1"=>"123 Jalan Ampang"          ,"permanent_address2"=>"Apt 12B"	,"permanent_address3"=>"Kuala Lumpur"  ,"permanent_address_postcode"=>"50450"  ,"permanent_address_city_code"=>"KL"    ,"permanent_address_state_code"=>"KL"   ,"correspondence_address1"=>"456 Jalan Bukit"	    ,"correspondence_address2"=>"Suite 3A"	,"correspondence_address3"=>"Shah Alam"	    ,"correspondence_address_postcode"=>"40100"	,"correspondence_address_city_code"=>"SA"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Thomas Palmer"       ,"email" =>"fordbrianna@yahoo.com"	            ,"ic_number"=>"707181862314"  ,"date_of_birth"=>"13/5/1968"   ,"gender"=>"M", "race"=>"Others"    ,"religion"=>"Buddhism"         ,"permanent_address1"=>"123 Jalan Ampang"          ,"permanent_address2"=>"Apt 12B"	,"permanent_address3"=>"Kuala Lumpur"  ,"permanent_address_postcode"=>"50450"  ,"permanent_address_city_code"=>"KL"    ,"permanent_address_state_code"=>"KL"   ,"correspondence_address1"=>"456 Jalan Bukit"	    ,"correspondence_address2"=>"Suite 3A"	,"correspondence_address3"=>"Shah Alam"	    ,"correspondence_address_postcode"=>"40100"	,"correspondence_address_city_code"=>"SA"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Sandra Norris"       ,"email" =>"sandersana@sharp.com"	            ,"ic_number"=>"176800558193"  ,"date_of_birth"=>"23/2/1946"   ,"gender"=>"F", "race"=>"Malay"     ,"religion"=>"Islam"            ,"permanent_address1"=>"123 Jalan Ampang"          ,"permanent_address2"=>"Apt 12B"	,"permanent_address3"=>"Kuala Lumpur"	,"permanent_address_postcode"=>"50450"  ,"permanent_address_city_code"=>"KL"    ,"permanent_address_state_code"=>"KL"   ,"correspondence_address1"=>"456 Jalan Bukit"	    ,"correspondence_address2"=>"Suite 3A"	,"correspondence_address3"=>"Shah Alam"	    ,"correspondence_address_postcode"=>"40100"	,"correspondence_address_city_code"=>"SA"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Teresa Martinez"     ,"email" =>"etucker@turner.biz"	                ,"ic_number"=>"139137952875"  ,"date_of_birth"=>"17/9/1963"   ,"gender"=>"M", "race"=>"Others"    ,"religion"=>"None"             ,"permanent_address1"=>"123 Jalan Ampang"          ,"permanent_address2"=>"Apt 12B"	,"permanent_address3"=>"Kuala Lumpur"	,"permanent_address_postcode"=>"50450"  ,"permanent_address_city_code"=>"KL"    ,"permanent_address_state_code"=>"KL"   ,"correspondence_address1"=>"456 Jalan Bukit"	    ,"correspondence_address2"=>"Suite 3A"	,"correspondence_address3"=>"Shah Alam"	    ,"correspondence_address_postcode"=>"40100"	,"correspondence_address_city_code"=>"SA"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'2'],
            ['name' =>"Ahmad Ali"           ,"email" =>"ahmadali@example.com"	            ,"ic_number"=>"800301015333"  ,"date_of_birth"=>"25/3/1975"   ,"gender"=>"M", "race"=>"Indian"    ,"religion"=>"Hinduism"         ,"permanent_address1"=>"56 Lorong Damansara"       ,"permanent_address2"=>"Blk A5"	,"permanent_address3"=>"Subang Jaya"   ,"permanent_address_postcode"=>"47500"  ,"permanent_address_city_code"=>"SJ"    ,"permanent_address_state_code"=>"SGR"  ,"correspondence_address1"=>"789 Persiaran Jaya"	,"correspondence_address2"=>"Floor 2"	,"correspondence_address3"=>"Kajang"	    ,"correspondence_address_postcode"=>"43000"	,"correspondence_address_city_code"=>"KJ"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Brenda Rodriguez"    ,"email" =>"lstafford@hotmail.com"	            ,"ic_number"=>"594172855759"  ,"date_of_birth"=>"11/5/1983"   ,"gender"=>"M", "race"=>"Indian"    ,"religion"=>"Christianity"     ,"permanent_address1"=>"56 Lorong Damansara"       ,"permanent_address2"=>"Blk A5"	,"permanent_address3"=>"Subang Jaya"   ,"permanent_address_postcode"=>"47500"  ,"permanent_address_city_code"=>"SJ"    ,"permanent_address_state_code"=>"SGR"  ,"correspondence_address1"=>"789 Persiaran Jaya"	,"correspondence_address2"=>"Floor 2"	,"correspondence_address3"=>"Kajang"	    ,"correspondence_address_postcode"=>"43000"	,"correspondence_address_city_code"=>"KJ"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Patrick Turner"      ,"email" =>"riveramarc@hotmail.com"	            ,"ic_number"=>"882205051295"  ,"date_of_birth"=>"10/9/1955"   ,"gender"=>"F", "race"=>"Others"    ,"religion"=>"Hinduism"         ,"permanent_address1"=>"56 Lorong Damansara"       ,"permanent_address2"=>"Blk A5"	,"permanent_address3"=>"Subang Jaya"   ,"permanent_address_postcode"=>"47500"  ,"permanent_address_city_code"=>"SJ"    ,"permanent_address_state_code"=>"SGR"  ,"correspondence_address1"=>"789 Persiaran Jaya"	,"correspondence_address2"=>"Floor 2"	,"correspondence_address3"=>"Kajang"	    ,"correspondence_address_postcode"=>"43000"	,"correspondence_address_city_code"=>"KJ"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Ethan Mitchell"      ,"email" =>"nathanielgallagher@hotmail.com"	    ,"ic_number"=>"641944582147"  ,"date_of_birth"=>"14/11/1995"  ,"gender"=>"F", "race"=>"Others"    ,"religion"=>"None"             ,"permanent_address1"=>"56 Lorong Damansara"       ,"permanent_address2"=>"Blk A5"	,"permanent_address3"=>"Subang Jaya"	,"permanent_address_postcode"=>"47500"  ,"permanent_address_city_code"=>"SJ"    ,"permanent_address_state_code"=>"SGR"  ,"correspondence_address1"=>"789 Persiaran Jaya"	,"correspondence_address2"=>"Floor 2"	,"correspondence_address3"=>"Kajang"	    ,"correspondence_address_postcode"=>"43000"	,"correspondence_address_city_code"=>"KJ"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'1'],
            ['name' =>"Nicole Cole"         ,"email" =>"dyork@anthony-lambert.net"	        ,"ic_number"=>"283142535558"  ,"date_of_birth"=>"24/12/1936"  ,"gender"=>"M", "race"=>"Chinese"   ,"religion"=>"Christianity"     ,"permanent_address1"=>"56 Lorong Damansara"       ,"permanent_address2"=>"Blk A5"	,"permanent_address3"=>"Subang Jaya"	,"permanent_address_postcode"=>"47500"  ,"permanent_address_city_code"=>"SJ"    ,"permanent_address_state_code"=>"SGR"  ,"correspondence_address1"=>"789 Persiaran Jaya"	,"correspondence_address2"=>"Floor 2"	,"correspondence_address3"=>"Kajang"	    ,"correspondence_address_postcode"=>"43000"	,"correspondence_address_city_code"=>"KJ"	,"correspondence_address_state_code"=>"SGR" ,"record_status"=>'2'],
            ['name' =>"Michael Tan"         ,"email" =>"michaeltan@example.com"	            ,"ic_number"=>"700501015333"  ,"date_of_birth"=>"30/8/1991"   ,"gender"=>"M", "race"=>"Chinese"   ,"religion"=>"Buddhism"         ,"permanent_address1"=>"14 Jalan Ria"              ,"permanent_address2"=>"Apt 7D"	,"permanent_address3"=>"Ipoh"          ,"permanent_address_postcode"=>"30000"  ,"permanent_address_city_code"=>"IP"    ,"permanent_address_state_code"=>"IPH"  ,"correspondence_address1"=>"432 Jalan Manis"	    ,"correspondence_address2"=>"Unit 9B"	,"correspondence_address3"=>"Kota Bharu"	,"correspondence_address_postcode"=>"15000"	,"correspondence_address_city_code"=>"KB"	,"correspondence_address_state_code"=>"JHR" ,"record_status"=>'1'],
            ['name' =>"Lisa Benson"         ,"email" =>"barbarastevenson@hotmail.com"	    ,"ic_number"=>"661195807677"  ,"date_of_birth"=>"22/4/1935"   ,"gender"=>"M", "race"=>"Malay"     ,"religion"=>"Hinduism"         ,"permanent_address1"=>"14 Jalan Ria"              ,"permanent_address2"=>"Apt 7D"	,"permanent_address3"=>"Ipoh"          ,"permanent_address_postcode"=>"30000"  ,"permanent_address_city_code"=>"IP"    ,"permanent_address_state_code"=>"IPH"  ,"correspondence_address1"=>"432 Jalan Manis"	    ,"correspondence_address2"=>"Unit 9B"	,"correspondence_address3"=>"Kota Bharu"	,"correspondence_address_postcode"=>"15000"	,"correspondence_address_city_code"=>"KB"	,"correspondence_address_state_code"=>"JHR" ,"record_status"=>'1'],
            ['name' =>"Joseph Stone"        ,"email" =>"hernandezcody@gmail.com"	        ,"ic_number"=>"250997805289"  ,"date_of_birth"=>"30/8/2000"   ,"gender"=>"F", "race"=>"Indian"    ,"religion"=>"Hinduism"         ,"permanent_address1"=>"14 Jalan Ria"              ,"permanent_address2"=>"Apt 7D"	,"permanent_address3"=>"Ipoh"          ,"permanent_address_postcode"=>"30000"  ,"permanent_address_city_code"=>"IP"    ,"permanent_address_state_code"=>"IPH"  ,"correspondence_address1"=>"432 Jalan Manis"	    ,"correspondence_address2"=>"Unit 9B"	,"correspondence_address3"=>"Kota Bharu"	,"correspondence_address_postcode"=>"15000"	,"correspondence_address_city_code"=>"KB"	,"correspondence_address_state_code"=>"JHR" ,"record_status"=>'1'],
            ['name' =>"Christopher Long"    ,"email" =>"heather37@vargas.com"	            ,"ic_number"=>"545831622273"  ,"date_of_birth"=>"9/12/1976"   ,"gender"=>"M", "race"=>"Malay"     ,"religion"=>"Islam"            ,"permanent_address1"=>"14 Jalan Ria"              ,"permanent_address2"=>"Apt 7D"	,"permanent_address3"=>"Ipoh"	        ,"permanent_address_postcode"=>"30000"  ,"permanent_address_city_code"=>"IP"    ,"permanent_address_state_code"=>"IPH"  ,"correspondence_address1"=>"432 Jalan Manis"	    ,"correspondence_address2"=>"Unit 9B"	,"correspondence_address3"=>"Kota Bharu"	,"correspondence_address_postcode"=>"15000"	,"correspondence_address_city_code"=>"KB"	,"correspondence_address_state_code"=>"JHR" ,"record_status"=>'2'],
            ['name' =>"Siti Nurhaliza"      ,"email" =>"sitinur@example.com"	            ,"ic_number"=>"600401015333"  ,"date_of_birth"=>"12/12/1982"  ,"gender"=>"F", "race"=>"Malay" 	,"religion"=>"Islam"            ,"permanent_address1"=>"101 Jalan Merdeka"         ,"permanent_address2"=>"House 2"	,"permanent_address3"=>"Melaka"        ,"permanent_address_postcode"=>"75000"  ,"permanent_address_city_code"=>"MK"    ,"permanent_address_state_code"=>"MLK"  ,"correspondence_address1"=>"123 Taman Indah"	    ,"correspondence_address2"=>"Room 4A"	,"correspondence_address3"=>"Johor Bahru"	,"correspondence_address_postcode"=>"80000"	,"correspondence_address_city_code"=>"JB"	,"correspondence_address_state_code"=>"JHR" ,"record_status"=>'1'],
            ['name' =>"Whitney Hodge"       ,"email" =>"fmiller@brown.org"	                ,"ic_number"=>"439498836272"  ,"date_of_birth"=>"31/10/1983"  ,"gender"=>"M", "race"=>"Indian"    ,"religion"=>"Islam"            ,"permanent_address1"=>"101 Jalan Merdeka"         ,"permanent_address2"=>"House 2"	,"permanent_address3"=>"Melaka"        ,"permanent_address_postcode"=>"75000"  ,"permanent_address_city_code"=>"MK"    ,"permanent_address_state_code"=>"MLK"  ,"correspondence_address1"=>"123 Taman Indah"	    ,"correspondence_address2"=>"Room 4A"	,"correspondence_address3"=>"Johor Bahru"	,"correspondence_address_postcode"=>"80000"	,"correspondence_address_city_code"=>"JB"	,"correspondence_address_state_code"=>"JHR" ,"record_status"=>'1'],
            ['name' =>"Sara Marks"          ,"email" =>"melissa26@gmail.com"	            ,"ic_number"=>"949006125085"  ,"date_of_birth"=>"12/2/2002"   ,"gender"=>"F", "race"=>"Chinese"   ,"religion"=>"None"             ,"permanent_address1"=>"101 Jalan Merdeka"         ,"permanent_address2"=>"House 2"	,"permanent_address3"=>"Melaka"        ,"permanent_address_postcode"=>"75000"  ,"permanent_address_city_code"=>"MK"    ,"permanent_address_state_code"=>"MLK"  ,"correspondence_address1"=>"123 Taman Indah"	    ,"correspondence_address2"=>"Room 4A"	,"correspondence_address3"=>"Johor Bahru"	,"correspondence_address_postcode"=>"80000"	,"correspondence_address_city_code"=>"JB"	,"correspondence_address_state_code"=>"JHR" ,"record_status"=>'1'],
            ['name' =>"Terri Shaw"          ,"email" =>"jaimewebb@hill.com"	                ,"ic_number"=>"931866311576"  ,"date_of_birth"=>"13/10/1941"  ,"gender"=>"F", "race"=>"Indian"    ,"religion"=>"Buddhism"         ,"permanent_address1"=>"101 Jalan Merdeka"         ,"permanent_address2"=>"House 2"	,"permanent_address3"=>"Melaka"	    ,"permanent_address_postcode"=>"75000"  ,"permanent_address_city_code"=>"MK"    ,"permanent_address_state_code"=>"MLK"  ,"correspondence_address1"=>"123 Taman Indah"	    ,"correspondence_address2"=>"Room 4A"	,"correspondence_address3"=>"Johor Bahru"	,"correspondence_address_postcode"=>"80000"	,"correspondence_address_city_code"=>"JB"	,"correspondence_address_state_code"=>"JHR" ,"record_status"=>'2'],
            ['name' =>"Lori Williams"       ,"email" =>"kowens@hotmail.com"	                ,"ic_number"=>"910579891204"  ,"date_of_birth"=>"19/4/1970"   ,"gender"=>"F", "race"=>"Indian"    ,"religion"=>"Islam"            ,"permanent_address1"=>"101 Jalan Merdeka"         ,"permanent_address2"=>"House 2"	,"permanent_address3"=>"Melaka"	    ,"permanent_address_postcode"=>"75000"  ,"permanent_address_city_code"=>"MK"    ,"permanent_address_state_code"=>"MLK"  ,"correspondence_address1"=>"123 Taman Indah"	    ,"correspondence_address2"=>"Room 4A"	,"correspondence_address3"=>"Johor Bahru"	,"correspondence_address_postcode"=>"80000"	,"correspondence_address_city_code"=>"JB"	,"correspondence_address_state_code"=>"JHR" ,"record_status"=>'2'],
        ];

        User::insert($listuser);
    }
}
