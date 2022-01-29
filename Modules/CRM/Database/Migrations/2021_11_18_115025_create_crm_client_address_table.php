<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrmClientAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_client_address', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->integer('district_id')
            $table->integer('area_id')->nullable();
            $table->string('zone')->nullable();
            $table->integer('post_code')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('area_name')->nullable();
            $table->tinyInterger('lift_access')->nullable()->->comment('0=no, 1=yes');
            $table->tinyInterger('parking_access')->nullable()->->comment('0=no, 1=yes');
            $table->string('others_info',255)->nullable();
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
        Schema::dropIfExists('crm_client_address');
    }
}
