<?php

namespace App\Http\Controllers\Api\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Job;
use App\Http\Resources\Api\Company\JobResource;
use App\Http\Resources\Api\Company\JobsResource;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($companyId)
    {
        //
        return JobsResource::collection(Job::where('company_id', $companyId)->paginate(10)); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($companyId, Request $request)
    {
        //
        $job=Job::create([
            'company_id'=>$companyId,
            'recruiting_manager_id'=> $request->recruiting_manager_id,
            'title'=>$request->title,
            'contract_type'=>$request->contract,
            'location'=>$request->location,
            'head_count'=>$request->number_of_candidates,
            'description'=>$request->detail,
            'level'=>$request->education_degree,
            'field_of_study'=>$request->field_of_study,
            'experience'=>$request->experience,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'skills_required'=>$request->skills_required,
            'responsibilities'=>$request->responsibilities,
            'salary'=>$request->salary,
            'benefits'=>$request->benefits,
            'deadline'=>$request->deadline,
            'maximum_applicants'=>$request->maximum_applicants,
            'pipeline_id'=>$request->pipeline,
        ]);

        return $job; 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($companyId, $id)
    {
        //
        // return Job::where('company_id', $companyId)->where('id', $id)->get();
        return new JobResource(Job::where('company_id', $companyId)->where('id', $id)->first()); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($companyId, $id)
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
    public function update($companyId, Request $request, $id)
    {
        //

        
       $update= Job::find($id)->update([
            'company_id'=>$companyId,
            'recruiting_manager_id'=> $request->recruiting_manager_id,
            'title'=>$request->title,
            'contract_type'=>$request->contract,
            'location'=>$request->location,
            'head_count'=>$request->number_of_candidates,
            'description'=>$request->detail,
            'level'=>$request->education_degree,
            'field_of_study'=>$request->field_of_study,
            'experience'=>$request->experience,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'skills_required'=>$request->skills_required,
            'responsibilities'=>$request->responsibilities,
            'salary'=>$request->salary,
            'benefits'=>$request->benefits,
            'deadline'=>$request->deadline,
            'maximum_applicants'=>$request->maximum_applicants,
            'pipeline_id'=>$request->pipeline,
        ]);

        return "Update is Successful"; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($companyId, $id)
    {
        //
        Job::find($id)->delete();

        return "Job Successfully deleted"; 
    }
}
