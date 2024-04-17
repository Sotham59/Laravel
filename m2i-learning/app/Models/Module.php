<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Module extends Model
{
    use HasFactory;

    protected $table = "modules";
    protected $fillable = ["name", "start", "end"];
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
