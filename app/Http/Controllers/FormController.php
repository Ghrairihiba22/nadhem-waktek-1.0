<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeleteEmail;
use App\Mail\updateEmail;
use Illuminate\Http\Request;
use App\Models\FormSubmission;
use App\Mail\NewSubmission;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



class FormController extends Controller

{  
   public function submit(Request $request)
{
    $start_date = $request->input('start_date');
    $end_date = $request->input('end_date');
    $currentDate = Carbon::now();

    if (Carbon::parse($start_date)->gte($currentDate)) {
        $formSubmission = FormSubmission::create([
            'name' => $request->input('name'),
            'color' => $request->input('colorChosen'),
            'message' => $request->input('message'),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'lien' => $request->input('lien'),
            'note' => $request->input('note'),
        ]);

        $emailsInput = $request->input('emails');
        $emails = explode(',', $emailsInput);

        $emailIds = [];
        foreach ($emails as $email) {
            $trimmedEmail = trim($email);

            if (!empty($trimmedEmail)) {
$createdEmail = $formSubmission->emails()->create([
    'email' => $trimmedEmail,
    'form_submission_id' => $formSubmission->id,
]);                $emailIds[] = $createdEmail->id;

                Mail::to($trimmedEmail)->send(new NewSubmission($formSubmission->name, $formSubmission->lien, $formSubmission->start_date, $formSubmission->end_date, $createdEmail->id, $formSubmission->id));
            }
        }

        $emailIdsString = implode(',', $emailIds);

        // Pass the $emailIdsString to your view or perform further actions as needed

        return redirect('/hel')->with('emailIds', $emailIdsString);
    } 
    else {
        // Handle the case when the start date is not valid
        $message = 'Date invalide.';
        session()->flash('error', $message);
        return redirect()->back();
    }
}


public function update(Request $request, $id)
{ 
    $start_date = $request->input('start_date');
$currentDate = Carbon::now();
if (Carbon::parse($start_date)->gte($currentDate)) {
   
       $event = FormSubmission::findOrFail($id);
    $event->name = $request->input('name');
    $event->start_date = $start_date;
     $event->save();
     
        $emails = $event->emails()->pluck('email')->toArray();
    foreach ($emails as $email) {
        Mail::to($email)->send(new UpdateEmail($event->name , $event->lien, $event->start_date, $event->end_date));
    }
}
else {
     // Handle the case when the start date is not valid
        $message = 'Date invalide.';
        session()->flash('error', $message);
        
        return response()->json(['success' => false, 'message' => $message]);
    }

        return response()->json(['success' => true]);

}


public function destroy($id)
{
    $formSubmission = FormSubmission::findOrFail($id);
    // Get the emails before deleting the form submission
    $emails = $formSubmission->emails()->pluck('email')->toArray();
    foreach ($emails as $email) {
        Mail::to($email)->send(new DeleteEmail($formSubmission->name , $formSubmission->lien, $formSubmission->start_date, $formSubmission->end_date));
    }
    // Delete associated emails
    $formSubmission->emails()->delete();
    // Delete form submission
    $formSubmission->delete();
    // Send email to deleted addresses
    return response()->json(['success' => true]);
}


 public function editnote($id)
    {
          
             $event = FormSubmission::findOrFail($id);

        return view('notes.create', ['ev' => $event]);
    }

  public function updatenote(Request $request, $id)
{
    $event = FormSubmission::findOrFail($id);
    $event->note = $request->input('note');
    $event->save();

 return redirect ('/hel');

}

//delete event from calendar :
public function updateEvent(Request $request)
{ 
     $start_date = $request->input('eventNewDate');
     $currentDate = Carbon::now();
if (Carbon::parse($start_date)->gte($currentDate)) {
   
       $id = $request->input('eventId');
    $event = FormSubmission::findOrFail($id);
    $event->start_date = $start_date;
    $emails = $event->emails()->pluck('email')->toArray();
    foreach ($emails as $email) {
        Mail::to($email)->send(new UpdateEmail($event->name , $event->lien, $event->start_date, $event->end_date));
    }
     $event->save();
}
else {
     // Handle the case when the start date is not valid
        $message = 'Date invalide.';
        session()->flash('error', $message);
        return response()->json(['success' => false, 'message' => $message]);
    }

        return response()->json(['success' => true]);

}



public function setNoteToNull(Request $request, $id)
{
    $note = FormSubmission::findOrFail($id);
    $note->note = ''; // Set the note to an empty value
    $note->save();
    return response()->json(['message' => 'Note deleted successfully']);
}


//delete user :
public function delete($id)
{
    // Retrieve the user by ID
    $user = User::findOrFail($id);

    // Delete the user
    $user->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Profile deleted successfully!');
}

public function index()
{    $user = Auth::user();

    $currentDate = Carbon::now();
    $events = FormSubmission::all();
    $todoEvents = [];
    $doneEvents = [];
    $inProgressEvents = [];

    foreach ($events as $event) {
        $startDate = Carbon::parse($event->start_date);

        if ($startDate > $currentDate) {
            $todoEvents[] = $event;
        } elseif ($startDate->isSameDay($currentDate)) {
            $inProgressEvents[] = $event;
        } else {
            $doneEvents[] = $event;
        }
    }

    return view('taskboard', compact('todoEvents', 'inProgressEvents', 'doneEvents','user'));
}

public function showDashboard(){
    $user = Auth::user();

        $dailyMeetings = [];
        $dailyTasks = [];
        $currentDate = Carbon::now();
        $events = FormSubmission::all();
        $todoEvents = [];
        $doneEvents = [];
        $inProgressEvents = [];
        for ($i = 0; $i < 60; $i++) {
            $dailyMeetings[Carbon::now()->subDays($i)->format('Y-m-d')] = FormSubmission::whereNotNull('lien')->whereDate('start_date', '=', Carbon::now()->subDays($i)->format('Y-m-d'))->count();
            $dailyTasks[Carbon::now()->subDays($i)->format('Y-m-d')] = FormSubmission::whereNull('lien')->whereDate('start_date', '=', Carbon::now()->subDays($i)->format('Y-m-d'))->count();

        }
    
        foreach ($events as $event) {
            $startDate = Carbon::parse($event->start_date);
    
            if ($startDate > $currentDate) {
                $todoEvents[] = $event;
    
            } elseif ($startDate->isSameDay($currentDate)) {
                $inProgressEvents[] = $event;
            } else {
                $doneEvents[] = $event;
            }
        }
        $todoEventsCount = count($todoEvents);
        $inProgressEventsCount = count($inProgressEvents);
        $doneEventsCount = count($doneEvents);
$formSubmissions = FormSubmission::whereHas('emails', function ($query) {
    $query->whereNotNull('status');
})->with(['emails' => function ($query) {
    $query->whereNotNull('status');
}])->get();
        return view('dashboard', [
            'dailyMeetings' => array_reverse($dailyMeetings),
            'dailyTasks' => array_reverse($dailyTasks),
            'todoEventsCount'=>$todoEventsCount  ,
            'inProgressEventsCount'=> $inProgressEventsCount,
            'doneEventsCount'=>$doneEventsCount,
            'todoEvents'=>$todoEvents,
            'inProgressEvents'=>$inProgressEvents,
            'formSubmissions'=> $formSubmissions,
            'user'=>$user
        ]);
    }
    
}