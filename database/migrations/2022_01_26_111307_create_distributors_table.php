<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('owner_name');
            $table->string('telephone');
            $table->string('address');
            $table->string('thana');
            $table->string('district');
            $table->string('contact_person_name');
            $table->string('designation');
            $table->string('phone');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('account_type');
            $table->string('bank_name');
            $table->string('branch_name');
            $table->string('branch_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distributors');
    }
}
