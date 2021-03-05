<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = 'tbl_point_user';
    protected $fillable = ['id_user','objective','point','keterangan'];
}
