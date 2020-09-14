<?php

namespace App\Http\Resources\Admin\AgentRanking;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Admin\AgentRanking\AgentRankingResource;
class AgentRankingCollection extends ResourceCollection
{
    /**
     * TransAgentRanking the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => AgentRankingResource::collection($this->collection),
            'recordsTotal' => $this->total(),
            'recordsFiltered' => $this->total(),
            'length' => $this->perPage(),
        ];
    }
}
