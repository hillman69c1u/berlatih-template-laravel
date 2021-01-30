@extends('layouts.adminlte')

@section('title', 'Create Pertanyaan')

@section('name', 'Create Pertanyaan')

@section('content')
    <form id="create" action="{{ action('PertanyaanController@store' )}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan Isi">
            @error('isi')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
@endsection