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
            <button class="w-10 h-10 rounded-full btn btn-primary">2</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Identification & Legal Status</div>
        </div>
        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn btn-primary">3</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Contact & Emergency Details</div>
        </div>
        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn btn-primary">4</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Employment & Education</div>
        </div>
        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">5</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Medical & Miscellaneous</div>
        </div>
    </div>
    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
        <div class="font-medium text-base">Profile Settings</div>
        <form action="{{ route('kycProfileFive') }}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user_id }}">

            <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-1" class="form-label">employment_status</label>
                    <input id="input-wizard-1" type="text" class="form-control" placeholder="Employed" name="employment_status">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-2" class="form-label">current_job_title</label>
                    <input id="input-wizard-2" type="text" class="form-control" placeholder="current_job_title" name="current_job_title">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-3" class="form-label">employment_history</label>
                    <input id="input-wizard-3" type="text" class="form-control" placeholder="last job" name="employment_history">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-4" class="form-label">emergency contact name</label>
                    <input id="input-wizard-4" type="text" class="form-control" placeholder="emergency_contact_name" name="emergency_contact_name">
                </div>

                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-4" class="form-label">highest_education</label>
                    <input id="input-wizard-4" type="text" class="form-control" placeholder="highest_education" name="highest_education">
                </div>

                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-4" class="form-label">institutions_attended</label>
                    <input id="input-wizard-4" type="text" class="form-control" placeholder="institutions_attended" name="institutions_attended">
                </div>

                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-4" class="form-label">graduation_years</label>
                    <input id="input-wizard-4" type="date" class="form-control" placeholder="graduation_years" name="graduation_years">
                </div>

                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-4" class="form-label">skills_or_qualifications</label>
                    <input id="input-wizard-4" type="text" class="form-control" placeholder="skills_or_qualifications" name="skills_or_qualifications">
                </div>


                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">

                    <button class="btn btn-primary w-24 ml-2">Next</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END: Wizard Layout -->
@endsection
