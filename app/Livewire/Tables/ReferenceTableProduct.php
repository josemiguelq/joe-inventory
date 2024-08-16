<?php

namespace App\Livewire\Tables;

use App\Models\Product;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Livewire\Component;

class ReferenceTableProduct extends Component
{
    public $perPage = 5;

    public $search = '';

    public $sortField = 'id';

    public $sortAsc = false;

    public  $selectedReferences = [];

    protected $listeners = [
        'referenceAdded' => 'updateCart',
        'referenceRemoved' => 'updateCart',
    ];

    public function sortBy($field): void
    {
        if($this->sortField === $field)
        {
            $this->sortAsc = ! $this->sortAsc;

        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function mount(): void
    {
        $this->updateCart();
    }

    public function render()
    {
        if (empty($this->search)){
            $ref = Reference::all()->take(3);
        } else {
            $ref = Reference::where("name", 'like', "%$this->search%")->get();
        }
logger()->info('RENDER', $ref->toArray());
        return view('livewire.tables.reference-table-product',
            ['references' => $ref,
                 'selectedReferences' => $this->selectedReferences]);
    }

    public function updateCart()
    {
        $this->selectedReferences = session()->get(auth()->id().'product_references') ?? [];
    }

    public function addReference($reference) :void
    {
        /** @var array $references */
        $references = session()->get(auth()->id().'product_references') ?? [];
        $references[] = $reference;
        session()->put(auth()->id().'product_references', $references);
        $this->dispatch('referenceAdded');
    }
}
