<?php

use alpharooq\kernel\space\model;
use alpharooq\kernel\space\station;

class stationKomicho extends station
{
    public function _head ()
    {
        return ['return data from _head function'];
    }
    public function name ()
    {
        return model::get('komicho@name');
    }
}
