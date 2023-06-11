<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Material;
use App\Models\Modul;

class CourseController extends Controller
{
    public function index()
    {
        return view('bootcamps.bootcamps', [
            'categories' => CourseCategory::all(),
            'courses' => Course::with('Modul')->get(),
        ]);
    }

    public function bootcamp(Course $course)
    {
        return view('bootcamps.bootcamp', [
            'course' => $course,
            'modul' => $course->modul->first(),
        ]);
    }

    public function isibootcamp(Course $course, Material $material)
    {
        return view('bootcamps.isibootcamp', [
            'course' => $course,
            'material' => $material,
        ]);
    }
}
