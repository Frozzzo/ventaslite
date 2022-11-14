<x-modal titulo="Crear categoría">

  <x-slot name="body">

    <div class="row">
      <div class="col-sm-12">
        <div class="input-group">
          <span class="input-group-text">
            <img src="{{ asset('theme/assets/img/Icons/edit-svgrepo-com.svg') }}" alt="" height="20">
          </span>
          <input type="text" wire.model.lazy="name" class="form-control" placeholder="Ejemplo cursos..">
        </div>
        @error('name')
          <span class="text-danger er">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-sm-12 mt-3">
        <div class="form-group custom-file">
          <input type="file" class="custom-file-input form-control" wire:model="image" accept="image/x-png, image/gif, image/jpeg">          
          @error('image')
            <span class="text-danger er">{{ $message }}</span>
          @enderror
        </div>
      </div>

    </div>

  </x-slot>

</x-modal>