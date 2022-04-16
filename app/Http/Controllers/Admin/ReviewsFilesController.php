<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewsFilesController extends Controller
{
    //投稿画像
    public function add()
    {
        return view('admin.reviews.create_review_files');
    }
    
}
