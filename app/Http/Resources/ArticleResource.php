<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // panggil all data article
        return parent::toArray($request);

        // panggil data yang perlu saja
        // return [
        //     'title' => $this->title,
        // ];
    }

    public function with($request)
    {
        return ['status' => 'Data success is Called'];
    }
}
