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
    	$article = Article::orderBy('created_at','desc') ->get(); // untuk menampilkan artikel secara update terakhir dipublish
    	
    	return view('article.index', compact('article'));
    	// view seperti header location // compact untuk mengubah database menjadi array
	}    

	public function insert(Request $request)
	    {	
	    	$article = new Article;
	    	$article->title = $request->title;
	    	$article->content = $request->content;
	    	$article->save();

	    	return redirect('article')->with('article', 'Data article berhasil ditambahkan');	
	    }
	public function hapus($id)
    {
    	Article::find($id)->destroy();
    	return redirect('article')->with('article', 'Data article berhasil dihapus');
    }
    

    
}
