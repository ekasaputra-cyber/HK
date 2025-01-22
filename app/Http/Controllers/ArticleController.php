<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles.create');
    }

    // Menyimpan artikel baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = Str::slug($validated['title'], '-');

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public'); // menyimpan gambar di storage/app/public/articles
        }

        // dd([
        //     'title' => $validated['title'],
        //     'content' => $validated['content'],
        //     'slug' => $slug,
        //     'image' => $imagePath,
        // ]);

        Article::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'content' => $validated['content'],
            'image' => $imagePath, // simpan path gambar
        ]);

        return redirect()->route('articles.index');
    }

    // Menampilkan daftar artikel
    public function index()
    {
        $articles = Article::all();
        // dd($articles);
        return view('articles.index', compact('articles'));
    }

    // Menampilkan detail artikel
    public function show($slug)
    {
        // Mencari artikel berdasarkan slug
        $article = Article::where('slug', $slug)->firstOrFail();
        // dd($article);
        return view('articles.show', compact('article'));
    }
    public function home()
    {
        // Ambil 3 artikel terbaru berdasarkan waktu (urutan descending)
        $latestArticles = Article::latest()->take(3)->get();

        // Kirim data artikel ke view homepage
        return view('index', compact('latestArticles'));
    }
}
