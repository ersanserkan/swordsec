<?php

namespace App\Http\Livewire;

use App\Models\Website;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.search', [
            'searchResults' => $this->search
                ? Website::where('url', 'like', '%' . $this->search . '%')->take(10)->get()
                : collect([]),
        ]);
    }
}
