<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['Judul_Artikel', 'Penulis', 'Nama_Jurnal', 'Volume_Jurnal', 'Halaman', 'ISSN', 'Penerbit','URL'];
}
