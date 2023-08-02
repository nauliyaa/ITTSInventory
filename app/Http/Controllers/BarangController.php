<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Form;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Barryvdh\DomPDF\Facade\Pdf;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    public function create()
{
    $pageTitle = 'Create Barang';
    Alert::success('Added!', 'Barang telah ditambahkan');
    return view('barang.create', compact('pageTitle'));
}

    public function createform()
{
    $pageTitle = 'Pinjam Barang';
    Alert::success('Added!', 'Request peminjaman telah ditambahkan');
    return view('barangmahasiswa.createform', compact('pageTitle', 'forms'));
}
        

    public function cetak_pdf()
    {
        $barang = Barang::all();
        Alert::success('Success!', 'PDF berhasil dicetak');
 
        $pdf = PDF::loadview('barang/cetak_pdf', ['barang' => $barang]);
        return $pdf->download('laporan-barang.pdf');
    }

    public function dataform()
    {
        
        return DataTables::of(Form::query())->toJson();
        
    }
     public function data()
     {
         return DataTables::of(Barang::query())->toJson();
     }

     public function history(Request $request)
     {
         $pageTitle = 'Barang List';
     
         // ELOQUENT
         $forms = Form::get();
         return view('Barang.history', [
            'pageTitle' => $pageTitle,
        'forms' => $forms
         ]);
         
     }
 
public function index()
{
    
    return view('Barang.index');
}

public function indexmhs()
{
    return view('BarangMahasiswa.index');
}

public function itemsa()
{
    $pageTitle = 'Barang List';

    // ELOQUENT
    $barangs = Barang::get();

    return view('Barang.item', [
        'pageTitle' => $pageTitle,
        'barangs' => $barangs
    ]);
}
   
public function items()
{
    $pageTitle = 'Barang List';

    // ELOQUENT
    $forms = Form::get();

    return view('BarangMahasiswa.item', [
        'pageTitle' => $pageTitle,
        'forms' => $forms
    ]);
}
   
public function store(Request $request)
{
    $message = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'brand_barang' => 'required',
    ], $message);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // ELOQUENT
    $barang = New Barang;
    $barang->kode_barang = $request->kode_barang;
    $barang->nama_barang = $request->nama_barang;
    $barang->brand_barang = $request->brand_barang;
    $barang->save();


    return redirect()->route('barangs.index');
}

public function storeform(Request $request)
{
    $message = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'nama_peminjam' => 'required',
        'ukmormawa_peminjam' => 'required',
        'barang_peminjam' => 'required',
    ], $message);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // ELOQUENT
    $form = New Form;
    $form->nama_peminjam = $request->nama_peminjam;
    $form->ukmormawa_peminjam = $request->ukmormawa_peminjam;
    $form->barang_peminjam = $request->barang;
    $form->save();


    return redirect()->route('barangmahasiswa.item');
}
    
public function show(string $id)
{
    $pageTitle = 'barang Detail';

    // RAW SQL QUERY
    $barang = Barang::find($id);

    return view('barang.show', compact('pageTitle', 'barang'));
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $pageTitle = 'Edit barang';

    // ELOQUENT
    $barang = Barang::find($id);

    return view('barang.edit', compact('pageTitle', 'barang'));
}

public function update(Request $request, string $id)
{
    $message = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'brand_barang' => 'required',
    ], $message);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // ELOQUENT
    $barang = Barang::find($id);
    $barang->kode_barang = $request->kode_barang;
    $barang->nama_barang = $request->nama_barang;
    $barang->brand_barang = $request->brand_barang;
    $barang->save();

    return redirect()->route('barangs.index');
}

    /**
     * Remove the specified resource from stordeskripsi_barang.
     */
    public function destroy(string $id)
{
    // ELOQUENT
    Barang::find($id)->delete();
    Alert::success('Removed!', 'Barang telah terhapus');

    return redirect()->route('barangs.index');
}
}