<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Job; 
use App\Model\Level;
use App\Model\FieldOfStudy;
use Illuminate\Support\Facades\Auth;

class CompanyCreateJob extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('recruiter/job_index');
        $jobs=Job::where('company_id', Auth::user()->company->id)->get(); 
        return view('recruiter/company_jobs', compact('jobs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $field_of_study=FieldOfStudy::pluck('field_name', 'id');
        $level=Level::pluck('educational_level', 'id');
        return view('recruiter/create_job', compact('field_of_study', 'level'));
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
        Job::create($request->all());
        return redirect(route('recruiterHome'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
