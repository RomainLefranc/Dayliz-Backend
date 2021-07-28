<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "state",
        "duree"
    ];

    protected $table = "activities";

    /**
     * The users that belong to the Activities
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }
}
