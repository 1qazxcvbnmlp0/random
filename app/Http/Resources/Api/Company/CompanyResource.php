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
            'Company name'=>$this->company_name,
            'Industry type'=>$this->industry_type,
            'Company Representative'=>$this->superAdmin->name,
            'Agents'=>AgentCollection::collection($this->companyAgent),
            'href' => [
                'detail'=>"No links provided",
                'jobs'=>route('jobs.index', $this->id),
            ]
        ];
    }
}
