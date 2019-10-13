<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Supplier;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::paginate(15);
        $suppliers = Supplier::all();
        return view('backend.inventory.index', compact('inventories', 'suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        $product_category = Supplier::all();
        return view('backend.inventory.create', compact('suppliers', 'product_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventory = new Inventory();
        $inventory->supplier_id = $request->supplier_id;
        $inventory->recieved_by = $request->recieved_by;
        $inventory->sku = $request->sku;
        $inventory->barcode = $request->barcode;
        $inventory->product_name = $request->product_name;
        $inventory->quantity = $request->quantity;
        $inventory->price = $request->price;
        $inventory->description = $request->description;
        $inventory->remarks = $request->remarks;
        $inventory->status = $request->status;
        $inventory->save();

        return redirect()->back()->with('success', 'Inventory Save Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $inventory = Inventory::find($inventory->id);
        $inventory->supplier_id = $request->supplier_id;
        $inventory->recieved_by = $request->recieved_by;
        $inventory->sku = $request->sku;
        $inventory->barcode = $request->barcode;
        $inventory->product_name = $request->product_name;
        $inventory->quantity = $request->quantity;
        $inventory->price = $request->price;
        $inventory->description = $request->description;
        $inventory->remarks = $request->remarks;
        $inventory->status = $request->status;
        $inventory->save();



        return redirect()->back()->with('success', 'Inventory Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->back()->with('info', 'Inventory has been Deleted!');
    }
}
