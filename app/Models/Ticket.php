<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPublishedAtAttribute(){
        return $this->created_at->format('d/m/y');
    }

    public function getStatusAttribute(){
        return $this->attributes['status'] == 0 ? 'Inactivo' : 'Activo' ;
    }
}
