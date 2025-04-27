<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id', 'title', 'description', 'budget_min', 'budget_max', 'deadline', 'status'
    ];

    public function company()
    {
        return $this->belongsTo(User::class, 'company_id');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'project_skill');
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
