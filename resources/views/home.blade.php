@extends('layouts.theme.app')

@section('content')

@php
    $pageTittle = "Page Tittle";
@endphp

<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
    <x-panel>
        <x-slot name="tittle">
        Component Name | {{$pageTittle}}
        </x-slot>

        <x-slot name="body">
            <table class="table-responsive col-12">
                <thead class="bg-dark text-light fs-5"
                    <tr>
                        <td class="text-center">DESCRIPCION</td>
                        <td class="text-center">IMAGEN</td>
                        <td class="text-center">ACTIONS</td>
                    </tr>
                </thead>
                <tbody>
                    <td>Category name</td>
                    <td class="text-center">
                        <img src="https://dummyimage.com/200x150/000/1d2be3.png" alt="Imagen de ejemplo" class="rounded" height="70" width="80">
                    </td>
                    <td class="text-center align-middle" title="Edit" class="btn btn-dark mtmobile">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('theme\assets\img\Icons\edit-svgrepo-com.svg') }}" alt="" height="30">                            
                        </a>
                        
                        <a href="javascript:void(0)" title="Delete">
                            <img src="{{ asset('theme\assets\img\Icons\delete-svgrepo-com.svg') }}" alt="" height="35">                                                        
                        </a>
                        
                    </td>
                </tbody>
            </table>
            Pagination
        </x-slot>
    </x-panel>
</div>
@endsection
