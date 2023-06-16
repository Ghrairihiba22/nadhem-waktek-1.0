<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{    use HasFactory;

     protected $fillable = ['name', 'color', 'message','lien','note', 'start_date','end_date','email'];

     public function emails()
     {
    return $this->belongsToMany(Email::class)->withPivot('status');
           
     }
    public function deleteNote()
    {
        $this->delete();
    }
 
   
}


