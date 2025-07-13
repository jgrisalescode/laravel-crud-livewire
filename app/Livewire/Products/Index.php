<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function delete(Product $product)
    {
        $product->delete();

        session()->flash('success', 'Product deleted successfully.');
        $this->redirectRoute('products.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.products.index', [
            // 'products' => Product::simplePaginate(10),
            'products' => Product::latest()->paginate(10),
        ]);
    }
}
