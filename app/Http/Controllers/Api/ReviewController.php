<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Review;

class ReviewController extends Controller
{
    public function show($id)
    {
        return Review::select('name','message','rate')->wherePlaceId($id)->latest()->get();
    }

    public function store()
    {
        $this->validate(request(),[
            'name' => 'required',
            'message' => 'required',
            'rate' => 'required|min:1|max:3|numeric',
            'place_id' => 'required',
        ]);
        $data = Review::create(request()->all());
        return [
            'message'=>'Review Sent!',
            'data' => $data,
        ];
    }
}
