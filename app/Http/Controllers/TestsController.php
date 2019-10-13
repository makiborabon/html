<?php

namespace App\Http\Controllers;

use App\Tests;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests =  Tests::paginate(1);
        // return $tests;
        return view('backend.test.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Tests::create([ 'firstname' => $request->firstname, 'lastname' => $request->lastname, ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tests  $tests
     * @return \Illuminate\Http\Response
     */
    public function show(Tests $test)
    {
        return Tests::find($test->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tests  $tests
     * @return \Illuminate\Http\Response
     */
    public function edit(Tests $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tests  $tests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tests $tests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tests  $tests
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tests $tests)
    {
        //
    }
}
