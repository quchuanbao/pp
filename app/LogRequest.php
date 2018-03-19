<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogRequest extends Model
{
    public function className()
    {
        return $this->belongsTo('App\NewsClasses', 'class_id');
    }
    public function adminName()
    {
        return $this->belongsTo('App\Admin', 'admin_id');
    }
}
