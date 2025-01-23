<?php

namespace App\Http\Controllers;

use App\Models\Favorit;
use App\Http\Requests\StoreFavoritRequest;
use App\Http\Requests\UpdateFavoritRequest;

class FavoritController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFavoritRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorit $favorit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorit $favorit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoritRequest $request, Favorit $favorit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorit $favorit)
    {
        //
    }
}
