<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\ProductForm;
use App\Models\Product;
use Livewire\Component;

class Update extends Component
{
    public ProductForm $form;

    public function mount(Product $product)
    {
        $this->form->setProduct($product);
    }

    public function save()
    {
        $this->form->update();

        session()->flash('success', 'Product updated successfully.');
        $this->redirectRoute('products.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
