<?php

namespace App\Http\Controllers;

use App\CompanyAbout;
use App\CompanyProfile;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class CompanyAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Integer $id)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\CompanyAbout  $companyAbout
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyAbout $companyAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanyAbout  $companyAbout
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyAbout $companyAbout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanyAbout  $companyAbout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyAbout $companyAbout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanyAbout  $companyAbout
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyAbout $companyAbout)
    {
        //
    }
}
