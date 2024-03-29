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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('image_satu')->nullable();
            $table->string('image_dua')->nullable();
            $table->string('image_tiga')->nullable();
            $table->text('profil');
            $table->text('sejarah');
            $table->text('visi');
            $table->text('misi');
            $table->text('alamat');
            $table->String('telp');
            $table->String('email');
            $table->String('whatsapp');
            $table->String('link_whatsapp');
            $table->String('link_facebook');
            $table->String('link_instagram');
            $table->String('link_youtube');
            $table->String('link_embed');
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
        Schema::dropIfExists('profiles');
    }
};
