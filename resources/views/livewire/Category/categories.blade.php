<div class="container">
  <x-panel titulo="{{$componentName}} | {{$pageTittle}}">

    <x-slot name="body">
      
        <table class="table">
          <thead class="table-dark"
              <tr>
                  <td colspan="2" class="text-center">CATEGORÍA</td>
                  {{-- <td class="text-center">IMAGEN</td> --}}
                  <td class="text-center">ACCIONES</td>
              </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
                <td class="text-center col-1">                  
                  <img src="{{ asset('storage/categories/' . $category->image) }}" alt="" height="50">
                </td>

                <td>{{ $category->name }}</td>

                <td class="text-center align-middle" title="Edit" class="btn btn-dark mtmobile">
                  <a 
                    href="javascript:void(0)"
                    wire:click="Edit({{ $category->id }})"
                  >                    
                    <img src="{{ asset('theme\assets\img\Icons\edit-svgrepo-com.svg') }}" alt="" height="30">                            
                  </a>
                                      
                  <a 
                    href="javascript:void(0)" 
                    title="Delete"
                    onclick="Confirm({{ $category->id }}, {{ $category->products->count() }})"
                  >
                      <img src="{{ asset('theme\assets\img\Icons\delete-svgrepo-com.svg') }}" alt="" height="35">                                                        
                  </a>                  
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $categories->links() }}      
    </x-slot>
  </x-panel>

  <x-modal titulo="Categoria" selectedId="{{$selectedId}}">
    <x-slot name="body">
      @include('livewire.category.form')
    </x-slot>
  </x-modal>


  <script src="{{ asset('livewire/categories/categories.js') }}"></script>
</div>