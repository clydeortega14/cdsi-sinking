<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleSubModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_sub_modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('module_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('sub_module_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

            $table->unique(['module_id', 'sub_module_id'], 'unique_msm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_sub_modules');
    }
}
