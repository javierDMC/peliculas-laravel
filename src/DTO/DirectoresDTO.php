<?php
namespace videoclub\DTO;
use JsonSerializable;

class DirectoresDTO implements JsonSerializable{

    function __construct(private int $id, private string $name){

        $this->id=$id;
        $this->name=$name;
    }

    function jsonSerialize(): mixed {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
