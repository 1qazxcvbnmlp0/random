<?php

namespace App\Http\Resources\Api\Company;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\Company\AgentCollection;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

       
        return [
            'company_name'=>$this->company_name,
            'industry_type'=>$this->industry_type,
            'company_representative'=>$this->superAdmin->name,
            'agents'=>AgentCollection::collection($this->companyAgent),
            'href' => [
                'detail'=>"No links provided",
                'jobs'=>route('jobs.index', $this->id),
            ]
        ];
    }
}
