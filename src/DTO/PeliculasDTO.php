<?php
namespace videoclub\DTO;

class PeliculasDTO implements JsonSerializable{

    function __construct(private int $id, private string $title, private string $year, private int $duration){

        $this->id=$id;
        $this->title=$title;
        $this->year=$year;
        $this->duration=$duration;
    }

    function jsonSerialize(): mixed {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'year' => $this->year,
            'duration' => $this->duration
        ];
    }
}
