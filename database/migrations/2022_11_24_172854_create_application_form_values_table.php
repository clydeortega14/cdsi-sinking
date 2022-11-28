<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_form_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_form_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('input_field_type_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('string');
            $table->text('text');
            $table->integer('int');
            $table->date('date');
            $table->datetime('datetime');
            $table->foreignId('look_up_model_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->decimal('decimal', 9, 2);
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
        Schema::dropIfExists('application_form_values');
    }
}
