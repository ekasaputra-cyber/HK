<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('toko.tam', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('toko.show', compact('product'));
    }

    public function create()
    {
        return view('toko.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menyimpan gambar
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('toko', 'public'); // menyimpan gambar di storage/app/private/toko
        }

        // Membuat slug dari nama produk
        $slug = Str::slug($request->name, '-');

        // Menyimpan produk ke database
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'slug' => $slug,
            'image' => basename($imagePath),
        ]);

        // Redirect ke halaman produk atau halaman lain setelah sukses
        return redirect()->route('toko.tam')->with('success', 'Produk berhasil ditambahkan!');
    }
}
