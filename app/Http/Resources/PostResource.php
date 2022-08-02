<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'image'=>asset($this->image),
            'created'=>$this->created_at->format('Y-m-d'),
            'title'=>$this->title,
            'content'=>$this->content,
            'smallDesc'=>$this->smallDesc,
            'blog'=>$this->smallDesc . $this->content,
            'writer'=>$this->whenLoaded('user'),
            'category'=>CategoryResource::make($this->whenLoaded('category')),
        ];
    }
}
