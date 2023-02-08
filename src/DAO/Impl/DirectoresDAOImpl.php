<?php
namespace videoclub\DAO\Impl;

use App\Models\Director;
use Illuminate\Http\Request;
use videoclub\DTO\DirectoresDTO;
use videoclub\DAO\IDirectoresDAO;


class DirectoresDAOImpl implements IDirectoresDAO{

    public function read(): array{

        $result = [];
        $directores = Director::get()->toArray();

        foreach ($directores as $director){
            array_push($result, new DirectoresDTO(
                $director['id'],
                $director['name']
            ));
        }

        return $result;
    }
    public function findById(int $id): DirectoresDTO{

        $director = Director::all()->find($id);

        $result = new DirectoresDTO(
            $director['id'],
            $director['name']
        );

        return $result;
    }
    public function update(int $id, Request $request): bool{
        $director = Director::where('id', intval($id))->update([
            'id'=>$request->id,
            'name'=>$request->name
        ]);

        return $director;
    }
    public function delete(int $id): bool{
        return Director::destroy(intval($id));
    }
    public function create(Request $request): bool{
        $director = new Director();

        $director->id = $request->id;
        $director->name = $request->name;

        return $director->save();
    }

}

