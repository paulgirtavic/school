<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    use Searchable;
}
