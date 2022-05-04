<?php

use Illuminate\Database\Seeder;

class CategoryTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('category_translations')->delete();

        \DB::table('category_translations')->insert(array (
            0 =>
            array (
                'id' => 1,
                'category_id' => 1,
                'locale' => 'hu',
                'name' => 'Stratégia',
                'description' => 'Stratégiai játék',
                'seo_name' => 'strategia',
            ),
            1 =>
            array (
                'id' => 2,
                'category_id' => 1,
                'locale' => 'en',
                'name' => 'Strategy',
                'description' => 'Strategy game',
                'seo_name' => 'strategy',
            ),
            2 =>
            array (
                'id' => 3,
                'category_id' => 2,
                'locale' => 'hu',
                'name' => 'Tematikus',
                'description' => 'Tematikus játék',
                'seo_name' => 'tematikus',
            ),
            3 =>
            array (
                'id' => 4,
                'category_id' => 2,
                'locale' => 'en',
                'name' => 'Thematic',
                'description' => 'Thematic game',
                'seo_name' => 'thematic',
            ),
            4 =>
            array (
                'id' => 5,
                'category_id' => 3,
                'locale' => 'hu',
                'name' => 'Parti',
                'description' => 'Parti játék',
                'seo_name' => 'parti',
            ),
            5 =>
            array (
                'id' => 6,
                'category_id' => 3,
                'locale' => 'en',
                'name' => 'Party',
                'description' => 'Party game',
                'seo_name' => 'party',
            ),
            6 =>
            array (
                'id' => 7,
                'category_id' => 4,
                'locale' => 'hu',
                'name' => 'Kaland',
                'description' => 'Kaland játék',
                'seo_name' => 'kaland',
            ),
            7 =>
            array (
                'id' => 8,
                'category_id' => 4,
                'locale' => 'en',
                'name' => 'Adventure',
                'description' => 'Adventure game',
                'seo_name' => 'adventure',
            ),
        ));


    }
}
