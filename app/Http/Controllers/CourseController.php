<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Material;
use App\Models\Modul;
use App\Models\PaymentTransaction;

class CourseController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            return view('bootcamps.bootcamps', [
                'user' => auth()->user()->name,
                'title' => 'Course',
                'categories' => CourseCategory::all(),
                'courses' => Course::with('Modul')->get(),
            ]);
        }
        return view('bootcamps.bootcamps', [
            'title' => 'Bootcamp',
            'categories' => CourseCategory::all(),
            'courses' => Course::with('Modul')->get(),
        ]);
    }

    public function bootcamp(Course $course, PaymentTransaction $userpayment)
    {
        if (auth()->user()) {
            return view('bootcamps.bootcamp', [
                'user' => auth()->user()->name,
                'id' => $course->id,
                'title' => $course->title,
                'course' => $course,
                'userpayment' => $userpayment,
            ]);
        }
        return view('bootcamps.bootcamp', [
            'title' => $course->title,
            'course' => $course,
            'userpayment' => $userpayment,
        ]);
    }

    public function isibootcamp(Course $course, Material $material)
    {
        return view('bootcamps.isibootcamp', [
            'user' => auth()->user()->name,
            'title' => $course->title,
            'course' => $course,
            'material' => $material,
        ]);
    }
}
