<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->text('description')->nullable();
            $table->text('content');
            $table->string('preview_image')->nullable();
            $table->integer('price');
            $table->integer('old_price');
            $table->integer('count');
            $table->boolean('available')->default(true);

            $table->foreignId('category_id')->nullable()->index()->constrained('categories');
            $table->foreignId('group_id')->nullable()->index()->constrained('groups');

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
        Schema::dropIfExists('products');
    }
}
