<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProdutoResource extends JsonResource
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
            'titulo' => $this->titulo,
            'valor' => $this->valor,
            'categoria' => $this->categoria,
            'img_url' => asset('storage/'.$this->img_url),
            'porte' => $this->porte,
            'idade' => $this->idade,
            'racas' => $this->racas,
            'quantidade' => $this->quantidade,
            'sabor' => $this->sabor,
            'marca' => $this->marca,
        ];
    }
}


