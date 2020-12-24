<?php

namespace App\Http\Resources\Admin\Agent;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\Agent\AgentResource;
class AgentCollection extends ResourceCollection
{
    /**
     * TransAgent the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => AgentResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
