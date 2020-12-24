<?php

namespace App\Http\Resources\Admin\FdApplication;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\FdApplication\FdApplicationResource;
class FdApplicationCollection extends ResourceCollection
{
    /**
     * TransFdApplication the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => FdApplicationResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
