<?php

namespace App\Http\Resources\api\Company;

use Illuminate\Http\Resources\Json\JsonResource;

class Agent extends JsonResource
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
            'name'=>$this->user->name,
            'email'=>$this->user->email,
            'phone'=>$this->user->phone_number ? $this->phone_number: "No Phone number",
            'photo'=>$this->user->profile_picture ? $this->profile_picture: "No Profile pic",
            'sex'=>$this->user->sex ? $this->sex: "Sex not specified",
            'authority'=>$this->privilege->name,
            
        ];
    }
}
