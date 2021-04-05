<?php

namespace App\Http\Resources\Api\Company;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResourceCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
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
            'href' => [
                'detail'=>route('info.show', $this->id),
            ]
        ];
    }
}
