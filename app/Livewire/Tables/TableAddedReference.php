<?php

namespace App\Livewire\Tables;

use Livewire\Component;

class TableAddedReference extends Component
{
    public $referenceSelected;

    public function render()
    {
        return view('livewire.tables.table-added-reference');
    }

    public function removeReference() :void
    {
        /** @var array $references */
        $references = session()->get(auth()->id().'product_references');
        $references[] = $this->referenceSelected;
        $references = collect($references)->where('id', '!=', $this->referenceSelected['id']);
        session()->put(auth()->id().'product_references', $references->toArray());
        $this->dispatch('referenceRemoved');
    }
}
