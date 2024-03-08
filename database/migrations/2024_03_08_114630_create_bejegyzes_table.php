<?php

use App\Models\Bejegyzes;
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
        Schema::create('bejegyzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenysegs');
	        $table->string('osztaly_id');
	        $table->boolean('allapot')->default(0);
        });

        Bejegyzes::create(["tevekenyseg_id" => Tevekenyseg::all()->random()->tevekenyseg_id, 'osztaly_id' => '1A', 'allapot' => false]);
        Bejegyzes::create(["tevekenyseg_id" => Tevekenyseg::all()->random()->tevekenyseg_id, 'osztaly_id' => '1A', 'allapot' => true]);
        Bejegyzes::create(["tevekenyseg_id" => Tevekenyseg::all()->random()->tevekenyseg_id, 'osztaly_id' => '2A', 'allapot' => false]);
        Bejegyzes::create(["tevekenyseg_id" => Tevekenyseg::all()->random()->tevekenyseg_id, 'osztaly_id' => '2A', 'allapot' => true]);
        Bejegyzes::create(["tevekenyseg_id" => Tevekenyseg::all()->random()->tevekenyseg_id, 'osztaly_id' => '3A', 'allapot' => false]);
        Bejegyzes::create(["tevekenyseg_id" => Tevekenyseg::all()->random()->tevekenyseg_id, 'osztaly_id' => '3A', 'allapot' => true]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzes');
    }
};
