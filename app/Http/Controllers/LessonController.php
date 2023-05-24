<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $lessons = Lesson::all();
        // return view('lesson.index', compact('lessons'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        // $courses = Course::all();
        return view('lesson.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    {
       
        $request->validate([
            'name'=> 'required|string|min:2|max:190',
            'price' => 'required|string|min:1|max:9'
        ]);

        $lesson = Lesson::query()->create([
            'name'=> $request->name,
            'course_id'=> $course->id,
            'price'=> $request->price
        ]);
         
        return redirect()->route('getLessons',$course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        // $courses = Course::all();
        return view('lesson.edit', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        $request->validate([
            'name'=> 'required|string|min:2|max:190',
            'price' => 'required|string|min:1|max:9'
        ]);

        $lesson->update([
            'name'=> $request->name,
            'price'=> $request->price
        ]);

        return redirect()->route('getLessons',$lesson->course_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        
        $lesson->delete();
        return redirect()->route('getLessons',$lesson->course_id);
    }
}
