<?php

namespace App\Http\Resources\Admin\RecurringDepositApplication;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\RecurringDepositApplication\RecurringDepositApplicationResource;
class RecurringDepositApplicationCollection extends ResourceCollection
{
    /**
     * TransRecurringDepositApplication the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => RecurringDepositApplicationResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
