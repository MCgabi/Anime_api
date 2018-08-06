<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Creator extends JsonResource
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
            'id' => $this->id,
            'anime_id' => $this->anime_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'role' => $this->role
        ];
    }
}
