<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggunapc extends Model
{
    use HasFactory;

    protected $table ='penggunapcs';
    protected $guarded =['id'];

    public function komputer() {
        return $this->belongsTo(Komputer::class);
    }
}
