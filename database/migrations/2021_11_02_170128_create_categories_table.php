<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name', 100)->nullable()->default('text');
            $table->string('content_publication', 100)->nullable(); 
            $table->timestamps();
        });
        /* Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('publication')->default('text');
            $table->enum('state_publication', ['published', 'reject', 'in_review' ])->nullable()->default('in_review');
            $table->text('content_publication')->nullable();
            $table->timestamps();
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
