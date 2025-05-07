@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col">
        <form action="/customer/{{ $customer->id }}" method="post">
            @csrf
            @method('PUT')
             
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Edit Customer</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 form-group mb-3">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control @error('name')
                            is-invalid @enderror" value="{{ old('name', $customer->name) }}">
                            @error('name')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-3 form-group mb-3">
                            <label for="membership">Membership</label>
                            <select name="membership" id="membership" class="form-control">
                                @foreach ([
                                    (object)[
                                        "label"=> "No",
                                        "value" => "no",
                                    ],
                                    (object)[
                                        "label"=> "Yes",
                                        "value" => "yes",
                                    ],
                                ] as $item)
                                    <option value="{{ $item->value }}" @selected(old('membership', $customer->membership) == $item->value)>{{ $item->label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 form-group mb-3">
                            <label for="phone">Nomor HP</label>
                            <input type="number" inputmode="numeric" name="phone" id="phone" class="form-control" value="{{ old('phone', $customer->phone)}}">
                        </div>
                        <div class="col-6 form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $customer->email)}}">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="col-3 form-control">
                            @foreach ([
                                (object)[
                                    "label"=> "Laki-Laki",
                                    "value" => "male",
                                ],
                                (object)[
                                    "label"=> "Perempuan",
                                    "value" => "female",
                                ],
                            ] as $item)
                                <option value="{{ $item->value }}" @selected(old('gender', $customer->gender) == $item->value)>{{ $item->label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group mb-3">
                            <label for="province">Provinsi</label>
                            <select name="province" id="province" class="select2 form-control">
                                <option value="{{ $customer->province }}" @selected(old('province', $customer->province) )>Pilih Provinsi</option>
                            </select>
                        </div>
                        <div class="col-6 form-group mb-3">
                            <label for="city">Kab/Kota</label>
                            <select name="city" id="city" class="select2 form-control">
                                <option value="{{ $customer->city }}" @selected(old('city', $customer->city) )>Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group mb-3">
                            <label for="district">Kecamatan</label>
                            <select name="district" id="district" class="select2 form-control">
                                <option value="{{ $customer->district }}" @selected(old('district', $customer->district) )>Pilih Kecamatan</option>
                            </select>
                        </div>
                        <div class="col-6 form-group mb-3">
                            <label for="village">Kelurahan</label>
                            <select name="village" id="village" class="select2 form-control">
                                <option value="{{ $customer->city }}" @selected(old('city', $customer->city) )>Pilih Desa/Kelurahan</option>                            
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Alamat</label>
                        <textarea type="text" name="address" cols="20" rows="5" class="form-control" >{{ old('address', $customer->address)}}</textarea>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end" style="gap: 10px;">
                        <a href="/customer" class="btn btn-outline-secondary">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-warning">
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection