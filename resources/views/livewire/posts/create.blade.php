<div>
    <form wire:submit="store" class="space-y-4 max-w-2xl p-4 bg-surface-alt dark:bg-surface-dark-alt rounded-lg shadow-md">
        <div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="name" class="w-fit pl-0.5 text-sm">Name</label>
            <input id="name" type="text" class="w-full rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark" name="name" placeholder="Enter product name" autocomplete="name"/>
        </div>
        <div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="stock" class="w-fit pl-0.5 text-sm">Stock</label>
            <input id="stock" type="number" class="w-full rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark" name="stock" placeholder="Enter product stock" autocomplete="stock"/>
        </div>
        <div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="price" class="w-fit pl-0.5 text-sm">Price</label>
            <input id="price" type="number" class="w-full rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark" name="price" placeholder="Enter product price" autocomplete="price"/>
        </div>
        <div class="flex w-full max-w-md flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="description" class="w-fit pl-0.5 text-sm">Description</label>
            <textarea id="description" class="w-full rounded-radius border border-outline bg-surface-alt px-2.5 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark" rows="3" placeholder="Product description"></textarea>
        </div>
        <button type="submit" class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            Submit
        </button>
    </form>
</div>
