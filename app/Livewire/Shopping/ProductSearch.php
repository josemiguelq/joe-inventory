<?php

namespace App\Livewire\Shopping;

use App\Models\Reference;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;

    public $perPage = 5;

    public $search = '';

    public $sortField = 'id';

    public $sortAsc = false;
    public function render()
    {
        return view('livewire.shopping.product-search', [
            'references' => Reference::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)
        ]);
    }
}
