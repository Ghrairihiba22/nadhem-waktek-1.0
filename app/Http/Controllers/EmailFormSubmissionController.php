<?php
namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\FormSubmission;
use Illuminate\Http\Request;

class EmailFormSubmissionController extends Controller
{
  public function updateStatus(Request $request)
{
   $email_id = $request->input('email_id');
    $formsubmission_id = $request->input('formsubmission_id');
    $status = $request->input('status');
    $email = Email::find($email_id);
    $formSubmission = FormSubmission::find($formsubmission_id);

    // Update the status of the corresponding email in the form submission
   if (!$email) {
        return redirect()->back()->with('error', 'Email not found');
    }

    // Check if the form submission exists
    if (!$formSubmission) {
        return redirect()->back()->with('error', 'Form submission not found');
    }

    // Update the status of the corresponding email in the form submission
    $formSubmission->emails()->syncWithoutDetaching([$email->id => ['status' => $status]]);
    return redirect ('/dashboard');
}

    

}
