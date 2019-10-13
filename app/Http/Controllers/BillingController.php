<?php

namespace App\Http\Controllers;

use App\Billing;
use App\BillingType;
use Illuminate\Http\Request;
use Auth;
class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $billings = Billing::all();

        return view('backend.billing.index', compact('billings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = BillingType::where('parent_id', false)->get();
        return view('backend.billing.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $billing = new Billing();
        $billing->title = $request->title;
        $billing->user_id = Auth::user()->id;
        $billing->billing_type_id = $request->billing_type_id;
        $billing->billing_sub_type_id = $request->billing_sub_type_id;
        $billing->amount = $request->amount;
        $billing->description = $request->description;
        $billing->date = $request->date;
        $billing->save();

        return redirect()->back()->with('success', 'Billing Save Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function show(Billing $billing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function edit(Billing $billing)
    {
        $billing = Billing::find($billing->id);
        $billing_types = BillingType::where('parent_id', false)->get();
        $billing_sub_types = BillingType::where('parent_id', $billing->billing_type_id)->get();
        // dd($billing_sub_types);
        return view('backend.billing.edit', compact('billing', 'billing_types', 'billing_sub_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Billing $billing)
    {
        // dd($request->all());
        $billing = Billing::find($billing->id);
        $billing->title = $request->title;
        $billing->user_id = Auth::user()->id;
        $billing->billing_type_id = $request->billing_type_id;
        $billing->billing_sub_type_id = $request->billing_sub_type_id;
        $billing->amount = $request->amount;
        $billing->description = $request->description;
        $billing->date = $request->date;
        $billing->save();

        return redirect()->back()->with('success', 'Billing Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Billing $billing)
    {
        $billing->delete();
        return redirect()->back()->with('info', 'Billing has been Deleted!');
    }
}
