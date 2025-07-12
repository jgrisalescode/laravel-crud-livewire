<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    <a href="{{ route('products.create') }}" wire:navigate class="w-fit whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:border-primary-dark dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark" role="button">
        Create a Product
    </a>
    <div class="overflow-hidden w-full overflow-x-auto rounded-radius border border-outline dark:border-outline-dark">
        <table class="w-full text-left text-sm text-on-surface dark:text-on-surface-dark">
            <thead class="border-b border-outline bg-surface-alt text-sm text-on-surface-strong dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark-strong">
                <tr>
                    <th scope="col" class="p-4">ProductID</th>
                    <th scope="col" class="p-4">Name</th>
                    <th scope="col" class="p-4">Stock</th>
                    <th scope="col" class="p-4">Price</th>
                    <th scope="col" class="p-4">Created At</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline dark:divide-outline-dark">
                @forelse ($products as $product)
                    <tr>
                        <td class="p-4">{{ $product->id }}</td>
                        <td class="p-4">{{ $product->name }}</td>
                        <td class="p-4">{{ $product->stock }}</td>
                        <td class="p-4">{{ $product->price }}</td>
                        <td class="p-4">{{ $product->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-4 text-center">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="p-4">
            {{ $products->links() }}
        </div>
    </div>
</div>
