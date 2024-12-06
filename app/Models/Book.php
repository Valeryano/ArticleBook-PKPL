<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['Judul', 'Penulis', 'ISBN_ISSN', 'Penerbit', 'Jumlah_Halaman', 'DOI','URL'];
}
