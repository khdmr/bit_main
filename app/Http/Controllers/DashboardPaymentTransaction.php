<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\PaymentTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPaymentTransaction extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.payment.index', [
            'payments' => PaymentTransaction::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(PaymentTransaction $payment)
    {
        return view('dashboard.payment.create',[
            'payment' => $payment,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentTransaction $payment)
    {
        return view('dashboard.payment.show', [
            'payment' => $payment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentTransaction $payment)
    {
        return view('dashboard.payment.edit', [
            'payment' => $payment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaymentTransaction $payment)
    {
       
        $rules = ([
            'id_user' => 'required',
            'id_course' => 'required',
        ]);
        // if($request->title != $payment->title) {
        //     $rules['title'] = 'required|max:255|unique:blog_posts';
        // }
        
        $validated = $request->validate($rules);

        Enrollment::create([
            'id_user' => $payment->id_user,
            'id_course' => $payment->id_course,
        ]);

        PaymentTransaction::where('id', $payment->id)
                ->update(['id_payment_status' => 2]);
        // PaymentTransaction::where('id', $payment->id)
        //         ->update($validated);

        return redirect('/dashboard/payment')->with('success', 'Activation Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentTransaction $payment)
    {
        if ($payment->image) {
            Storage::delete($payment->image);
        }
        PaymentTransaction::destroy($payment->id);
        return redirect('/dashboard/payment')->with('success', 'Payment deleted successfully!');
    }
}
