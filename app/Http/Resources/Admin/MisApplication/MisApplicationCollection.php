<?php

namespace App\Http\Resources\Admin\MisApplication;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\MisApplication\MisApplicationResource;
class MisApplicationCollection extends ResourceCollection
{
    /**
     * TransMisApplication the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => MisApplicationResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
