<?php

namespace App\Http\Resources\Admin\RecurringDepositAccount;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\RecurringDepositAccount\RecurringDepositAccountResource;
class RecurringDepositAccountCollection extends ResourceCollection
{
    /**
     * TransRecurringDepositAccount the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => RecurringDepositAccountResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
