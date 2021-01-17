<?php

namespace App\Models;

use App\Enums\Difficulty;
use App\Enums\RefresherStatus;
use App\Support\DisplaysDates;
use BenSampo\Enum\Traits\CastsEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refresher extends Model
{
    use CastsEnums;
    use DisplaysDates;
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'public' => 'boolean',
        'difficulty' => Difficulty::class,
        'status' => RefresherStatus::class,
        'created_at' => 'datetime'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<string>
     */
    protected $appends = [
        'date'
    ];

    /** @var array<string> */
    protected $displayableDates = [
        'created_at',
        'updated_at'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
