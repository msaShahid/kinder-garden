@extends('layouts.front.master')
@section('pre_title', 'Success')
@section('content')

<div class="container mb-5 p-5">
    @if (session('error'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-center mb-4">
        <h4 class="display-4 text-success">Child Enrollment Successful</h4>
    </div>
    @php
        $c = App\Models\Country::where('id', $child->country)->select('name')->first();
        $s = App\Models\State::where('id', $child->state)->select('name')->first();   
    @endphp

    <div class="row mb-4">
        <div class="col-12 col-md-6">
            <h5 class="font-weight-bold">Child Information</h5>
            <p><strong>Name:</strong> {{ $child->child_name ?? 'N/A' }}</p>
            <p><strong>Date of Birth:</strong> {{ $child->date_of_birth ?? 'N/A' }}</p>
            <p><strong>Class:</strong> {{ $child->class ?? 'N/A' }}</p>
            <p><strong>Address:</strong> {{ $child->address ?? 'N/A' }}</p>
            <p><strong>City:</strong> {{ $child->city ?? 'N/A' }}</p>
            <p><strong>State:</strong>  {{ $s->name ?? 'N/A' }} </p>
            <p><strong>Country:</strong> {{ $c->name ?? 'N/A' }}</p>
            <p><strong>ZIP Code:</strong> {{ $child->zip_code ?? 'N/A' }}</p>
        </div>

        <div class="col-12 col-md-2">
            <h5 class="font-weight-bold">Child Image</h5>
            @if ($child->photo)
                <div class="text-center">
                    <img src="{{ asset('uploads/children/' . $child->photo) }}" alt="{{ $child->child_name }}" class="img-fluid rounded" style="max-width: 250px;">
                </div>
            @else
                <p class="text-center">No image available.</p>
            @endif
        </div>
    </div>

    <h5 class="mt-2 mb-3 font-weight-bold">Picked-Up Persons</h5>
    @if($child->pickedUpPersons->isEmpty())
        <p>No picked-up persons available.</p>
    @else
        <div class="card">
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($child->pickedUpPersons as $pickedUpPerson)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Name:</strong> {{ $pickedUpPerson->person_name }} <br>
                                <strong>Relation:</strong> {{ $pickedUpPerson->relation }} <br>
                                <strong>Contact No:</strong> {{ $pickedUpPerson->contact_no }}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>

@endsection

