<?php

namespace videoclub\DAO;


use videoclub\DTO\PeliculasDTO;

interface IPeliculasDAO{

    public function read(): array;
    public function findById(int $id): PeliculasDTO;
    public function update(int $id, Request $request): bool;
    public function delete(int $id): bool;
    public function create(Request $request): bool;
}
