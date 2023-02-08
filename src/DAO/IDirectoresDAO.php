<?php

namespace videoclub\DAO;

use videoclub\DTO\DirectoresDTO;

interface IDirectoresDAO{

    public function read(): array;
    public function findById(int $id): DirectoresDTO;
    public function update(int $id, Request $request): bool;
    public function delete(int $id): bool;
    public function create(Request $request): bool;
}
