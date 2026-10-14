<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function add(int $x)
    {
        $this->count += $x;
    }

    public function subtract(int $x)
    {
        $this->count -= $x;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}