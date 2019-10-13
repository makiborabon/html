<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::paginate(15);

        return view('backend.suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.suppliers.create');
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
        $supplier = new Supplier();
        $supplier->contact_person = $request->contact_person;
        $supplier->street = $request->street;
        $supplier->zipcode = $request->zipcode;
        $supplier->brgy = $request->brgy;
        $supplier->region = $request->region;
        $supplier->city = $request->city;
        $supplier->telephone = $request->telephone;
        $supplier->mobile = $request->mobile;
        $supplier->position = $request->position;
        $supplier->company_name = $request->company;
        $supplier->email = $request->email;
        $supplier->status = $request->status; 
        $supplier->save();

        return redirect()->back()->with('success', 'Supplier Save Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier = Supplier::find($supplier->id);
        $supplier->contact_person = $request->contact_person;
        $supplier->street = $request->street;
        $supplier->zipcode = $request->zipcode;
        $supplier->brgy = $request->brgy;
        $supplier->region = $request->region;
        $supplier->city = $request->city;
        $supplier->telephone = $request->telephone;
        $supplier->mobile = $request->mobile;
        $supplier->position = $request->position;
        $supplier->company_name = $request->company;
        $supplier->email = $request->email;
        $supplier->status = $request->status;
        $supplier->save();

        return redirect()->back()->with('success', 'Supplier Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->back()->with('info', 'Supplier has been Deleted!');
    }
}
