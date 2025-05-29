<?php

namespace Vfjodorovs12\Paps\Models;

use Illuminate\Database\Eloquent\Model;

class PapsStat extends Model
{
    protected $fillable = [
        'forum_name',
        'paps_90d',
        'paps_60d',
        'paps_30d',
        'last_on_forums',
        'last_on_jabber',
        'last_on_mumble',
    ];
}
