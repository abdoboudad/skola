<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.pages.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'about' => 'required',
            'duration' => 'required',
            'language' => 'required',
            'skill_level' => 'required',
            'deadline' => 'required|date',
            'certificate' => 'required',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'description' => 'required',
            'categorie' => 'required',
            'learn' => 'required',
            'requirements' => 'required',
        ]);

        // Create a new Course instance
        $course = new Course();
        $course->title = $validatedData['title'];
        $course->slug = Str::slug($validatedData['title']);
        $course->about = nl2br($validatedData['about']);
        $course->duration = $validatedData['duration'];
        $course->language = $validatedData['language'];
        $course->skill_level = $validatedData['skill_level'];
        $course->deadline = $validatedData['deadline'];
        $course->certificate = $validatedData['certificate'];
        $course->price = $validatedData['price'];
        $course->discount = $validatedData['discount'];
        $course->description = nl2br($validatedData['description']);
        $course->categorie = $validatedData['categorie'];
        $learns = [];
        foreach($validatedData['learn'] as $t){
            $learns[] = $t;
        }
        $course->learn = implode(', ',$learns);
        $requirements = [];
        foreach($validatedData['requirements'] as $t){
            $requirements[] = $t;
        }
        $course->requirements = implode(', ',$requirements);
        // Save the Course instance
        $course->user_id = '1';
        $course->save();

        // Redirect to a success page or return a response
        return redirect()->back()->with('success', 'Course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($c)
    {
        return view('admin.pages.course.show',compact('c'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('admin.pages.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }

    public function tutorial(){
        $tutorials = Course::all();
        return view('platform.tutorial.index',compact('tutorials'));
    }

    public function tutorial_show($slug){
        $course = Course::where('slug',$slug)->first();
        $vids = $course->vids;
        return view('platform.tutorial.show',compact('course','vids'));
    }
}
