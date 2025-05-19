<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listing', function (Blueprint $table) {

            $table->id();

            //
            $table->unsignedTinyInteger('beds');
            $table->unsignedTinyInteger('baths');
            $table->unsignedSmallInteger('area');

            $table->tinyText('city');
            $table->tinyText('code');
            $table->tinyText('street');
            $table->tinyText('street_nr');

            $table->tinyText('price');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('listing', function (Blueprint $table) {
        //     //
        //     $table->dropColumn()
        // });
        Schema::dropIfExists('listing');

        // Schema::dropColumns('listing', [
        //     'beds',
        //     'baths',
        //     'area',
        //     'city',
        //     'code',
        //     'street',
        //     'street_nr',
        //     'price'
        // ]);
    }
};
