<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrmClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_clients', function (Blueprint $table) {
            $table->id();
            $table->string('name',70);
            $table->string('phone',16);
            $table->string('fb_name',70)->nullable();
            $table->string('source',70);
            $table->text('comments');
            $table->tinyInterger('service_type',4);
            $table->tinyInterger('client_type',4);
            $table->tinyInterger('branch_id',4);
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
        Schema::dropIfExists('crm_clients');
    }
}
