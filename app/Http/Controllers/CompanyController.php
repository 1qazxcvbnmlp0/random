<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Model\Company; 
use App\Model\CompanyAgent; 
use App\Http\Resources\Api\Company\CompanyResource;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CompanyResource::collection(Company::paginate(20));
        
        // return view('recruiter/setup_company_profile');
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

     /*
     
     For web use only

        $company=Company::create([
            
            'company_name'=>$request->company_name,
            'industry_type'=>$request->industry_type,
            'super_admin_id'=>Auth::user()->id, 
            // 'super_admin_id'=>$request->data["id"], 
        ]);
        
        $companyAgent=CompanyAgent::create([
            'user_id'=>Auth::user()->id,
            // 'user_id'=>$request->data["id"], 
            'company_id'=>$company->id,
            'privilege_id'=>1
        ]);

        return redirect('home');
     
     */

        
        
        
        // For Api purpose only


         // // return $request; 
        $company=Company::create([
            
            'company_name'=>$request->data["company_name"],
            'industry_type'=>$request->data["industry_type"],
            // 'super_admin_id'=>Auth::user()->id, 
            'super_admin_id'=>$request->data["id"], 
        ]);
        
        $companyAgent=CompanyAgent::create([
            // 'user_id'=>Auth::user()->id,
            'user_id'=>$request->data["id"], 
            'company_id'=>$company->id,
            'privilege_id'=>1
        ]);

        // return [
        //     'company' => $company,
        //     'company agent'=>$companyAgent
        // ];
            
        return [
            "data"=>[
            'company' => $company,
            'company agent'=>$companyAgent
            ]
        ];

        
       
        
        
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
        return new CompanyResource(Company::find($id));
        // $company= Company::find($id);
        // if($company){
        //     return $company;
        // }

        // return "Could not found what you are searching for. ";
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
