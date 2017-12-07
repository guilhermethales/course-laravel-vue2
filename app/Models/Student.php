<?php

namespace SON\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user() {
        return $this->morphOne(User::class, 'userable');
    }

    public function classInformation() {
        return $this->belongsToMany(ClassInformation::class);
    }
}
