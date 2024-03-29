<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }

    public $timestamps = false;

}
