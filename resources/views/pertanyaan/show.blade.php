@extends('layouts.adminlte')

@section('title', 'Show Pertanyaan')

{{-- @section('name', 'Show Pertanyaan') --}}

@section('content')
    <h2>Pertanyaan {{$pertanyaan->id}}</h2>
    <h4>Judul : {{$pertanyaan->judul}}</h4>
    <p>Isi : {{$pertanyaan->isi}}</p>
    <p>Tanggal Dibuat : {{$pertanyaan->tanggal_dibuat}}</p>
    <p>Tanggal Diperbaharui : {{$pertanyaan->tanggal_diperbaharui}}</p>
    
@endsection