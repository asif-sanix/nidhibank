<?php

namespace App\Http\Resources\Admin\LoanAccount;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\LoanAccount\LoanAccountResource;

class LoanAccountCollection extends ResourceCollection
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
            'data' => LoanAccountResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
