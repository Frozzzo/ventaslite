<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;
use Livewire\WithFileUploads; //trait para subir imagenes desde livewire
use Livewire\WithPagination;

class Categories extends Component
{

    use WithFileUploads;
    use WithPagination;

    public  $name, $search, $image, $selectedId, $pageTittle, $componentName;
    private $pagination = 5;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = 
    [
        'delete-row' => 'Destroy'
    ];

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
        $record = Category::find($id, ['id', 'name', 'image']);
        $this->name = $record->name;
        $this->selectedId = $record->id;
        // $this->image = null;
        $this->image = $record->image;

        $this->emit('show-modal', 'show modal!');
    }

    public function Store()
    {
        $rules = [
            'name' => 'required|unique:categories|min:3'
        ];

        $messages = [
            'name.required' => 'Se requiere el nombre de la categoría',
            'name.unique' => 'Ya existe una categoría con este nombre',
            'name.min' => 'El nombre de la categoría debe de tener al menos 3 caracteres'
        ];

        $this->validate($rules, $messages);

        $category = Category::create([
            'name' => $this->name,
        ]);
        
        $customFileName = '';

        if($this->image)
        {
            $customFileName = uniqid().'.'.$this->image->extension();
            $this->image->storeAs('public/categories', $customFileName);
            $category->image = $customFileName;
            $category->save();
        }

        $this->resetUI();

        $this->emit('category-added', 'Categoría añadida');
    }

    public function Update()
    {
        $rules = [
            'name' => "required|min:3|unique:categories,name,{$this->selectedId}"
        ];

        $messages = [
            'name.required' => 'Se requiere el nombre de la categoría',
            'name.min' => 'El nombre de la categoría debe de tener al menos 3 caracteres',
            'name.unique' => 'Ya existe una categoría con este nombre',
        ];

        $this->validate($rules, $messages);

        $category = Category::find($this->selectedId);
        $category->Update([
            'name' => $this->name
        ]);

        if($this->image)
        {
            $customFileName = uniqid().'.'.$this->image->extension();
            $this->image->storeAs('public/categories', $customFileName);
            $imageName = $category->image;

            $category->image = $customFileName;
            $category->save();            
            
            if($imageName != null)
            {
                if(file_exists('storage/categories/' . $imageName))
                {
                    unlink('storage/categories/' . $imageName);
                }
            }            
        }
        
        $this->resetUI();

        $this->emit('category-updated', 'Categoría actualizada!');
    }

    public function Destroy(Category $category)
    {        
        $imageName = $category->image; //Imagen temporal
        $category->delete();        
        
        if($imageName != null)
        {
            if(file_exists('storage/categories/' . $imageName))
            {
                unlink('storage/categories/' . $imageName);
            }
        }

        $this->resetUI();
        $this->emit('category-deleted', 'Categoría eliminada');
    }

    public function resetUI()
    {
        $this->name = '';
        $this->image = null;
        $this->search = '';
        $this->selectedId = 0;
    }
}
