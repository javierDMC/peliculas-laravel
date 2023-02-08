<?php

namespace videoclub\DAO;

use videoclub\DTO\ActoresDTO;

interface IActoresDAO{

    public function read(): array;
    public function findById(int $id): ActoresDTO;
    public function update(int $id, Request $request): bool;
    public function delete(int $id): bool;
    public function create(Request $request): bool;
}
