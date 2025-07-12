<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
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
        $this->validate();

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
        ]);
    }
}
