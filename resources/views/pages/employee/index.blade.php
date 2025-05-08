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
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <td>
                                @if ($item->placement == 'dayalinjamsos')
                                    Bidang Dayalinjamsos
                                @elseif($item->placement == 'rehsos')
                                    Bidang Rehabilitasi Sosial
                                @elseif($item->placement == 'pm')
                                    Bidang PM
                                @elseif($item->placement == 'pemdes')
                                    Bidang Pemdes
                                @elseif($item->placement == 'sekretariat')
                                    Sekretariat
                                @else($item->placement == 'kadis')
                                    Kepala Dinas
                                @endif
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="/employee/{{ $item->id }}" class="d-inline-block mr-3 btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmationDelete-{{ $item->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @include('pages.employee.confirmation-delete')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection