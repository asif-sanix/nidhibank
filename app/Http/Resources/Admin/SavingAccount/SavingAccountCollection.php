<?php

namespace App\Http\Resources\Admin\SavingAccount;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\SavingAccount\SavingAccountResource;
class SavingAccountCollection extends ResourceCollection
{
    /**
     * TransSavingAccount the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => SavingAccountResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
