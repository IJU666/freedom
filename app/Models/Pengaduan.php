<?php

namespace App\Models;

use App\Models\Masyarakat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';
    protected $guarded = ['id'];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class);
    }
}
