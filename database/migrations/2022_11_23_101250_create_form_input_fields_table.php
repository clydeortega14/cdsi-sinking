<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormInputFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_input_fields', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('form_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('form_input_field_group_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('input_field_type_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('placeholder');
            $table->string('label');
            $table->integer('max')->nullable();
            $table->integer('min')->nullable();
            $table->string('look_up_model')->nullable(); // ex: App\Models\LoanType
            $table->boolean('required')->default(true);
            $table->boolean('status');
            $table->integer('sequence');
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
        Schema::dropIfExists('form_input_fields');
    }
}
