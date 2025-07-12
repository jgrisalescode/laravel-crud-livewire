<?php

namespace App\Livewire\Posts;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|string|max:255', as: 'product name')]
    public $name;

    #[Validate('nullable|string|max:1000')]
    public $description;

    #[Validate('required|numeric|min:0')]
    public $price;

    #[Validate('nullable|integer|min:0')]
    public $stock = 0;

    public function store()
    {
        // $validated = $this->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'nullable|string|max:1000',
        //     'price' => 'required|numeric|min:0',
        //     'stock' => 'nullable|integer|min:0',
        // ]);

        // Product::create($validated);

        $this->validate();

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
        ]);

        session()->flash('success', 'Product created successfully.');
        $this->redirectRoute('products.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
