<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
	        $table->string('osztaly')->nullable();
            $table->rememberToken();
        });

        User::create(["name" => "Valaki", "email" => "va@laki.hu", "password" => Hash::make("jelszo123"), "osztaly" => "1A"]);
        User::create(["name" => "Más", "email" => "m@as.hu", "password" => Hash::make("jelszo123"), "osztaly" => "2A"]);
        User::create(["name" => "Senki", "email" => "se@nki.hu", "password" => Hash::make("jelszo123"), "osztaly" => "3A"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
