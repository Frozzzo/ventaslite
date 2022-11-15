<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads; //trait para subir imagenes desde livewire
use Livewire\WithPagination;

class Categories extends Component
{

    use WithFileUploads;
    use WithPagination;

    public $name, $search, $image, $selectedId, $pageTittle, $componentName;
    private $pagination = 10;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->pageTittle = 'Listado';
        $this->componentName = 'Categorias';
    }
    
    public function render()
    {
        if(strlen($this->search) > 0)
        {
            $data = Category::where('name', 'like', '%' . $this->search . '%')->paginate($this->pagination);
        }else{
            $data = Category::orderBy('id', 'desc')->paginate($this->pagination);
        }

        return view('livewire.category.categories', ['categories' => $data])
        ->extends('layouts.theme.app')
        ->section('content');
    }

    public function Edit($id)
    {
        $record = Category::find($id);
        $this->name = $record->name;
        $this->selectedId = $record->id;
        $this->image = null;

        $this->emit('show-modal', 'show modal!');
    }
}
