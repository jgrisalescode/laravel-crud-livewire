<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Create extends Component
{
    public function store(){
        dump('Store method called');
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
