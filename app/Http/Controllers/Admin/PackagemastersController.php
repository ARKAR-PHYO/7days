<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Packagemaster;
use App\Citymaster;
use Illuminate\Http\Request;

class PackagemastersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        return view('admin.packages.packagelist', ['packages' => Packagemaster::with('user')->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages._create', ['packages' => new Packagemaster(), 'citymaster' => Citymaster::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Packagemaster  $packagemaster
     * @return \Illuminate\Http\Response
     */
    public function show(Packagemaster $packagemaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Packagemaster  $packagemaster
     * @return \Illuminate\Http\Response
     */
    public function edit(Packagemaster $packagemaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Packagemaster  $packagemaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packagemaster $packagemaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Packagemaster  $packagemaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packagemaster $packagemaster)
    {
        //
    }
}
