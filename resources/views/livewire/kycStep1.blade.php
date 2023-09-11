@extends('layouts.app')
@section('content')
<div class="flex items-center mt-8">
    <h2 class="intro-y text-lg font-medium mr-auto">
        Wizard Layout
    </h2>
</div>
<!-- BEGIN: Wizard Layout -->
<div class="intro-y box py-10 sm:py-20 mt-5">
    <div class="relative before:hidden before:lg:block before:absolute before:w-[69%] before:h-[3px] before:top-0 before:bottom-0 before:mt-4 before:bg-slate-100 before:dark:bg-darkmode-400 flex flex-col lg:flex-row justify-center px-5 sm:px-20">
        <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
            <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Personal Information</div>
        </div>
        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">2</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Identification & Legal Status</div>
        </div>
        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">3</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Contact & Emergency Details</div>
        </div>
        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">4</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Employment & Education</div>
        </div>
        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">5</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Medical & Miscellaneous</div>
        </div>
    </div>

    <form action="{{ route('kycProfileTwo') }}" method="post">
        @csrf
        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
            <div class="font-medium text-base">Profile</div>
            <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">

{{-- first name --}}
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-1" class="form-label"> First Name</label>
                    <input id="input-wizard-1" type="text" class="form-control" placeholder="Albanks" name="first_name">
                </div>

{{-- last mname --}}

                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-2" class="form-label">Last Name</label>
                    <input id="input-wizard-2" type="text" class="form-control" placeholder=" TOM" name="last_name">
                </div>

{{-- spouse_name mname --}}

<div class="intro-y col-span-12 sm:col-span-6">
    <label for="input-wizard-2" class="form-label">Spouse Name</label>
    <input id="input-wizard-2" type="text" class="form-control" placeholder=" TOM" name="spouse_name">
</div>

                {{--  mid name --}}
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-3" class="form-label">Middle name</label>
                    <input id="input-wizard-3" type="text" class="form-control" placeholder="any" name="middle_name">
                </div>

                {{-- email --}}
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-4" class="form-label">Email</label>
                    <input id="input-wizard-4" type="text" class="form-control" placeholder="banks@sanaa.co" name="email">
                </div>

                {{-- phone --}}
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-5" class="form-label">phone_number</label>
                    <input id="input-wizard-5" type="text" class="form-control" placeholder="+234 898989898" name="phone_number">
                </div>



                {{-- DOB --}}
                <div class="mt-3 mb-3">
                    <label for="date_of_birth" class="form-label">Date of birth</label>
                    <input id="date_of_birth" name="dob" type="date" class="form-control" name="dob">
                </div>

{{-- national --}}
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-5" class="form-label">nationality</label>
                    <input id="input-wizard-5" type="text" class="form-control" placeholder="Goms" name="nationality">
                </div>

                 <!-- place of birth -->
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
                </div>




                {{-- <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-6" class="form-label">Size</label>
                    <select id="input-wizard-6" class="form-select">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div> --}}
{{-- sex and marital --}}
                <div class="intro-y col-span-12 sm:col-span-6">
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
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button class="btn btn-primary w-24 ml-2">Next</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END: Wizard Layout -->
@endsection








