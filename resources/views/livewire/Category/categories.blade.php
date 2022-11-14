<div class="container">
    <x-panel>
        <x-slot name="tittle">
        {{$componentName}} | {{$pageTittle}}
        </x-slot>

        <x-slot name="body">
            <div class="table-responsive">
                <table class="table table-hover col-12">
                    <thead class="table-dark"
                        <tr>
                            <td class="text-center">DESCRIPCIÓN</td>
                            <td class="text-center">IMAGEN</td>
                            <td class="text-center">ACTIONS</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>

                            <td class="text-center">
                                <img src="{{ asset('storage/categories/' . $category->image) }}" alt="Imagen de ejemplo" class="rounded" height="70" width="80">
                            </td>

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
                                    onclick="Confirm('{{ $category->id }}')"
                                >
                                    <img src="{{ asset('theme\assets\img\Icons\delete-svgrepo-com.svg') }}" alt="" height="35">                                                        
                                </a>
                                
                            </td> 
                        </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
            Pagination
        </x-slot>
    </x-panel>
    
    @include('livewire.Category.form')

</div>
