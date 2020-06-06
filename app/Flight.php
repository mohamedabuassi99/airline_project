<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public function flight_details()
    {
        $this->hasOne(flight_details::class);
    }

    public function ticket()
    {
        $this->belongsTo(ticket::class);
    }
}
