<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
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
            'id' => $this->id,
            'news_type_id' => $this->news_type_id,
            'user_id' => $this->user_id,
            'tieu_de' => $this->tieu_de,
            'tom_tat' => $this->tom_tat,
        ];
    }
}
