<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function user(){
        return $this->belongsto(User::class);
    }

    public function notebook() {
        return $this->belongsTo(Notebook::class);
    }
}
