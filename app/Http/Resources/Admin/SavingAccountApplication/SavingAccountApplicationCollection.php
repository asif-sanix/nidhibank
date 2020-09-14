<?php

namespace App\Http\Resources\Admin\SavingAccountApplication;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\SavingAccountApplication\SavingAccountApplicationResource;
class SavingAccountApplicationCollection extends ResourceCollection
{
    /**
     * TransSavingAccountApplication the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => SavingAccountApplicationResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
