<?php

namespace App\Http\Resources\Admin\AgentRanking;

use Illuminate\Http\Resources\Json\JsonResource;
class AgentRankingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    
    public function toArray($request)
    {
        return [
            'sn' => ++$request->start,
            'id' => $this->id,
            'rank' => $this->rank,
            'rank_name' => $this->rank_name,
            'status' => $this->status?"<span class='badge badge-success'>Active</span>":"<span class='badge badge-danger'>Deactivate</span>",
            'created_at' => $this->created_at->format('d F Y'),
        ];
    }
}
