<?php

namespace App\Livewire\Posts;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::take(10)->get();
    }

    public function render()
    {
        return view('livewire.posts.index');
    }
}
