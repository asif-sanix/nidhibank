<?php

namespace App\Http\Resources\Admin\PaidUpAuthorisedCapital;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\PaidUpAuthorisedCapital\PaidUpAuthorisedCapitalResource;
class PaidUpAuthorisedCapitalCollection extends ResourceCollection
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
            'data' => PaidUpAuthorisedCapitalResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
