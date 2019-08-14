<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $guarded = ['id'];

    # Event Status
    # ======================================================================== #
    
    const STATUS_NEW        = 1;
    // TO DO: IF event is accepted make the possiblity to mail that the event will proceed
    const STATUS_PLANNED    = 2;
    const STATUS_COMPLETED  = 3;
}
