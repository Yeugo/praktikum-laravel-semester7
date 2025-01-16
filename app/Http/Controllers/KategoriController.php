<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class KategoriController extends Controller
{
    public function index() : View
    {
        $kategoris = Kategori::latest()->paginate(10);
        return view('kategoris.index', compact('kategoris'));
    }

    public function create() : View
    {
        return view('kategoris.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        //validate form
        $request->validate([
            'name'         => 'required',
            'deskripsi'   => 'required|min:10',
        ]);

        //create kategori
        Kategori::create([
            'name'         => $request->name,
            'deskripsi'   => $request->deskripsi,
        ]);

        //redirect to index
        return redirect()->route('kategoris.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $kategori = Kategori::findorFail($id);
        return view('kategoris.show', compact('kategori'));
    }

    public function edit(string $id): View
    {
        //get kategori by ID
        $kategori = Kategori::findOrFail($id);
        //render view with kategori
        return view('kategoris.edit', compact('kategori'));
    }

    public function update(Request $request, $id): RedirectResponse
    { //validate form
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required|min:10',
        ]);
        //get kategori by ID
        $kategori = Kategori::findOrFail($id);
        
        //update kategori
        $kategori->update([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi
        ]);
        //redirect to index
        return redirect()->route('kategoris.index')->with(['success' =>
        'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get kategori by ID
        $kategori = Kategori::findOrFail($id);
        //delete kategori
        $kategori->delete();
        //redirect to index
        return redirect()->route('kategoris.index')->with(['success' =>
        'Data Berhasil Dihapus!']);
    }

    public function printPdf()
    {
        $kategoris = Kategori::get();
        $data = [
            'title' => 'Welcome To fti.uniska-bjm ac.id',
            'date' => date('m/d/Y'),
            'kategoris' => $kategoris
        ];
        $pdf = PDF::loadview('kategoris.kategoriPdf', $data);
        $pdf->setPaper('A4','landscape');
        return $pdf->stream('Data User.pdf',array("attachment" =>false));
    }
}
