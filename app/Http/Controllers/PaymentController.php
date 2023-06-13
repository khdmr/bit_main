<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\payment;
use App\Models\PaymentTransaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Course $course)
    {
        return view('payments.payment', [
        'title' => 'Payment Confirmation',
        'course' => $course,
        'payments' => payment::all(),
        ]);
    }

    public function save(Request $request, Course $course)
    {
        $id=$course->id;
        $validated = $request->validate([
            'id_payment' => 'required',
            'id_user' => 'required',
            'id_course' => 'required|unique:payment_transactions',
            'complete_name' => 'required|max:255',
            'no_telp' => 'required|max:13',
            'email' => 'required',
            'payment_confirmation' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'total_payment' => 'required',
        ]);

        if ($request->file('payment_confirmation')) {
            $validated['payment_confirmation'] = $request->file('payment_confirmation')->store('confirmation_images');
        }

        PaymentTransaction::create($validated);
        return redirect('/bootcamp/'.$id)->with('success', 'Successfully submit payment confirmation');
    }
}
