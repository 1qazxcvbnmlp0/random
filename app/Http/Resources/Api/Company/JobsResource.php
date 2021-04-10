<?php

namespace App\Http\Resources\Api\Company;

use Illuminate\Http\Resources\Json\JsonResource;

class JobsResource extends JsonResource
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
            
            'company'=>$this->company->company_name,
            'industry_type'=> $this->company->industry_type,
            'title'=>$this->title,
            'contract'=>$this->contract_type,
            'location'=>$this->location,
            'number_of_candidates'=>$this->head_count,
            'detail'=>$this->description,
            'education_degree'=>$this->education_degree->educational_level,
            'field_of_study'=>$this->field_of_study_table->field_name,
            'experience'=>$this->experience,
            'age'=>$this->age,
            'gender'=>$this->gender,
            'skills'=>$this->skills_required,
            'responsibilities'=>$this->responsibilities,
            'salary'=>$this->salary,
            'benefits'=>$this->benefits,
            'deadline'=>$this->deadline,
            'maximum_applicants'=>$this->maximum_applicants,
            'href'=>[
                'detail'=>route('jobs.show', [$this->company_id, $this->id]),
            ]
        ];
    }
}
