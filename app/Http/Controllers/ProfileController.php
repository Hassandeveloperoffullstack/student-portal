<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Department;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Session;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
      $std_id =   Auth::user()->student_id;
        $student = Student::findOrFail($std_id);

        return view('profile.edit', [
            'student' => $student,
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function details(string $id)
    {
    // return $id;

    if (Auth::user()->student_id == $id) {
        $students = Student::with(['department', 'class', 'session', 'subject','user'])->find($id);
        $i = 1;
    return view('profile/detail',compact(['students', 'i']));
    }
    else
    {
       return redirect()->route('dashboard');
    }

   
    }
    public function updateUserImage(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        if (!empty($request->image)) {
            $image_path = public_path('storage/' . $student->image);

            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $file = $request->file('image');
            $fileName = time() . '' . $file->getClientOriginalName();
            $filePath = $file->storeAs('images', $fileName, 'public');
            $student->image = $filePath;
            $student->save();
        return redirect()->route('profile.edit');

        }
        else

        return redirect()->route('dashboard');
    }

    public function imageofuser()
    {
      $std_id =   Auth::user()->student_id;

        $student = Student::get($std_id);
            
        return view('logout_latout',compact('student'));

    }
}
