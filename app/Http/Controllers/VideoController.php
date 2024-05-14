<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function store(Request $request,$id)
    {
        $vid = $request->file('video')->store('vids','files');
        Video::create([
            'main_title'=>$request->main_title,
            'title'=>$request->title,
            'video'=>$vid,
            'file'=>$request->file,
            'course_id'=>$id
        ]);

        return redirect()->back();
    }

    public function watch($slug,$id){
        $course = Course::where('slug',$slug)->firstOrfail();
        $video = Video::findOrfail($id);
        return view('platform.tutorial.watch',compact('course','video'));
    }

}
