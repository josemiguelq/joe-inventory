<?php

namespace App\Livewire;

use App\Models\Reference;
use Livewire\Component;

class ReferenceMultipleInput extends Component
{
    public $cities;
    public $search;

    public function mount()
    {
        $this->search = ['name' => null];

        $this->cities = Reference::where($this->search)->get()->toArray();
    }

    public function render()
    {
        return view('livewire.reference-multiple-input');
    }

    public function updatedSearchDate($value)
    {
        $this->test();
    }
    public function updatedSearchCityFromId($value)
    {
        $this->test();
    }
    public function updatedSearchCityToId($value)
    {
        $this->test();
    }

    /*public function updatedSearch($value)
    {
        $this->test();
    }*/

    public function test()
    {
        if (isset($this->search['date']) && $this->search['date'] != null &&
            isset($this->search['city_from_id']) && $this->search['city_from_id'] != null &&
            isset($this->search['city_to_id']) && $this->search['city_to_id'] != null) {
            dump('do something nice');
        } else {
            dump($this->search['date']??'DATE');
            dump($this->search['city_from_id']??'CITY FROM');
            dump($this->search['city_to_id']??'CITY TO');
            dump('do something not nice');
        }
    }
}
