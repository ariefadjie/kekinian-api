<?php

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::truncate();
        Place::insert([
            [
                'id' => 1,
                'name'=>'Titik Singgah',
                'location' => 'Jl. Ki Hajar Dewantara',
                'description' => 'Ut eiusmod eiusmod magna proident commodo enim dolore occaecat consectetur eu quis exercitation pariatur.',
                'img_profile' => 'https://lorempixel.com/100/100/food/1',
                'img_cover' => 'https://lorempixel.com/400/200/food/1',
            ],
            [
                'id' => 2,
                'name'=>'Kayu Watu',
                'location' => 'Jl. Ki Hajar Dewantara Gang Teladan',
                'description' => 'Nisi velit Lorem culpa nulla mollit aute dolor commodo eu eiusmod enim in.',
                'img_profile' => 'https://lorempixel.com/100/100/food/2',
                'img_cover' => 'https://lorempixel.com/400/200/food/2',
            ],
            [
                'id' => 3,
                'name'=>'Griya Kebun',
                'location' => 'Jl. Ki Hajar Dewantara',
                'description' => 'Duis dolore ipsum anim ad exercitation anim..',
                'img_profile' => 'https://lorempixel.com/100/100/nature/3',
                'img_cover' => 'https://lorempixel.com/400/200/nature/3',
            ],
            [
                'id' => 4,
                'name'=>'Istana Resto',
                'location' => 'Jl. A. Yani',
                'description' => 'Aute nostrud esse duis laboris ipsum incididunt occaecat in proident consectetur.',
                'img_profile' => 'https://lorempixel.com/100/100/food/3',
                'img_cover' => 'https://lorempixel.com/400/200/food/4',
            ],
        ]);
    }
}
