<?php

use App\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Books of the Bible', 'The Ten Commandments', 'The Creed', 'The Lord\'s Prayer', 'The Sacrament Holy Baptism', 'Confession', 'The Sacrament of the Altar', 'Bible Verses'];

        foreach ($array as $item) {
            Categories::create([
                'category_type' => $item
            ]);
        }
    }
}
