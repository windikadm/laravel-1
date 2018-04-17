<?php

// fungsi controller utnu menjalanka fungsi seperti crud

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
	// namespace\nameclass


class ArticleController extends Controller
{
    public function index()
    {
    	$article = Article::orderBy('created_at','desc') ->paginate(3); // untuk menampilkan artikel secara update terakhir dipublish per [page ditampilkan 3 article
    	
    	return view('article.index', compact('article'));
    	// view seperti header location // compact untuk mengubah database menjadi array
	}   
    	

	public function create()
	{
		return view('article.create');
	}

	public function show($id)
	{
		$article = Article::find($id);
		return view('article.show', compact('article'));
	}

	public function insert(Request $request)
	    {	

	    	$request->validate([
            'title' => 'required|min:10',
            'content' => 'required'
        	]);

	    	$article = new Article;
	    	$article->title = $request->title;
	    	$article->content = $request->content;
	    	$article->save();

	    	return redirect('article')->with('article', 'Data article berhasil ditambahkan');	
	    }
	public function hapus($id)
    {
    	Article::find($id)->delete();
    	return redirect('article')->with('article', 'Data article berhasil dihapus');
    }
     
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

     public function update(Request $request)
     {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save(); 
        return redirect('article')->with('article', 'Data article berhasil diperbarui');
    }
}