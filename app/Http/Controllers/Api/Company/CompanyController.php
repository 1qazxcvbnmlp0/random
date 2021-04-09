<?php

namespace App\Http\Controllers\Api\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Company; 
use App\Http\Resources\Api\Company\CompanyResourceCollection;
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
        //
        
        return CompanyResourceCollection::collection(Company::paginate(10));
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
        $company=Company::create([
            'company_name' => $request->company_name,
            'industry_type'=> $request->industry_type,
            'super_admin_id'=>$request->company_representative, 
            //This area has to be automatically filled by the system. During authentication
        ]);
        return $company; 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return new CompanyResource(Company::find($id));
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
        $update=Company::where('id', $id)->update([
            'company_name' => $request->company_name,
            'industry_type'=> $request->industry_type,
            'super_admin_id'=>$request->company_representative, 
        ]);
        return "Company Updated"; 
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
        $delete=Company::find($id)->delete();
        return "Company deleted successfully"; 
    }
}
