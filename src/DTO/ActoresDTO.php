<?php

namespace videoclub\DTO;

class ActoresDTO implements JsonSerializable{

    function __construct(private int $id, private string $name,private int $id_pelicula){

        $this->id=$id;
        $this->name=$name;
        $this->id_pelicula=$id_pelicula;
    }

    function jsonSerialize(): mixed {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'id_pelicula' => $this->id_pelicula
        ];
    }
}
