<?php

namespace App\Livewire\Posts;

use App\Models\Product;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $description;
    public $price;
    public $stock = 0;

    public function store()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->stock = $this->stock;
        $product->save();

        // Hard refresh the page Laravel
        // return redirect()->route('products.index');

        // Livewire redirect
        session()->flash('success', 'Product created successfully.');
        $this->redirectRoute('products.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
