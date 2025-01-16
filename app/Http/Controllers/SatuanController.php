<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SatuanController extends Controller
{
    public function index() : View
    {
        $satuans = Satuan::latest()->paginate(10);
        return view('satuans.index', compact('satuans'));
    }

    public function create() : View
    {
        return view('satuans.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        //validate form
        $request->validate([
            'name'         => 'required',
            'simbol'         => 'required',
            'deskripsi'   => 'required|min:10',
        ]);

        //create Satuan
        Satuan::create([
            'name'         => $request->name,
            'simbol'         => $request->simbol,
            'deskripsi'   => $request->deskripsi,
        ]);

        //redirect to index
        return redirect()->route('satuans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $satuan = Satuan::findorFail($id);
        return view('satuans.show', compact('satuan'));
    }

    public function edit(string $id): View
    {
        //get satuan by ID
        $satuan = satuan::findOrFail($id);
        //render view with satuan
        return view('satuans.edit', compact('satuan'));
    }

    public function update(Request $request, $id): RedirectResponse
    { //validate form
        $request->validate([
            'name' => 'required',
            'simbol' => 'required',
            'deskripsi' => 'required|min:10',
        ]);
        //get satuan by ID
        $satuan = Satuan::findOrFail($id);
        
        //update satuan
        $satuan->update([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi
        ]);
        //redirect to index
        return redirect()->route('satuans.index')->with(['success' =>
        'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get satuan by ID
        $satuan = Satuan::findOrFail($id);
        //delete kategori
        $satuan->delete();
        //redirect to index
        return redirect()->route('satuans.index')->with(['success' =>
        'Data Berhasil Dihapus!']);
    }
}
