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

    <div class="col-sm-12 mt-3">
      <div class="form-group custom-file">
        <input type="file" class="form-control custom-file-input" accept="image/x-png, image/gif, image/jpeg" wire:model="image">
      </div>
      @error('image')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
  </div>
</div>