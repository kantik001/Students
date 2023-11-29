<?php

namespace App\Http\Resources\Student;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'surname_id' => $this->surname_id,
            'country' => $this->country,
            'city' => $this->city,
            'is_married' => $this->is_married,
            'performance_rating'=> $this->performance_rating

        ];
    }
}
