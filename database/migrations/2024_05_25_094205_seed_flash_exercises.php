<?php

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
			\DB::table("flash_exercises")->insert([

				[
					"name" => "Pompe"
				],

				[
					"name" => "Flexion extension"
				],

				[
					"name" => "Abdo boxeur"
				],

				[
					"name" => "Fente"
				],

				[
					"name" => "Crunch"
				],

				[
					"name" => "Abdo rameur"
				],

				[
					"name" => "Mixe"
				],

			]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
