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
    public function up(): void
    {
        Schema::create('tanks', static function (Blueprint $table) {
            $table->string('wg_id')->unique();
            $table->string('name');
            $table->string('image_link');
            $table->string('nation');
            $table->boolean('is_premium');
            $table->decimal('price_gold', '9', '2')->nullable();
            $table->decimal('price_credit', '9', '2')->nullable();
            $table->string('type');
            $table->integer('tier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tanks');
    }
};
