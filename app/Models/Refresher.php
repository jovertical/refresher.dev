<?php

namespace App\Models;

use App\Enums\Level;
use App\Enums\RefresherStatus;
use App\Support\DisplaysDates;
use BenSampo\Enum\Traits\CastsEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Refresher extends Model
{
    use CastsEnums;
    use DisplaysDates;
    use HasFactory;
    use HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'title',
        'description',
        'difficulty',
        'private',
        'status',
        'published_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'public' => 'boolean',
        'difficulty' => Level::class,
        'status' => RefresherStatus::class,
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<string>
     */
    protected $appends = [
        'status',
        'date',
    ];

    /**
     * The dates that will be prepared to be displayed.
     *
     * @var array<string>
     */
    protected $displayableDates = [
        'created_at',
        'updated_at'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    /**
     * Get the options for generating the slug.
     *
     * @return \Spatie\Sluggable\SlugOptions
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
