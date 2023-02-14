<?php

// 1.
class Computer
{
    // 2.
    public ?string $model = null;
    public ?string $operating_system = null;
    public bool $is_portable = false;
    public string $status = 'off';

    // 6.
    public function switchOff() : void
    {
        $this->status = 'off';
    }

    // 7.
    public function toggleSwitch() : void
    {
        $this->status = $this->status === 'on' ? 'off' : 'on';
    }
}

// bad place for executable code