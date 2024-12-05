@extends('layouts.vistapadre')

@section('contenidoPrincipal')
    <h2>Contenido de la vista 1</h2>
    <div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>

@php
        echo 'esto es parte de la vista 111';
@endphp

<ul>
    @for($i = 0; $i < 10; $i++)
        <li>Item {{ $i }}</li>
    @endfor
</ul>


@if (count($users)===1)
    <span class="badge bg-primary">Hay un solo elemento en el arreglo</span>
@elseif(count($users) > 1)
    <span class="badge bg-success">Hay {{ count($users) }} elementos en el arreglo</span>
@else
    <span class="badge bg-danger">No hay elementos</span>
@endif

<ul>
    @foreach($users as $user)
        <li>{{ $user }}</li>    
    @endforeach
</ul>

@endsection