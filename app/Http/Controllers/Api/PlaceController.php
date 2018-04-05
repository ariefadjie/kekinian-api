<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Place;
use DB;

class PlaceController extends Controller
{
    public function index()
    {
        return Place::select(
            'id',
            'name',
            'location',
            'img_profile',
            'img_cover',
            DB::raw('(select count(*) as aggregate from reviews where place_id=places.id) as review'),
            DB::raw('(select ceil(sum(rate)/review) as aggregate from reviews where place_id=places.id) as rate')
        )->get();
    }

    public function show($id)
    {
        return Place::select(
            'name',
            'location',
            'description',
            'img_profile',
            'img_cover'
        )->find($id);
    }
}
