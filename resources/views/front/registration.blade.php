@extends('layouts.front.master')
@section('pre_title', 'Home')
@section('content')

    <div class="container mb-5 p-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form  method="POST" action="{{ route('store') }}" enctype="multipart/form-data" class="needs-validation" novalidate> @csrf
        
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-1">Child Picked Up Enrollment Form</h4>
                </div>
                <div class="card-body">
                    <!-- Child Details Section -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="child_name" class="form-label">Child Name</label>
                            <input type="text" id="child_name" name="child_name" placeholder="Enter Child's Name" 
                            value="{{ old('child_name') }}"
                            class="form-control {{ $errors->has('child_name') ? 'is-invalid' : (old('child_name') ? 'is-valid' : '') }}" required>
                            <div class="invalid-feedback">Please enter the child's name.</div>
                        </div>
        
                        <div class="col-md-4">
                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                            <input type="date" id="date_of_birth" name="date_of_birth"
                                value="{{ old('date_of_birth') }}"
                                class="form-control {{ $errors->has('date_of_birth') ? 'is-invalid' : (old('date_of_birth') ? 'is-valid' : '') }}"
                                 required>
                            <div class="invalid-feedback">Please select a valid date of birth.</div>
                        </div>
        
                        <div class="col-md-4">
                            <label for="class" class="form-label">Class</label>
                            <select id="class" name="class"
                            class="form-select {{ $errors->has('class') ? 'is-invalid' : (old('class') ? 'is-valid' : '') }}"  required>
                                <option value="">-- Select Class --</option>
                                @foreach ($class_room as $class)
                                    <option value="{{ $class }}  {{ old('class') == $class ? 'selected' : '' }}">{{ $class }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select the class.</div>
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea id="address" name="address" rows="2" placeholder="Enter Address" 
                            class="form-control {{ $errors->has('address') ? 'is-invalid' : (old('address') ? 'is-valid' : '') }}" required>{{ old('address') }}</textarea>
                        <div class="invalid-feedback">Please enter an address.</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="country" class="form-label">Country</label>
                            <select id="country" name="country" 
                            value="{{ old('country') }}"
                            class="form-select {{ $errors->has('country') ? 'is-invalid' : (old('country') ? 'is-valid' : '') }}" required>
                                <option value="">-- Select Country --</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" {{ old('country') == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select a country.</div>
                        </div>
        
                        <div class="col-md-4">
                            <label for="state" class="form-label">State</label>
                            <select id="state" name="state" 
                            class="form-select {{ $errors->has('state') ? 'is-invalid' : (old('state') ? 'is-valid' : '') }}" required></select>
                            <div class="invalid-feedback">Please select a state.</div>
                        </div>
        
                        <div class="col-md-4">
                            <label for="city" class="form-label">City</label>
                            <input type="text" id="city" name="city" placeholder="Enter City" 
                            value="{{ old('city') }}"
                            class="form-control {{ $errors->has('city') ? 'is-invalid' : (old('city') ? 'is-valid' : '') }}" required>
                            <div class="invalid-feedback">Please enter the city.</div>
                        </div>
                    </div>
        
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="zip_code" class="form-label">Zip Code</label>
                            <input type="text" id="zip_code" name="zip_code" placeholder="Enter Zip Code" 
                            value="{{ old('zip_code') }}"
                            class="form-control {{ $errors->has('zip_code') ? 'is-invalid' : (old('zip_code') ? 'is-valid' : '') }}" required>
                            <div class="invalid-feedback">Please enter the zip code.</div>
                        </div>
        
                        <div class="col-md-4">
                            <label for="photo" class="form-label">Upload Photo</label>
                            <input type="file" id="photo" name="photo" accept="image/*"
                            value="{{ old('photo') }}"
                            class="form-control {{ $errors->has('photo') ? 'is-invalid' : (old('photo') ? 'is-valid' : '') }}">
                            <div class="invalid-feedback">Please upload a photo.</div>
                        </div>
                    </div>
        
                    <!-- Picked Up Person Section -->
                    <h5 class="mt-3">Picked Up Person 
                        <button type="button" class="btn btn-sm btn-primary" onclick="addMorePickedUpPerson()">Add More</button>
                    </h5>
        
                    <div id="picked-up-persons-container">
                        <div class="row mb-2" id="picked-up-persons-0">
                            <div class="col-md-4">
                                <label for="picked_up_persons_0_name" class="form-label">Name</label>
                                <input type="text" id="picked_up_persons_0_name" name="picked_up_persons[0][person_name]" placeholder="Name"
                                class="form-control" value="{{ old('picked_up_persons.0.person_name') }}"  required>
                            </div>
                            <div class="col-md-3">
                                <label for="picked_up_persons_0_relation" class="form-label">Relation</label>
                                <select id="picked_up_persons_0_relation" name="picked_up_persons[0][relation]" value="{{ old('relation') }}" class="form-control" required>
                                    <option value="">-- Select --</option>
                                    @foreach ($relation as $val)
                                        <option value="{{ $val }}" 
                                                @if (old('picked_up_persons.0.relation') == $val) selected @endif>
                                            {{ $val }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="picked_up_persons_0_contact_no" class="form-label">Contact No</label>
                                <input type="text" id="picked_up_persons_0_contact_no"  name="picked_up_persons[0][contact_no]" placeholder="Contact No"
                                    class="form-control" value="{{ old('picked_up_persons.0.contact_no') }}"  required>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-sm btn-danger remove-person" onclick="removePickedUpPerson(0)">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </div>
                        </div>
                    </div>
        
                    <!-- Submit Button -->
                    <div class="col-md-2 m-3">
                        <button type="submit" class="btn btn-success">Submit Form</button>
                    </div>
                </div>
            </div>
        </form>
    
    </div>

@endsection

@push('js')
<script>
   $(document).ready(function() {
        // When country is changed, fetch the states via AJAX
        $('#country').change(function() {
            var countryId = $(this).val();
            var oldState = "{{ old('state') }}"; 
            if (countryId) {
                $.ajax({
                    url: '/get-states',
                    method: 'GET',
                    data: { country_id: countryId },
                    success: function(data) {
                        $('#state').empty();
                        $('#state').append('<option value="">Select State</option>');

                        if (data.length) {
                            data.forEach(function(state) {
                                var isSelected = (state.id == oldState) ? 'selected' : '';
                                $('#state').append('<option value="' + state.id + '" ' + isSelected + '>' + state.name + '</option>');
                            });
                        } else {
                            $('#state').append('<option value="">No states available</option>');
                        }
                    },
                    error: function() {
                        alert('Error fetching states. Please try again later.');
                    }
                });
            } else {
                $('#state').empty();
                $('#state').append('<option value="">Select State</option>');
            }
        });

    // Add More Picked Up Person
    let personCount = 1;
    window.addMorePickedUpPerson = function() {
        if (personCount < 6) {
            let newPersonRow = `
                <div class="row mb-2" id="picked-up-persons-${personCount}">
                    <div class="col-md-4">
                        <label for="picked_up_persons_${personCount}_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="picked_up_persons_${personCount}_name" 
                        name="picked_up_persons[${personCount}][person_name]" placeholder="Name"
                        value="{{ old('picked_up_persons.${personCount}.person_name') }}"
                         >
                    </div>
                    <div class="col-md-3">
                        <label for="picked_up_persons_${personCount}_relation" class="form-label">Relation</label>
                        <select class="form-select" id="picked_up_persons_${personCount}_relation" name="picked_up_persons[${personCount}][relation]" >
                            <option value="">-- Select --</option>
                             @foreach ($relation as $val)
                                <option value="{{ $val }}" 
                                        @if(old('picked_up_persons.${personCount}.relation') == '{{ $val }}') selected @endif>
                                    {{ $val }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="picked_up_persons_${personCount}_contact_no" class="form-label">Contact No</label>
                        <input type="text" class="form-control" id="picked_up_persons_${personCount}_contact_no" 
                        name="picked_up_persons[${personCount}][contact_no]" placeholder="Contact No"
                        value="{{ old('picked_up_persons.${personCount}.contact_no') }}" 
                        >
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-sm btn-danger remove-person" onclick="removePickedUpPerson(${personCount})">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>
                </div>
            `;

            $('#picked-up-persons-container').append(newPersonRow);
            personCount++;
        } else {
            alert('You can add a maximum of 6 people.');
        }
    }

     // Remove Picked Up Person Row
     window.removePickedUpPerson = function(personIndex) {
        if (personCount > 1) {
            $(`#picked-up-persons-${personIndex}`).remove();
            personCount--; 
        } else {
            alert('You must have at least one picked-up person.');
        }
    }



   })
</script>

@endpush
