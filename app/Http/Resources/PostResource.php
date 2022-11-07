<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public function with($request)
    {
        return [
            "status_code" => 200,
            "status" => "success",
        ];
    }
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}