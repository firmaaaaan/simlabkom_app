<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lab extends Model
{
    use HasFactory;
    protected $table ='labs';
    protected $guarded =['id'];

    public function komputer(){
        return $this->hasMany(Komputer::class);
    }
}
