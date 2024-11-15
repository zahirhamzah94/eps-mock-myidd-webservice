<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('ic_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('race')->nullable();
            $table->string('religion')->nullable();
            $table->string('permanent_address1')->nullable();
            $table->string('permanent_address2')->nullable();
            $table->string('permanent_address3')->nullable();
            $table->string('permanent_address_postcode')->nullable();
            $table->string('permanent_address_city_code')->nullable();
            $table->string('permanent_address_state_code')->nullable();
            $table->string('correspondence_address1')->nullable();
            $table->string('correspondence_address2')->nullable();
            $table->string('correspondence_address3')->nullable();
            $table->string('correspondence_address_postcode')->nullable();
            $table->string('correspondence_address_city_code')->nullable();
            $table->string('correspondence_address_city_description')->nullable();
            $table->string('correspondence_address_state_code')->nullable();
            $table->string('correspondence_address_country_code')->nullable();
            $table->string('address_status')->nullable();
            $table->string('record_status')->nullable();
            $table->string('verify_status')->nullable();
            $table->date('date_of_death')->nullable();
            $table->string('old_ic_number')->nullable();
            $table->string('residential_status')->nullable();
            $table->string('citizenship_status')->nullable();
            $table->string('mobile_phone_number')->nullable();
            $table->string('permanent_address_city_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
