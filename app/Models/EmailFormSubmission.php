<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EmailFormSubmission extends Pivot
{
    protected $table = 'email_form_submission';
    protected $fillable = ['status'];
}
