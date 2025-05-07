@extends('layouts.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Customer</h1>
    <a href="/customer/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Nomor HP</th>
                        <th>Alamat</th>
                        <th>Kab/Kota</th>
                        <th>Membership</th>
                        <th>Email</th>
                        <th>Pesanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($customers as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{ $item->address }} {{ \Indonesia::search($item->village)->allVillages()[0]['name']}}, {{\Indonesia::search($item->district)->allDistricts()[0]['name']}}</td>
                            <td>{{ \Indonesia::search($item->city)->allCities()[0]['name'] }}</td>
                            <td>{{ $item->membership }}</td>
                            <td>{{ $item->email }}</td>
                            <td></td>
                            <!-- <td>
                                @if (count($customers) < 1)
                                    <div class="d-flex">
                                        <a href="/customer/{id}" class="d-inline-block btn btn-sm btn-danger">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                @else
                                    <div class="d-flex">
                                        <a href="/customer/{id}" class="d-inline-block btn btn-sm btn-primary">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                @endif
                            </td> -->
                            <td>
                                <div class="d-flex">
                                    <a href="/customer/{{ $item->id }}" class="d-inline-block mr-3 btn btn-sm btn-warning">
                                        <i class="fas fa-pen"></i>
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