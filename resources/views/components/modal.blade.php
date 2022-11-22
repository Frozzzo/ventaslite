@props(['titulo', 'selectedId' => 0])
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">{{$titulo}}</h5>
        <h6 class="text-center text-warning" wire:loading>Por favor espere...</h6>
      </div>
      <div class="modal-body">
        {{$body}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark close-modal close-btn text-info" data-bs-dismiss="modal" wire:click.prevent="resetUI()">Cerrar</button>

        @if ($selectedId == 0)
            <button type="button" class="btn btn-primary close-modal" wire:click.prevent="Store()">Guardar</button>
        @else
            <button type="button" class="btn btn-primary close-modal" wire:click.prevent="Update()">Actualizar</button>
        @endif

        {{-- {{$btn}} --}}
        {{-- <button type="button" class="btn btn-primary">Guardar</button> --}}
      </div>
    </div>
  </div>
</div>