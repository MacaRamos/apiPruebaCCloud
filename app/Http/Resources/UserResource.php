<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        //retornar únicamente campos Name, Email, Birthdate
        return [
            'nombre' => ucwords($this->name),
            'email' => $this->email,
            'cumpleaños' => date('d-m-Y', strtotime($this->birthdate))
        ];
    }
}
