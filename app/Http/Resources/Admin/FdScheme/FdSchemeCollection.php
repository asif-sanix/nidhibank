<?php

namespace App\Http\Resources\Admin\FdScheme;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\FdScheme\FdSchemeResource;
class FdSchemeCollection extends ResourceCollection
{
    /**
     * TransFdScheme the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => FdSchemeResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
