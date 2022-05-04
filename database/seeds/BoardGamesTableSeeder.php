<?php

use App\Models\BoardGame;
use App\Models\BoardGameTranslation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BoardGamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fake adatok feltöltése
        $faker = Faker\Factory::create();
        $locales = ['en' => 'en_EN','hu' => 'hu_HU'];

        for ($i = 0; $i< 30; $i++) {
            $boardGame = new BoardGame();
            $boardGame->fill([
                'publisher' => $faker->company(),
                'game_time' => $faker->numberBetween(15, 360),
                'min_age' => $faker->numberBetween(3, 18),
                'min_player' => $faker->numberBetween(1, 4),
                'max_player' => $faker->numberBetween(5, 12),
            ]);
            $boardGame->save();

            foreach ($locales as $key => $locale){
                $boardGameTranslation = new BoardGameTranslation();
                $fakerLocale = Faker\Factory::create($locale);
                $name = $fakerLocale->words(4, true);

                $boardGameTranslation->board_game_id = $boardGame->id;
                $boardGameTranslation->fill([
                    'locale' => $key,
                    'name' => $name,
                    'description' => $fakerLocale->text(),
                    'seo_name' => Str::slug($name),
                ]);
                $boardGameTranslation->save();
            }

            DB::table('board_game_category')->insert([
                'board_game_id' => $boardGame->id,
                'category_id' => $faker->numberBetween(1, 4),
            ]);
        }
    }
}
