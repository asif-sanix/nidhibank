<?php

namespace App\Http\Resources\Admin\FdAccount;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\FdAccount\FdAccountResource;
class FdAccountCollection extends ResourceCollection
{
    /**
     * TransFdAccount the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => FdAccountResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
