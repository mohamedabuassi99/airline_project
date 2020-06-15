<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public $fillable = ['airline_id','airline_name','from_location','to_location','departure_time','arrival_time','duration','total_seats'];
    public function flight_details()
    {
        $this->hasOne(flight_details::class);
    }

    public function ticket()
    {
        $this->belongsToMany(ticket::class);
    }
}
