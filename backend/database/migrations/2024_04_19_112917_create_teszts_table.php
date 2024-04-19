<?php

use App\Models\Teszt;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });


        Teszt::create([
            'kerdes' => 'igen?',
            'v1' => 'igen',
            'v2' => 'nem',
            'v3' => 'nem',
            'v4' => 'nem',
            'kategoriaId' => '1',
        ]);

        Teszt::create([
            'kerdes' => 'szomjas?',
            'v1' => 'nem',
            'v2' => 'igen',
            'v3' => 'nem',
            'v4' => 'nem',
            'helyes' => 'v2',
            'kategoriaId' => '2',
        ]);

        Teszt::create([
            'kerdes' => 'cica?',
            'v1' => 'cica',
            'v2' => 'igen',
            'v3' => 'nem',
            'v4' => 'talán',
            'kategoriaId' => '1',
        ]);

        Teszt::create([
            'kerdes' => 'bambi danda?',
            'v1' => 'igen',
            'v2' => 'tuti nem',
            'v3' => 'nem',
            'v4' => 'a-a',
            'kategoriaId' => '2',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
