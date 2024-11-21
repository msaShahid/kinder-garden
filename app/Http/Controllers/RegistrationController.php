<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\PickedUpPerson;
use App\Services\RegistrationService;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function index()
    {
        $class_room = ['I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII'];
        $relation = ['Father','Mother','Brother','Sister','Grand father','Grand mother'];
        $countries = Country::active()->select('id', 'name')->get();
        $states = State::active()->select('id', 'name')->get();

        $data = [
            'class_room' => $class_room,
            'relation' => $relation,
            'countries' => $countries,
            'states' => $states,
        ];
        return view('front.registration',$data);
    }

    public function getStates(Request $request)
    {
        $countryId = $request->country_id;
        $state = State::where('country_id', $countryId)->select('id','name')->orderBy('name')->get();
        return response()->json($state);
    }

    public function store(RegistrationRequest $request, RegistrationService $registrationService)
    {

        $child = $registrationService->registerChild($request);

        if ($child) {
            return redirect()->route('success', ['child' => $child->id])
                ->with('success', 'Child Picked Up Enrollment Form Submitted Successfully!');
        }

        return redirect()->back()
            ->with('error', 'An error occurred while submitting the form. Please try again.')
            ->withInput();
    }

    public function success(Child $child)
    {
        $child->load(['pickedUpPersons']);
        return view('front.registration_success', compact('child'));
    }
    
}
