<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight_details extends Model
{
    protected $table ="flight_details";

    public function flight()
    {
        $this->belongsTo(Flight::class);
    }

    public function ticket()
    {
        $this->belongsTo(ticket::class);
    }
}
