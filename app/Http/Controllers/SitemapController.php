<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SitemapController extends Controller
{

    public function generate()
    {
        SitemapGenerator::create(config('app.url'))
            ->writeToFile(public_path('sitemap.xml'));
        
        
            return 'Sitemap généré avec succès !';
    }

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
