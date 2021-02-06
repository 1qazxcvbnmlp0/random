<?php

namespace App\Http\Controllers;

use App\CompanyAbout;
use App\CompanyBenefit;
use App\CompanyJob;
use App\CompanyLocation;
use App\CompanyProfile;
use App\CompanyQandA;
use App\CompanyReview;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brandingData=CompanyProfile::where('id','2')->get();
        $companyAbout=CompanyAbout::where('company_id','2')->get();
        $companyBenefit=CompanyBenefit::where('company_id','2')->get();
        $companyJob=CompanyJob::where('company_id','2')->get();
        $companyLocation=CompanyLocation::where('company_id','2')->get();
        $companyQandA=CompanyQandA::where('company_id','2')->get();
        $companyReview=CompanyReview::where('company_id','2')->get();
        return view('BrandingViews.Profile',[
            'brandingData' => $brandingData,
            'companyAbout' => $companyAbout,
            'companyBenefit' => $companyBenefit,
            'companyJob' => $companyJob,
            'companyLocation' => $companyLocation,
            'companyQandA' => $companyQandA,
            'companyReview' => $companyReview
        ]);
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
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyProfile $companyProfile)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyProfile $companyProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyProfile $companyProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyProfile $companyProfile)
    {
        //
    }
}
