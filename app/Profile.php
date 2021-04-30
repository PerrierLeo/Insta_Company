<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getimage()
    {
        $imagePath = $this->image ?? 'avatar/default.png';

        return "/storage" . '/' . $imagePath;
    }
}
