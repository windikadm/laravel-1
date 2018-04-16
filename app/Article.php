<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // ini namespace digunakan untuk memanggil fungsi file agar file yang kita panggil tepat sasaran
use Illuminate\Database\Eloquent\SoftDeletes; 

class Article extends Model
{
	use SoftDeletes;

  	protected $table = 'article'; // untuk memanggil tabelnya

  	protected $fillable = [
   	'title','content'
   ];   // untuk mengatur kolom apa saja yang harus kita isi


   protected $dates =['deleted_at'];

}

