<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentardansaran extends Model
{
    use HasFactory;
    protected $table = 'komentardansaran';
    protected $primaryKey = 'KomentarID';
}