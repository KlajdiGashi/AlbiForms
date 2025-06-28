<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('total_palets')->default(0);
            $table->text('meta')->nullable();
            $table->enum('pack', ['SINGLE', 'BULK'])->nullable();
            $table->enum('priority', ['LOW', 'MEDIUM', 'HIGH'])->nullable();
            $table->enum('voip', ['UNDEFINED', 'SIP', 'MGCP'])->default('UNDEFINED');
            $table->unsignedBigInteger('model_id')->nullable();
            $table->unsignedBigInteger('model_version_id')->nullable();
            $table->string('tags')->nullable();
            $table->dateTime('deadline_date')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->string('client_address')->nullable();
            $table->string('firmware')->nullable();
            $table->integer('quantity')->default(0);
            $table->string('freight')->nullable();
            $table->string('height_palet')->nullable();
            $table->string('type_of_glue')->nullable();
            $table->string('lan_cable')->nullable();
            $table->string('power_supply')->nullable();
            $table->boolean('hdmi')->default(false);
            $table->boolean('remote_control')->default(false);
            $table->boolean('logo_removal')->default(false);
            $table->text('comment')->nullable();
            $table->string('status')->default('PENDING');
            $table->enum('type', ['REFURBISHED', 'DAMAGED'])->default('REFURBISHED');
            $table->double('lan_cost')->default(0);
            $table->double('psu_cost')->default(0);
            $table->double('refurbishment_cost')->default(0);
            $table->double('transport_customer_cost')->default(0);
            $table->double('transport_outgoing_cost')->default(0);
            $table->timestamps();
            $table->softDeletes();

            // Foreign Key Constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('set null');
            $table->foreign('model_id')->references('id')->on('models')->onDelete('set null');
            $table->foreign('model_version_id')->references('id')->on('model_versions')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
