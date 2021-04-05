<?php

namespace App\Http\Resources\api\Company;

use Illuminate\Http\Resources\Json\JsonResource;

class AgentCollection extends JsonResource
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
            'name'=>$this->user->name,
            'email'=>$this->user->email,
            'Phone'=>$this->user->phone_number ? $this->phone_number: "No Phone number",
            'photo'=>$this->user->profile_picture ? $this->profile_picture: "No Profile pic",
            'sex'=>$this->user->sex ? $this->sex: "Sex not specified",
            'Authority'=>$this->privilege->name,
            
        ];
    }
}
