<?php

use App\Models\Album;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageManipulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_manipulations', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('path', 2000);
            $table->string('type',25);
            $table->string('data');
            $table->string('output_path', 2000);
            $table->timestamp('created_at');
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Album::class, 'album_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_manipulations');

   }
}