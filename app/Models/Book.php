<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public static array $formats = ['PDF', 'EPUB', 'Físico', 'Audiolibro'];

    public function loans() {
        
        return $this->hasMany(Loan::class);
    }
}
