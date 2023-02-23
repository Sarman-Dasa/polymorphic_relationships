<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class OnetomanyController extends Controller
{
    public function getPostData($id)
    {
        $data = Post::with("comments")->find($id);
        return $data;
        
    }
    public function getVideoData($id)
    {
        $data = Video::with('comments')->find($id);
        return $data;
    }
}
