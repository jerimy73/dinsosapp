<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Pangkat;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    public function index() 
    {
        $employees = Employee::all();
        
        return view('pages.employee.index', data: [
            'employees' => $employees
        ]);
    }

    public function create()
    {
        $pangkats = Pangkat::all();
        return view(view: 'pages.employee.create', data: [
            'pangkats' => $pangkats
        ]);
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'nip'=> ['required', 'string','max:18'],
            'nik'=> ['nullable', 'string','max:16'],
            'name'=> ['required','string','max:100'],
            'phone'=> ['nullable','string','max:20'],
            'email'=> ['nullable','string', 'max:100'],
            'jobdesc'=> ['required','string','max:100'],
            'major'=> ['nullable', 'string','max:100'],
            'education'=> ['required', Rule::in([
                'SLTA/Sederajat',
                'DI', 
                'DII', 
                'DIII', 
                'DIV', 
                'S1', 
                'S2', 
                'S3'
            ])],
            'religion'=> ['nullable','string','max:100'],
            'birth_place'=> ['nullable','string','max:100'],
            'birth_date'=> ['required','string'],
            'gender' => ['required',Rule::in(['male', 'female'])],
            'asn_type' => ['required',Rule::in(['PNS', 'PPPK', 'non-ASN'])],
            'placement' => ['required',Rule::in(['kadis', 'sekretariat','pemdes', 'pm', 'dayalinjamsos', 'rehabsos'])],
            'marital_status' => ['required',Rule::in(['single','married', 'divorced'])],
            'pangkat' => ['required',Rule::in([
                'Pengatur Muda, II/a',
                'Pengatur Muda Tk. I, II/b',
                'Pengatur, II/c',
                'Pengatur Tk. I, II/d',
                'Penata Muda, III/a',
                'Penata Muda Tk. I, III/b',
                'Penata, III/c',
                'Penata Tk. I, III/d',
                'Pembina, IV/a',
                'Pembina Tk. I, IV/b',
                'Pembina Utama Muda, IV/c',
                'Pembina Utama Madya, IV/d',
                'Pembina Utama, IV/e',
                'V', 'VI', 'VII', 'VIII','IX','X','XI','XII','XIII','XIV',
                'XV', 'XVI'
            ])],
        ]);

        Employee::create($validatedData);

        return redirect('/employee')->with('success','Berhasil menambahkan Data Pegawai!');

    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        return view('pages.employee.edit', [
            'employee' => $employee,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nip'=> ['required', 'string','max:18'],
            'nik'=> ['nullable', 'string','max:16'],
            'name'=> ['required','string','max:100'],
            'phone'=> ['nullable','string','max:20'],
            'email'=> ['nullable','string', 'max:100'],
            'jobdesc'=> ['required','string','max:100'],
            'major'=> ['nullable', 'string','max:100'],
            'education'=> ['required', Rule::in([
                'SLTA/Sederajat',
                'DI', 
                'DII', 
                'DIII', 
                'DIV', 
                'S1', 
                'S2', 
                'S3'
            ])],
            'religion'=> ['nullable','string','max:100'],
            'birth_place'=> ['nullable','string','max:100'],
            'birth_date'=> ['required','string'],
            'gender' => ['required',Rule::in(['male', 'female'])],
            'asn_type' => ['required',Rule::in(['PNS', 'PPPK', 'non-ASN'])],
            'placement' => ['required',Rule::in(['kadis', 'sekretariat','pemdes', 'pm', 'dayalinjamsos', 'rehabsos'])],
            'marital_status' => ['required',Rule::in(['single','married', 'divorced'])],
            'pangkat' => ['required',Rule::in([
                'Pengatur Muda, II/a',
                'Pengatur Muda Tk. I, II/b',
                'Pengatur, II/c',
                'Pengatur Tk. I, II/d',
                'Penata Muda, III/a',
                'Penata Muda Tk. I, III/b',
                'Penata, III/c',
                'Penata Tk. I, III/d',
                'Pembina, IV/a',
                'Pembina Tk. I, IV/b',
                'Pembina Utama Muda, IV/c',
                'Pembina Utama Madya, IV/d',
                'Pembina Utama, IV/e',
                'V', 'VI', 'VII', 'VIII','IX','X','XI','XII','XIII','XIV',
                'XV', 'XVI'
            ])],
        ]);

        Employee::findOrFail($id)->update($validatedData);

        return redirect("/employee/{$id}")->with('success','Berhasil mengubah data Pegawai!');

    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee -> delete();

        return redirect('/employee')->with('success','Data employee dihapus!');
    }
}
