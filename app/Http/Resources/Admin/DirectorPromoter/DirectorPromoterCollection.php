<?php

namespace App\Http\Resources\Admin\DirectorPromoter;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\DirectorPromoter\DirectorPromoterResource;
class DirectorPromoterCollection extends ResourceCollection
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
            'data' => DirectorPromoterResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
