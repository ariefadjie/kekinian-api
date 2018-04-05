<?php

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::truncate();
        Review::insert([
            [
                'name'=>'Arief Adjie Wicaksono',
                'message' => 'Eiusmod non exercitation aute dolor elit do nulla quis cupidatat tempor cupidatat veniam do.',
                'rate' => 2,
                'place_id' => 1,
            ],
            [
                'name'=>'Ismy Amnestya Yunani',
                'message' => 'Amet anim cupidatat id voluptate occaecat dolore aute mollit ex voluptate consectetur enim deserunt nulla.',
                'rate' => 3,
                'place_id' => 1,
            ],
            [
                'name'=>'John Doe',
                'message' => 'Esse eiusmod id esse irure eiusmod pariatur dolore Lorem laboris.',
                'rate' => 3,
                'place_id' => 2,
            ],
            [
                'name'=>'Jane Doe',
                'message' => 'Dolor aliquip sunt amet laborum anim.',
                'rate' => 1,
                'place_id' => 2,
            ],
            [
                'name'=>'Lucinta Luna',
                'message' => 'Amet laboris nulla aute id aliqua consequat adipisicing ipsum nulla sunt excepteur pariatur.',
                'rate' => 2,
                'place_id' => 2,
            ],
        ]);
    }
}
