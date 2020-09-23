<?php

namespace App\Http\Resources\Admin\RecurringDepositScheme;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\RecurringDepositScheme\RecurringDepositSchemeResource;
class RecurringDepositSchemeCollection extends ResourceCollection
{
    /**
     * TransRecurringDepositScheme the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => RecurringDepositSchemeResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
