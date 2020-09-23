<?php

namespace App\Http\Resources\Admin\MisAccount;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\MisAccount\MisAccountResource;
class MisAccountCollection extends ResourceCollection
{
    /**
     * TransMisAccount the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => MisAccountResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
