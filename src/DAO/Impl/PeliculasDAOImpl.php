<?php
namespace videoclub\DAO\Impl;

use videoclub\DTO\PeliculasDTO;
use videoclub\DAO\IPeliculasDAO;


class PeliculasDAOImpl extends IPeliculasDAO{

    public function read(): array{

        $result = [];
        $peliculas = Pelicula::get()->toArray();

        foreach ($peliculas as $pelicula){
            array_push($result, new PeliculasDTO(
                $peliculas['id'],
                $peliculas['title'],
                $peliculas['year'],
                $peliculas['duration']
            ));
        }

        return $result;
    }
    public function findById(int $id): PeliculasDTO{

        $peliculas = Pelicula::all()->find($id);

        $result = new PeliculasDTO(
            $peliculas['id'],
            $peliculas['title'],
            $peliculas['year'],
            $peliculas['duration']
        );

        return $result;
    }
    public function update(int $id, Request $request): bool{
        $peliculas = Pelicula::where('id', intval($id))->update([
            'id'=>$request->id,
            'title'=>$request->title,
            'year'=>$request->year,
            'duration'=>$request->duration
        ]);

        return $peliculas;
    }
    public function delete(int $id): bool{
        return Pelicula::destroy(intval($id));
    }
    public function create(Request $request): bool{
        $peliculas = new Pelicula();

        $peliculas->id = $request->id;
        $peliculas->title = $request->title;
        $peliculas->year = $request->year;
        $peliculas->duration = $request->duration;

        return $peliculas->save();
    }

}
