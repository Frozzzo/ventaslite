<div class="row">
  <div class="col-sm-12">
    <div class="input-group">
      <span class="input-group-text input-gp">
        <img src="{{ asset('theme/assets/img/Icons/edit-svgrepo-com.svg') }}" alt="Categoría" height="20">
      </span>
      <input type="text" class="form-control" placeholder="Ejemplo: cursos..." wire:model.lazy="name">      
    </div>
    @error('name')
      <span class="text-danger">{{ $message }}</span>      
    @enderror
    @if ($selectedId < 1)
    <div class="col-sm-12 mt-3">
      <div class="form-group custom-file">
        <input type="file" class="form-control custom-file-input" accept="image/x-png, image/gif, image/jpeg" wire:model="image">
      </div>
      @error('image')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>                  
    @else
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-10 mt-3">
          <div class="form-group custom-file">
            <input type="file" class="form-control custom-file-input" accept="image/x-png, image/gif, image/jpeg" wire:model="image">
          </div>          
          @error('image')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="text-center col-sm-12 col-md-4 col-lg-2 mt-3">
          <img src="{{ asset('storage/categories/' . $category->image) }}" alt="" height="50">
        </div>

        <h1>{{ $category->image }}</h1>
      </div>
    @endif
  </div>
</div>