<?php

namespace App\Livewire;

use App\Models\Reference;
use Livewire\Component;

class SearchReferenceBar extends Component
{
    public $query;
    public $references;
    public $highlightIndex;

    public function mount()
    {
        $this->query = '';
        $this->references = [];
    }

    public function updatedQuery()
    {
        $this->references = Reference::where('name', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.search-reference-bar');
    }
}
