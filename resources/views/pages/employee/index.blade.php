@extends('layouts.app')

@section('content')


<div class="d-sm-flex align-items-center justify-content-between mt-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pegawai</h1>
    <a href="/employee/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
</div>

    <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item ">Database</li>
        <li class="breadcrumb-item active">Pegawai</li>
    </ol>
    
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatablesSimple" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">Status</th>
                        <th width="15%">Nama</th>
                        <th width="10%">NIP</th>
                        <th width="15%">Jabatan</th>
                        <th width="15%">Pangkat/Golongan</th>
                        <th width="15%">Penempatan</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($employees as $item)
                        <tr>
                            <td>{{ $item->asn_type }}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->nip}}</td>
                            <td>{{$item->jobdesc}}</td>
                            <td>{{ $item->pangkat }}</td>
                            <td>{{ $item->placement }}</td>
                            <td>edit | delete</td>
                        </tr>
                        @include('pages.employee.confirmation-delete')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection