<?php

namespace App\Http\Controllers\Admin;

use App\Citymaster;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCitymasterRequest;

class CitymastersController extends Controller
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
        return view('admin.cities.citylists', ['cities' => Citymaster::with('user')->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cities._create', ['cities' => new Citymaster()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCitymasterRequest $request)
    {
        // dd($request);
        $request->user()->citymasters()->create($request->only('city_name'));
        return redirect()->route('citymasters.index')->with('success', "Your City has been created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citymaster  $citymaster
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.cities._show', ['cities' => Citymaster::FindOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citymaster  $citymaster
     * @return \Illuminate\Http\Response
     */
    public function edit(Citymaster $citymaster)
    {
        return view('admin.cities._edit', ['citymaster' => new Citymaster()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citymaster  $citymaster
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCitymasterRequest $request, Citymaster $citymaster)
    {
        $citymaster->update($request->only('city_name'));
        return redirect()->route('citymasters.index')->with('success', "Your City has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citymaster  $citymaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citymaster $citymaster)
    {
        //
    }
}
