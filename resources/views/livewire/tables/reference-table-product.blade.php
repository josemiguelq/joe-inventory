<div class="card">
    <table class="table table-striped table-bordered align-middle">
        <thead class="thead-light">
        <tr>
            <th scope="col">
                {{ __('Nome') }}
            </th>
            <th scope="col" class="text-center">
                {{ __('Action') }}
            </th>
        </tr>
        </thead>
        <tbody>
        @forelse ($selectedReferences as $referenceSelected)
            <livewire:tables.table-added-reference :referenceSelected='$referenceSelected' />
        @empty
            <td colspan="5" class="text-center">
                {{ __('Add Products') }}
            </td>
        @endforelse
        </tbody>
    </table>
    <div class="card-body border-bottom py-3">
        <div class="d-flex">
            <div class="ms-auto text-secondary">
                Search:
                <div class="ms-2 d-inline-block">
                    <input type="text" wire:model.live="search" class="form-control form-control-sm"
                           aria-label="Buscar compativeis">
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
                    {{ __('Action') }}
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse ($references as $reference)
                <tr>
                    <td class="align-middle text-center">
                        {{ $reference->name }}
                    </td>
                    <td class="align-middle text-center" style="width: 10%">
                        <div class="d-flex">
                            <button class="p-2 border-2 rounded border-blue-500 hover:border-blue-600 bg-blue-500 hover:bg-blue-600" wire:click="addReference({{$reference}})">Adicionar</button>
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
</div>
