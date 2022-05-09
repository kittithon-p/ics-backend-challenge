<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "amount" => $this->amount,
            "price" => $this->price . ' บาท',
            "size" => $this->sizes->name,
            "gender" => $this->genders->gender,
            "categorie" => $this->categorie->name,
        ];
    }
}
