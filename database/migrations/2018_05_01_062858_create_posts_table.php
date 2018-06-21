<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('slug');/**slug */
            $table->string('nbarang'); /**kolom nama barang */
            $table->text('deskripsi');
            $table->integer('jbarang');/**jumlah stok barang */
            $table->integer('hbarang');/**harga barang */
            $table->string('gambar')->nullable()->default(null);
            $table->timestamps();
            $table->integer('status')->nullable()->default('0');
            $table->foreign('category_id')
            ->references('id')->on('categories')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
