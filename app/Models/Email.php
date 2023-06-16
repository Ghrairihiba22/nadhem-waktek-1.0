<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormSubmission;

class Email extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'form_submission_id'];

    public function formSubmission()
    {
    return $this->belongsToMany(FormSubmission::class)->withPivot('status');
    }
}
