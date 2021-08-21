<?php

namespace App\Http\Livewire;

use App\Models\Item as ModelsItem;
use Illuminate\View\Component as ViewComponent;
use Livewire\Component;
use Livewire\WithPagination;

class Item extends Component
{
   
    use WithPagination; 
    public $searchTerm;
    public $paginate = 10;
    public function render()
    {
       
        $items = ModelsItem::where('name','like','%'.$this->searchTerm.'%')->paginate($this->paginate);
        return view('livewire.item',[
            'items'=>$items
        ]);
    }
}
