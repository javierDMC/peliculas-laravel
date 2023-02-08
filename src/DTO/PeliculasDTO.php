<?php
namespace videoclub\DTO;
use JsonSerializable;

class PeliculasDTO implements JsonSerializable{

    function __construct(private int $id, private string $title, private string $year, private int $duration, private int $director_id){

        $this->id=$id;
        $this->title=$title;
        $this->year=$year;
        $this->duration=$duration;
        $this->director_id = $director_id;
    }

    function jsonSerialize(): mixed {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'year' => $this->year,
            'duration' => $this->duration,
            'director_id' => $this->director_id
        ];
    }
}
