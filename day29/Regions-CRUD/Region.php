<?php

class Region
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $slug = null;

    public function insert(): void
    {
        $query = "insert into `regions` (`name`, `slug`) values (?, ?)";
        DB::insert($query, [$this->name, $this->slug]);

        $this->id = DB::lastInsertId();
    }

    public function update(): void
    {
        if (is_null($this->id)) {
            echo 'Cannot update region without id';
            exit();
        }

        $query = 'update `regions` set `name` = ?, `slug` = ? where `id` = ?';
        DB::update($query, [$this->name, $this->slug, $this->id]);
    }
}
