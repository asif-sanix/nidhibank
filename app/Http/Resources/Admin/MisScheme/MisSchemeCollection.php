<?php

namespace App\Http\Resources\Admin\MisScheme;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\MisScheme\MisSchemeResource;
class MisSchemeCollection extends ResourceCollection
{
    /**
     * TransMisScheme the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => MisSchemeResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
