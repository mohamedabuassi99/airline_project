<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    //
    protected $table ='ticket_info';

    public $fillable =['user_id','flight_id','flight_departure_date_id','status'];


    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function filghtDetails()
    {
        $this->hasOne(flight_details::class);
    }

    public function flight()
    {
        $this->hasOne(Flight::class);
    }
}
