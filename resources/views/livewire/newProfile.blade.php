@extends('layouts.app')

@section('content')

 <div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
       Adding New Profile
    </h2>
</div>
<form action="{{ route('registergonow2') }}" method="post">
    @csrf  <!-- CSRF token for Laravel -->

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Personal Information -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Personal Information
                    </h2>

                </div>
                <div id="input" class="p-5">
                    <div class="preview">
                        <div class="mt-1">
                            <label for="regular-form-1" class="form-label">First Name</label>
                            <input id="regular-form-1" type="text" class="form-control" placeholder="Alpha" value="{{ $first_name }}">
                        </div>

                        <div class="mt-3">
                            <label for="regular-form-1" class="form-label">Middle Name</label>
                            <input id="regular-form-1" type="text" class="form-control" placeholder="if any?" value="{{ $middle_name }}">
                        </div>

                        <div class="mt-3">
                            <label for="regular-form-1" class="form-label">Last Name</label>
                            <input id="regular-form-1" type="text" class="form-control" placeholder="last name" value="{{ $last_name }}">
                        </div>



                        <div class="flex flex-col sm:flex-row items-center">
                            <select name="gender" class="form-select form-select-lg sm:mt-2 sm:mr-2" aria-label=".form-select-lg example">
                                <option value="" disabled>Gender</option>
                                <option value="male" {{ old('gender', $gender ?? '') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender', $gender ?? '') == 'female' ? 'selected' : '' }}>Female</option>
                            </select>

                        <select name="marital_status" class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                            <option value="" disabled>Marital Status</option>
                            <option value="Married" {{ old('marital_status', $marital_status ?? '') == 'Married' ? 'selected' : '' }}>Married</option>
                            <option value="Single" {{ old('marital_status', $marital_status ?? '') == 'Single' ? 'selected' : '' }}>Single</option>
                            <option value="Confused" {{ old('marital_status', $marital_status ?? '') == 'Confused' ? 'selected' : '' }}>Confused</option>
                        </select>




                        </div>



                    </div>

                </div>
            </div>
            <!-- END: Personal Information -->



            {{-- birth Information --}}

             <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        birth Information
                    </h2>

                </div>
                <div id="input-groups" class="p-5">

                    <div class="mt-3 mb-3">
                        <label for="date_of_birth" class="form-label">Date of birth</label>
                        <input id="date_of_birth" name="dob" type="date" class="form-control" value="dob">
                    </div>


                    <!-- BEGIN: Basic Select -->
                    <div>
                        <label>Place of Birth (Provinces)</label>
                        <div class="mt-2">
                            <select name="place_of_birth" data-placeholder="Select your place of birth (Provinces)" class="tom-select w-full">
                                <option value="" disabled selected>Select your place of birth</option>
                                <option value="Bas-Uele" {{ old('place_of_birth') == 'Bas-Uele' ? 'selected' : '' }}>Bas-Uele</option>
                                <option value="Haut-Uele" {{ old('place_of_birth') == 'Haut-Uele' ? 'selected' : '' }}>Haut-Uele</option>
                                <option value="Ituri" {{ old('place_of_birth') == 'Ituri' ? 'selected' : '' }}>Ituri</option>
                                <option value="Tshopo" {{ old('place_of_birth') == 'Tshopo' ? 'selected' : '' }}>Tshopo</option>
                                <option value="Haut-Lomami" {{ old('place_of_birth') == 'Haut-Lomami' ? 'selected' : '' }}>Haut-Lomami</option>
                                <option value="Kasai" {{ old('place_of_birth') == 'Kasai' ? 'selected' : '' }}>Kasai</option>
                                <option value="Kasai-Central" {{ old('place_of_birth') == 'Kasai-Central' ? 'selected' : '' }}>Kasai-Central</option>
                                <option value="Kasai-Oriental" {{ old('place_of_birth') == 'Kasai-Oriental' ? 'selected' : '' }}>Kasai-Oriental</option>
                                <option value="Maniema" {{ old('place_of_birth') == 'Maniema' ? 'selected' : '' }}>Maniema</option>
                                <option value="South Kivu" {{ old('place_of_birth') == 'South Kivu' ? 'selected' : '' }}>South Kivu</option>
                                <option value="North Kivu" {{ old('place_of_birth') == 'North Kivu' ? 'selected' : '' }}>North Kivu</option>
                                <option value="Mai-Ndombe" {{ old('place_of_birth') == 'Mai-Ndombe' ? 'selected' : '' }}>Mai-Ndombe</option>
                                <option value="Kwilu" {{ old('place_of_birth') == 'Kwilu' ? 'selected' : '' }}>Kwilu</option>
                                <option value="Kwango" {{ old('place_of_birth') == 'Kwango' ? 'selected' : '' }}>Kwango</option>
                                <option value="Kinshasa" {{ old('place_of_birth') == 'Kinshasa' ? 'selected' : '' }}>Kinshasa</option>
                                <option value="Bas-Congo" {{ old('place_of_birth') == 'Bas-Congo' ? 'selected' : '' }}>Bas-Congo</option>
                                <option value="Mongala" {{ old('place_of_birth') == 'Mongala' ? 'selected' : '' }}>Mongala</option>
                                <option value="Sud-Ubangi" {{ old('place_of_birth') == 'Sud-Ubangi' ? 'selected' : '' }}>Sud-Ubangi</option>
                                <option value="Nord-Ubangi" {{ old('place_of_birth') == 'Nord-Ubangi' ? 'selected' : '' }}>Nord-Ubangi</option>
                                <option value="Équateur" {{ old('place_of_birth') == 'Équateur' ? 'selected' : '' }}>Équateur</option>
                                <option value="Tshuapa" {{ old('place_of_birth') == 'Tshuapa' ? 'selected' : '' }}>Tshuapa</option>
                            </select>
                        </div>
                    </div> <!-- END: Basic Select --> <!-- BEGIN: Nested Select -->
                    <div class="mt-3"> <label>Nationality</label>
                         <div class="mt-2">

                        </div> </div> <!-- END: Nested Select -->

                        <div class="mt-3 mb-3" >
                            <label for="regular-form-1" class="form-label">Nationality</label>
                            <input id="regular-form-1" type="text" class="form-control" placeholder="DRC" value="nationality">
                        </div>
                </div>
            </div>

            <!-- BEGIN: Input Groups -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Upload Photoes
                    </h2>

                </div>
                {{-- <div id="input-groups" class="p-5">
                    <form data-file-types="image/jpeg|image/png|image/jpg" action="/file-upload" class="dropzone">
                        <div class="fallback"> <input name="file" type="file" />
                        </div> <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                        <div class="text-slate-500"> This is just all the three Photos. Selected files are <span class="font-medium"></span> actually uploaded.
                        </div> </div>
                    </form>

                </div> --}}
            </div>
            <!-- END: Input Groups -->



            <!-- BEGIN: Horizontal Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Employment & Education Information
                    </h2>

                </div>
                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="vertical-form-1" class="form-label">Highest Level of Education</label>
                            <input id="vertical-form-1" type="text" class="form-control" placeholder="Degree In" value="skills_or_qualifications">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Institution(s) Attended</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="Institution" value="institutions_attended">
                        </div>

                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Graduation Year(s)</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="1990" value="graduation_years">
                        </div>

                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Employment Status</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="Status" value="employment_status">
                        </div>

                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Current Employer
                            </label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="Employer" value="current_employer">
                        </div>


                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Current Job Title
                            </label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="Title" value="current_job_title">
                        </div>


                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Employment History
                            </label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder=" History" value="employment_history">
                        </div>

                    </div>

                </div>
            </div>
            <!-- END: Horizontal Form -->
        </div>



        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Identification Information-->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Identification Information
                    </h2>

                </div>
                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="vertical-form-1" class="form-label">Choose ID Type</label>
                        </div>

                        {{-- <select class="tom-select w-full">
                            <option value="national_id">National ID Number</option>
                            <option value="passport">Passport Number</option>
                            <option value="driving_permit">Driving License Number</option>
                            <option value="ssn">Social Security Number (or equivalent)</option>
                        </select> --}}

                        <select id="id_type" name="id_type" class="tom-select w-full">
                            <option value="" disabled selected>Select an ID Type</option>
                            <option value="national_id" {{ old('id_type') == 'national_id' ? 'selected' : '' }}>National ID Number</option>
                            <option value="passport" {{ old('id_type') == 'passport' ? 'selected' : '' }}>Passport Number</option>
                            <option value="driving_permit" {{ old('id_type') == 'driving_permit' ? 'selected' : '' }}>Driving License Number</option>
                            <option value="ssn" {{ old('id_type') == 'ssn' ? 'selected' : '' }}>Social Security Number (or equivalent)</option>
                        </select>



                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Enter Number</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="N1h323NDD" value="passport_number">
                        </div>
                        {{-- <div class="form-check mt-5">
                            <input id="vertical-form-3" class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="vertical-form-3">Remember me</label>
                        </div>
                        <button class="btn btn-primary mt-5">Login</button> --}}
                    </div>

                </div>
            </div>
            <!-- END: Vertical Form -->

             <!-- BEGIN: Contact Information -->
             <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Contact Information
                    </h2>

                </div>
                <div id="inline-form" class="p-5">
                    <div class="preview">
                        <div class="grid grid-cols-12 gap-2">
                            <input type="text" class="form-control col-span-4" placeholder="Residential Address" aria-label="default input inline 1" value="residential_address">
                            <input type="text" class="form-control col-span-4" placeholder="Phone Number" aria-label="default input inline 2" value="phone_number">
                            <input type="text" class="form-control col-span-4" placeholder="Email Address" aria-label="default input inline 3" value="email">
                        </div>
                    </div>

                </div>
            </div>
            <!-- END: Contact Form -->

            <!-- BEGIN: Horizontal Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Family Information
                    </h2>

                </div>
                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="vertical-form-1" class="form-label">Father’s Name</label>
                            <input id="vertical-form-1" type="text" class="form-control" placeholder="Tom" value="fathers_name">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Mother’s Name</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="Mother’s Name" value="mothers_name">
                        </div>

                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Emergency Contact Name</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="Jack" value="emergency_contact_name">
                        </div>

                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Emergency Contact Relationship</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="Sister" value="emergency_contact_relationship">
                        </div>

                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Emergency Contact Phone Number
                            </label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="0898989" value="emergency_contact_phone" >
                        </div>

                    </div>

                </div>
            </div>
            <!-- END: Horizontal Form -->

            <!-- BEGIN: Consent Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Consent
                    </h2>

                </div>
                <div id="radio" class="p-5">
                    <div class="preview">
                        <div>
                            <label>Vertical Radio Button</label>
                            <div class="form-check mt-2">
                                <input id="radio-switch-1" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-chris-evans">
                                <label class="form-check-label" for="radio-switch-1">Terms and Conditions Acknowledgment</label>
                            </div>
                            <div class="form-check mt-2">
                                <input id="radio-switch-2" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                                <label class="form-check-label" for="radio-switch-2">Privacy Policy Acknowledgment</label>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!-- END: Radio Button -->
        </div>


    </div>

    <button class="p-4" type="submit">Submit</button>
</form>
 @endsection
