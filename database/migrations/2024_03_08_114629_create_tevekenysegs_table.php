<?php

use App\Models\Tevekenyseg;
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
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev');
	        $table->integer('pontszam');
        });

        Tevekenyseg::create(['tevekenyseg_nev' => 'kerékpárral jöttem iskolába', 'pontszam' => 1]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'rollerrel jöttem iskolába', 'pontszam' => 2]); 
        Tevekenyseg::create(['tevekenyseg_nev' => '10 km-t gyalogoltam buszozás helyett ', 'pontszam' => 3]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'ültettem fát ', 'pontszam' => 4]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'ültettem virágot ', 'pontszam' => 5]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'ültettem egyéb növényt ', 'pontszam' => 6]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'kevesebb vizet használtam a fürdéshez ', 'pontszam' => 7]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'összeszedtem a szemetet egy közterületen, erdőben, stb ', 'pontszam' => 8]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'tartós szatyorba vásároltam, nem nylonba ', 'pontszam' => 9]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'nem használtam egyszer használatos műanyagot ', 'pontszam' => 10]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'tartós csomagolású terméket vásároltam – pl üvegbe vettem a tejet, nem használtam pet palackot', 'pontszam' => 11]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'környezetbarát csomagolású terméket vásároltam ', 'pontszam' => 12]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'kevesebb húst ettem a héten ', 'pontszam' => 13]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'ökológiai gazdaságból származó élelmiszert vettem ', 'pontszam' => 14]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'kirándultam, szabadban töltöttem időt a héten ', 'pontszam' => 15]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'kevesebb ruhát/terméket vásároltam a héten, hogy fenntarthatóbb legyen a környeztünk! ', 'pontszam' => 16]); 
        Tevekenyseg::create(['tevekenyseg_nev' => 'önkénteskedtem a Greenpeace-nél, vagy más zöld szervezetnél', 'pontszam' => 17]); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegs');
    }
};
