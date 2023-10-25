<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komputer extends Model
{
    use HasFactory;
    protected $table='komputers';
    protected $guarded =['id'];

    public function lab(){
        return $this->belongsTo(Lab::class,'lab_id','id');
    }

    public function penggunapc() {
        return $this->hasMany(Penggunapc::class);
    }
}
