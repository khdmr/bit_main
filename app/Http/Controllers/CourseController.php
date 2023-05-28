<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;

class CourseController extends Controller
{
    public function index()
    {
        return view('bootcamps', [
            'categories' => CourseCategory::all(),
            'courses' => Course::with('Modul')->get(),
        ]);
    }

    public function bootcamp(Course $course)
    {
        return view('bootcamp', [
            'course' => $course,
        ]);
    }
}
