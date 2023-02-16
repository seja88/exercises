<?php

class Region
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $slug = null;

    public function save(): void
    {
        if (isset($this->id)) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    public function delete(): void
    {
        $query = "delete from `regions` where `id` = ?";
        DB::delete($query, [$this->id]);
    }

    private function insert(): void
    {
        $query = "insert into `regions` (`name`, `slug`) values (?, ?)";
        DB::insert($query, [$this->name, $this->slug]);

        $this->id = DB::lastInsertId();
    }

    private function update(): void
    {
        $query = "update `regions` set `name` = ?, `slug` = ? where `id` = ?";
        DB::update($query, [$this->name, $this->slug, $this->id]);
    }
}
