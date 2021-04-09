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
            'company_name'=>$this->company_name,
            'industry_type'=>$this->industry_type,
            'company_representative'=>$this->superAdmin->name,
            'href' => [
                'detail'=>route('info.show', $this->id),
            ]
        ];
    }
}
