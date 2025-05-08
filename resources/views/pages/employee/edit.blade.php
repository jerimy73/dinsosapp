@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col">
        <form action="/employee/{{ $employee->id }}" method="post">
            @csrf
            @method('PUT')
             
            <div class="card shadow mb-4 mt-4">
                <div class="card-header bg-black py-3">
                    <h4 class="m-0 font-weight-bold text-white">Tambah Data Pegawai</h4>
                </div>
                
                <div>
                    @if (session()->has('success'))
                        <div class="card shadow bg-success text-white mt-2 col-6">
                            <div class="card-body">{{ session()->get('success') }}</div>
                        </div>

                    @endif
                </div>
                                
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 form-group mb-3">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control @error('name')
                            is-invalid @enderror" value="{{ old('name',  $employee->name ) }}">
                            @error('name')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        
                        <div class="col-3 form-group mb-3">
                            <label for="nik">NIK (opsional)</label>
                            <input type="number" inputmode="numeric" name="nik" id="nik" class="form-control" value="{{ old('nik', $employee->nik)}}">
                        </div>
                        <div class="col-3 form-group mb-3">
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
                                    <option value="{{ $item->value }}" @selected(old('gender', $employee->gender) == $item->value)>{{ $item->label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 form-group mb-3">
                            <label for="phone">Nomor HP (opsional)</label>
                            <input type="number" inputmode="numeric" name="phone" id="phone" class="form-control" value="{{ old('phone', $employee->phone)}}">
                        </div>
                        <div class="col-6 form-group mb-3">
                            <label for="email">Email (opsional)</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $employee->email)}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 form-group mb-3">
                            <label for="asn_type">Status</label>
                            <select name="asn_type" id="asn_type" class="form-control">
                                @foreach ([
                                    (object)[
                                        "label"=> "PNS",
                                        "value" => "PNS",
                                    ],
                                    (object)[
                                        "label"=> "PPPK",
                                        "value" => "PPPK",
                                    ],
                                    (object)[
                                        "label"=> "non-ASN",
                                        "value" => "non-ASN",
                                    ],
                                ] as $item)
                                    <option value="{{ $item->value }}" @selected(old('asn_type', $employee->asn_type) == $item->value)>{{ $item->label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="NIP" class="col-3 form-group mb-3">
                            <label id="labelNIP" for="nip">
                                @if($employee->asn_type == 'PPPK')  
                                    NI PPPK
                                @else
                                    NIP
                                @endif
                            </label>
                            <input type="number" maxlength="18" inputmode="numeric" name="nip" id="nip" class="form-control @error('nip')
                            is-invalid @enderror" value="{{ old('nip', $employee->nip)}}">
                            @error('nip')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-3 form-group mb-3">
                            <label for="pangkat">Pangkat/Gol.</label>
                            <select name="pangkat" id="pangkat" class="form-control">
                                @foreach ($pangkats as $item)
                                    <option value="{{ $item->name }}" @selected(old('pangkat', $employee->pangkat) == $item->name)>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6 form-group mb-3">
                            <label for="jobdesc">Jabatan</label>
                            <input type="text" name="jobdesc" id="jobdesc" class="form-control @error('jobdesc')
                            is-invalid @enderror" value="{{ old('jobdesc', $employee->jobdesc) }}">
                            @error('jobdesc')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-3 form-group mb-3">
                        <label for="placement">Penempatan</label>
                            <select name="placement" id="placement" class="form-control">
                                @foreach ([
                                    (object)[
                                        "label"=> "Sekretariat",
                                        "value" => "sekretariat",
                                    ],
                                    (object)[
                                        "label"=> "Bidang PM",
                                        "value" => "pm",
                                    ],
                                    (object)[
                                        "label"=> "Bidang Pemdes",
                                        "value" => "pemdes",
                                    ],
                                    (object)[
                                        "label"=> "Bidang Rehsos",
                                        "value" => "rehsos",
                                    ],
                                    (object)[
                                        "label"=> "Bidang Dayalinjamsos",
                                        "value" => "dayalinjamsos",
                                    ],
                                    (object)[
                                        "label"=> "Kadis",
                                        "value" => "kadis",
                                    ],
                                    
                                ] as $item)
                                    <option value="{{ $item->value }}" @selected(old('placement', $employee->placement) == $item->value)>{{ $item->label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 form-group mb-3">
                            <label for="education">Pendidikan</label>
                            <select name="education" id="education" class="form-control">
                                @foreach ([
                                    (object)[
                                        "label"=> "SLTA/Sederajat",
                                        "value" => "SLTA/Sederajat",
                                    ],
                                    (object)[
                                        "label"=> "DI",
                                        "value" => "DI",
                                    ],
                                    (object)[
                                        "label"=> "DII",
                                        "value" => "DII",
                                    ],
                                    (object)[
                                        "label"=> "DIII",
                                        "value" => "DIII",
                                    ],
                                    (object)[
                                        "label"=> "DIV",
                                        "value" => "DIV",
                                    ],
                                    (object)[
                                        "label"=> "S1",
                                        "value" => "S1",
                                    ],
                                    (object)[
                                        "label"=> "S2",
                                        "value" => "S2",
                                    ],
                                    (object)[
                                        "label"=> "S3",
                                        "value" => "S3",
                                    ],
                                ] as $item)
                                    <option value="{{ $item->value }}" @selected(old('education', $employee->education) == $item->value)>{{ $item->label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 form-group mb-3">
                            <label for="major">Jurusan (opsional)</label>
                            <input type="text" name="major" id="major" class="form-control" value="{{ old('major', $employee->major) }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 form-group mb-3">
                            <label for="birth_place">Tempat Lahir (opsional)</label>
                            <input type="text" name="birth_place" id="birth_place" class="form-control" value="{{ old('birth_place', $employee->birth_place)}}">
                        </div>
                        <div class="col-3 form-group mb-3">
                            <label for="birth_date">Tanggal Lahir</label>
                            <input type="date" name="birth_date" id="birth_date" class="form-control @error('birth_date')
                            is-invalid @enderror" value="{{ old('birth_date', $employee->birth_date)}}">
                            @error('birth_date')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-3 form-group mb-3">
                            <label for="birth_place">Status Perkawinan</label>
                            <select name="marital_status" id="marital_status" class="form-control">
                                @foreach ([
                                    (object)[
                                        "label"=> "Belum Menikah",
                                        "value" => "single",
                                    ],
                                    (object)[
                                        "label"=> "Sudah Menikah",
                                        "value" => "married",
                                    ],
                                    (object)[
                                        "label"=> "Bercerai",
                                        "value" => "divorced",
                                    ],
                                ] as $item)
                                    <option value="{{ $item->value }}" @selected(old('marital_status', $employee->marital_status) == $item->value)>{{ $item->label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group mb-3">
                            <label for="religion">Agama </label>
                            <input type="text" name="religion" id="religion" class="form-control @error('religion')
                            is-invalid @enderror" value="{{ old('religion', $employee->religion)}}">
                            @error('religion')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>
                
                <div class="card-footer">
                    <div class="d-flex justify-content-end" style="gap: 10px;">
                        <a href="/employee" class="btn btn-outline-secondary">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection