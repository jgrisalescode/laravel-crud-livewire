<?php

namespace App\Livewire\Posts;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.posts.index', [
            // 'products' => Product::simplePaginate(10),
            'products' => Product::latest()->paginate(10),
        ]);
    }
}
