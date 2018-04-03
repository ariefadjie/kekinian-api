<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function store()
    {
        $this->validate(request(),[
            'name' => 'required',
            'message' => 'required',
            'rate' => 'required|min:1|max:3|numeric',
        ]);
        return ['message'=>'Review Sent!'];
    }
}
