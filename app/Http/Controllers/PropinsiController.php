<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropinsiFormRequest;
use App\Models\Propinsi;
use Illuminate\Http\Request;

class PropinsiController extends Controller
{
    public function index()
    {
        $propinsi = Propinsi::get();
        return view("propinsi.index", compact('propinsi'));
    }

    public function create()
    {
        return view("propinsi/create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_prop' => 'required|string|max:255',
            'nama_lembaga' => 'required|string|max:255',
        ]);

        $propinsi = new Propinsi;
        $propinsi->nama_prop = $validatedData['nama_prop'];
        $propinsi->nama_lembaga = $validatedData['nama_lembaga'];

        $propinsi->save();

        return redirect('propinsi');
    }

    public function edit(int $propinsi_id)
    {
        $propinsi = Propinsi::findOrFail($propinsi_id);
        return view('propinsi/edit', compact('propinsi'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_prop' => 'required|string|max:255',
            'nama_lembaga' => 'required|string|max:255',
        ]);

        $propinsi = Propinsi::findOrFail($id);
        $propinsi->nama_prop = $validatedData['nama_prop'];
        $propinsi->nama_lembaga = $validatedData['nama_lembaga'];
        $propinsi->update();

        return redirect('propinsi');
    }

    public function destroy(int $propinsi_id)
    {
        $propinsi = Propinsi::findOrFail($propinsi_id);
        $propinsi->delete();
        return redirect('propinsi');
    }
}
