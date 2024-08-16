<div class="card">
    <div class="card-body border-bottom py-3">
        <div class="d-flex">
            <div class="text-secondary">
                Show
                <div class="mx-2 d-inline-block">
                    <select wire:model.live="perPage" class="form-select form-select-sm" aria-label="result per page">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="25">25</option>
                    </select>
                </div>
                entries
            </div>
            <div class="ms-auto text-secondary">
                Search:
                <div class="ms-2 d-inline-block">
                    <input type="text" wire:model.live="search" class="form-control form-control-sm"
                           aria-label="Search invoice">
                </div>
            </div>
        </div>
    </div>

    <x-spinner.loading-spinner />

    <div class="table-responsive">
        <table wire:loading.remove class="table table-bordered card-table table-vcenter text-nowrap datatable">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('name')" href="#" role="button">
                        {{ __('Nome') }}
                        @include('inclues._sort-icon', ['field' => 'name'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('category_id')" href="#" role="button">
                        {{ __('Categoria') }}
                        @include('inclues._sort-icon', ['field' => 'category_id'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('quantity')" href="#" role="button">
                        {{ __('Quantidade') }}
                        @include('inclues._sort-icon', ['field' => 'quantity'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('quantity')" href="#" role="button">
                        {{ __('Compativeis') }}
                        @include('inclues._sort-icon', ['field' => 'quantity'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    {{ __('Action') }}
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse ($products as $product)
                <tr>
                    <td class="align-middle text-center">
                        {{ $product->name }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $product->category ? $product->category->name : '--' }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $product->quantity }}
                    </td>
                    <td class="align-middle text-center">
                        {{ json_encode(\App\Models\Product::allReferences($product->references)->pluck('name')) }}
                    </td>
                    <td class="align-middle text-center" style="width: 10%">
                        <div class="d-flex">
                            <form action="{{ route('pos.addCartItem', $product) }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="selling_price" value="{{ $product->selling_price }}">

                                <button type="submit" class="btn btn-icon btn-outline-primary">
                                    <x-icon.cart/>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="align-middle text-center" colspan="7">
                        No results found
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="card-footer d-flex align-items-center">
        <p class="m-0 text-secondary">
            Showing <span>{{ $products->firstItem() }}</span>
            to <span>{{ $products->lastItem() }}</span> of <span>{{ $products->total() }}</span> entries
        </p>

        <ul class="pagination m-0 ms-auto">
            {{ $products->links() }}
        </ul>
    </div>
</div>
