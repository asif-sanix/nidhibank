<?php

namespace App\Http\Resources\Admin\UnEncumberedDeposit;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\UnEncumberedDeposit\UnEncumberedDepositResource;
class UnEncumberedDepositCollection extends ResourceCollection
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
            'data' => UnEncumberedDepositResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
