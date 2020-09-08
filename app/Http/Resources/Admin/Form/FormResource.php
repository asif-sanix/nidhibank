<?php

namespace App\Http\Resources\Admin\Form;

use Illuminate\Http\Resources\Json\JsonResource;
class FormResource extends JsonResource
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
            'sn' => ++$request->start,
            'id' => $this->id,
            'financial_year' => $this->financial_year,
            'member_id' => $this->member_id,
            'submission_bate' => $this->submission_bate->format('d F Y'),
            'form_type' => $this->form_type,
            'created_at' => $this->created_at->format('d F Y'),
        ];
    }
}
