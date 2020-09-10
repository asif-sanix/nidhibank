<?php

namespace App\Http\Resources\Admin\SavingAccountScheme;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\SavingAccountScheme\SavingAccountSchemeResource;
class SavingAccountSchemeCollection extends ResourceCollection
{
    /**
     * TransSavingAccountScheme the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => SavingAccountSchemeResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
