@extends('layouts.adminlte')

@section('title', 'Pertanyaan')

@section('content')
<div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>                  
                    <tr>
                        <th class="text-center" scope="col">
                            <span>ID</span>
                        </th>
                        <th class="text-center" scope="col">
                            <span>Judul</span>
                        </th>
                        <th class="text-center" scope="col">
                            <span>Isi</span>            
                        </th>
                        <th class="text-center" scope="col">
                            <span>Tanggal Dibuat</span>            
                        </th>
                        <th class="text-center" scope="col">
                            <span>Tanggal Diperbaharui</span>            
                        </th>
                        <th class="text-center" scope="col">
                            <span>Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach ($pertanyaans as $key => $pertanyaan)
                        <tr>
                            <td class="text-center">
                                <span>{{$key + 1}}</span>
                            </td>
                            <td class="text-center">
                                <span>{{$pertanyaan->judul}}</span>
                            </td>
                            <td class="text-center">
                                <span>{{$pertanyaan->isi}}</span>
                            </td>
                            <td class="text-center">
                                <span>{{$pertanyaan->tanggal_dibuat}}</span>
                            </td>
                            <td class="text-center">
                                <span>{{$pertanyaan->tanggal_diperbaharui}}</span>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-info"
                                    onclick="event.preventDefault();
                                    window.location = '{{ action('PertanyaanController@show', $pertanyaan->id) }}';">
                                    Info
                                </button>

                                <button type="button" class="btn btn-secondary"
                                    onclick="event.preventDefault();
                                    window.location = '{{ action('PertanyaanController@edit', $pertanyaan->id) }}';">
                                    Update
                                </button>

                                <form id="delete-form" action="{{ action('PertanyaanController@destroy', $pertanyaan->id) }}" method="GET">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center">
                            <button type="button" class="btn btn-primary"
                                onclick="event.preventDefault();
                                window.location = '{{ action('PertanyaanController@create') }}';">
                                Create
                            </button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
      <!-- /.card-body -->
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
    $(function () {
        $("#example1").DataTable();
    });
    </script>
    
@endpush