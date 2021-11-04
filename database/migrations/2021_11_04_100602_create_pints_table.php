<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Tap;
use App\Models\User;

class CreatePintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pints', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Tap::class);
            $table->foreignIdFor(User::class);
            $table->integer('price');
            $table->integer('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pints');
    }
}
