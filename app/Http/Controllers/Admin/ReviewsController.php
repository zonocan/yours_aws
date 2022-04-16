<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    //投稿内容
    public function add()
    {
        return view('admin.reviews.create_review_detail');
    }
}
