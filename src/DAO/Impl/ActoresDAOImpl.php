<?php
namespace videoclub\DAO\Impl;

use videoclub\DTO\ActoresDTO;
use videoclub\DAO\IActoresDAO;


class ActoresDAOImpl extends IActoresDAO{

    public function read(): array{

        $result = [];
        $actores = Actor::get()->toArray();

        foreach ($actores as $actor){
            array_push($result, new ActoresDTO(
                $actor['id'],
                $actor['name']
            ));
        }

        return $result;
    }
    public function findById(int $id): ActoresDTO{

        $actor = Actor::all()->find($id);

        $result = new ActoresDTO(
            $actor['id'],
            $actor['name']
        );

        return $result;
    }
    public function update(int $id, Request $request): bool{
        $actor = Actor::where('id', intval($id))->update([
            'id'=>$request->id,
            'name'=>$request->name
        ]);

        return $actor;
    }
    public function delete(int $id): bool{
        return Actor::destroy(intval($id));
    }
    public function create(Request $request): bool{
        $actor = new Actor();

        $actor->id = $request->id;
        $actor->name = $request->name;

        return $actor->save();
    }

}
