<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kustomer;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class KustomerController extends Controller
{
    public function index() : View
    {
        $kustomers = Kustomer::latest()->paginate(10);
        return view('kustomers.index', compact('kustomers'));
    }

    public function create() : View
    {
        return view('kustomers.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        //validate form
        $request->validate([
            'nik'       => 'required|unique:kustomers,nik',
            'name'      => 'required',
            'phone'     => 'required',
            'email'     => 'required|email',
            'alamat'    => 'required|min:10',
        ]);

        //create kustomer
        Kustomer::create([
            'nik'       => $request->nik,
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'alamat'    => $request->alamat,
        ]);

        //redirect to index
        return redirect()->route('kustomers.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $kustomer = Kustomer::findOrFail($id);
        return view('kustomers.show', compact('kustomer'));
    }

    public function edit(string $id): View
    {
        //get kustomer by ID
        $kustomer = Kustomer::findOrFail($id);
        //render view with kustomer
        return view('kustomers.edit', compact('kustomer'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nik'       => 'required|unique:kustomers,nik,' . $id,
            'name'      => 'required',
            'phone'     => 'required',
            'email'     => 'required|email',
            'alamat'    => 'required|min:10',
        ]);

        //get kustomer by ID
        $kustomer = Kustomer::findOrFail($id);
        
        //update kustomer
        $kustomer->update([
            'nik'       => $request->nik,
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'alamat'    => $request->alamat,
        ]);

        //redirect to index
        return redirect()->route('kustomers.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get kustomer by ID
        $kustomer = Kustomer::findOrFail($id);
        //delete kustomer
        $kustomer->delete();
        //redirect to index
        return redirect()->route('kustomers.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
