<?php

namespace App\Services;

use App\Models\Child;
use Illuminate\Http\Request;
use App\Models\PickedUpPerson;
use Illuminate\Support\Facades\Storage;

class RegistrationService
{
    public function registerChild(Request $request)
    {
        $validatedData = $request->validated();
        $filename = null;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            list($width, $height) = getimagesize($file);
            if ($width < 100 || $height < 100) {
                return redirect()->back()->with('error', 'The image dimensions must be at least 100x100 pixels.');
            }

            $filename = str_replace(' ', '_', $validatedData['child_name']).'_'.$validatedData['class']. '.' . $file->getClientOriginalExtension();

            $uploadPath = public_path('uploads/children');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $file->move(public_path('uploads/children'), $filename);
            $validatedData['photo'] = $filename;
        }

        try {
            $child = Child::create($validatedData);
           
            if ($request->has('picked_up_persons') && is_array($request->picked_up_persons)) {
                foreach ($request->picked_up_persons as $person) {
                    PickedUpPerson::create([
                        'child_id' => $child->id,
                        'person_name' => $person['person_name'] ?? null,
                        'relation' => $person['relation'] ?? null,
                        'contact_no' => $person['contact_no'] ?? null,
                    ]);
                }
            }

            return $child;
        } catch (\Exception $e) {
            Log::error('Registration failed: ' . $e->getMessage());
            return null;
        }
    }
}

