@props(['titulo'])

<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-10">
        <h4>{{$titulo}}</h4>
      </div>

      <div class="col text-end">
        <a href="javascript:void(0)" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal">Agregar</a>
      </div>

    </div>
    <x-searchBox/>
  </div>
  <div class="card-body">
    {{$body}}
  </div>
</div>