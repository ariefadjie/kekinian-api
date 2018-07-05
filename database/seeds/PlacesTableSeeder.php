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
                'img_profile' => 'https://picsum.photos/100/100?image='.rand(1,1084),
                'img_cover' => 'https://picsum.photos/400/200?image='.rand(1,1084),
            ],
            [
                'id' => 2,
                'name'=>'Kayu Watu',
                'location' => 'Jl. Ki Hajar Dewantara',
                'description' => 'Nisi velit Lorem culpa nulla mollit aute dolor commodo eu eiusmod enim in.',
                'img_profile' => 'https://picsum.photos/100/100?image='.rand(1,1084),
                'img_cover' => 'https://picsum.photos/400/200?image='.rand(1,1084),
            ],
            [
                'id' => 3,
                'name'=>'Griya Kebun',
                'location' => 'Jl. Ki Hajar Dewantara',
                'description' => 'Duis dolore ipsum anim ad exercitation anim..',
                'img_profile' => 'https://picsum.photos/100/100?image='.rand(1,1084),
                'img_cover' => 'https://picsum.photos/400/200?image='.rand(1,1084),
            ],
            [
                'id' => 4,
                'name'=>'Istana Resto',
                'location' => 'Jl. A. Yani',
                'description' => 'Aute nostrud esse duis laboris ipsum incididunt occaecat in proident consectetur.',
                'img_profile' => 'https://picsum.photos/100/100?image='.rand(1,1084),
                'img_cover' => 'https://picsum.photos/400/200?image='.rand(1,1084),
            ],
            [
                'id' => 5,
                'name'=>'Athar',
                'location' => 'Jl. Soekarno Hatta Mulyojati',
                'description' => 'Minim officia eu quis ullamco dolore est nostrud. Enim amet cupidatat Lorem eu nulla et ut dolore esse adipisicing. Exercitation nostrud consequat sunt in enim id ad laboris anim minim consectetur eiusmod.',
                'img_profile' => 'https://picsum.photos/100/100?image='.rand(1,1084),
                'img_cover' => 'https://picsum.photos/400/200?image='.rand(1,1084),
            ],
            [
                'id' => 6,
                'name'=>'Bebek Belur',
                'location' => 'Jl. Soekarno Hatta Mulyojati',
                'description' => 'Excepteur cupidatat mollit nulla ut esse. Aliqua eu eiusmod sunt laboris consectetur commodo irure nostrud Lorem deserunt. Laboris sint mollit commodo do sunt. Esse id ex voluptate eu occaecat dolore occaecat eiusmod fugiat occaecat est ex quis. Irure deserunt enim et minim deserunt duis est ex do nisi dolore. Mollit enim amet nostrud Lorem.',
                'img_profile' => 'https://picsum.photos/100/100?image='.rand(1,1084),
                'img_cover' => 'https://picsum.photos/400/200?image='.rand(1,1084),
            ],
            [
                'id' => 7,
                'name'=>'Dam Raman',
                'location' => 'Lampung',
                'description' => 'Id consequat aute pariatur exercitation id veniam aliquip enim aliqua qui quis cillum. Incididunt aute sit laborum ex commodo laboris. Exercitation irure dolor cillum ex enim. Id incididunt sit tempor tempor consequat eiusmod et id sunt duis. Fugiat laborum magna adipisicing labore ut nisi officia amet minim elit culpa est et consectetur. Cupidatat veniam nulla adipisicing eu reprehenderit eiusmod cupidatat eiusmod magna in ullamco do.',
                'img_profile' => 'https://picsum.photos/100/100?image='.rand(1,1084),
                'img_cover' => 'https://picsum.photos/400/200?image='.rand(1,1084),
            ],
            [
                'id' => 8,
                'name'=>'Jembatan Gantung',
                'location' => 'Lampung',
                'description' => 'Nisi irure esse eiusmod ea officia. Adipisicing culpa et excepteur pariatur ea ut cupidatat labore exercitation culpa veniam est duis. Quis qui cillum mollit aute ipsum consequat fugiat occaecat ad aliqua incididunt culpa. Deserunt deserunt do id incididunt fugiat commodo non.',
                'img_profile' => 'https://picsum.photos/100/100?image='.rand(1,1084),
                'img_cover' => 'https://picsum.photos/400/200?image='.rand(1,1084),
            ],
        ]);
    }
}
