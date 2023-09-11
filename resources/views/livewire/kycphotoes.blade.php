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
            <button class="w-10 h-10 rounded-full btn btn-primary">5</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Medical & Miscellaneous</div>
        </div>

        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn btn-primary">6</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Photoes</div>
        </div>
    </div>
    <form action="{{ route('kycphotoes') }}" method="post"  enctype="multipart/form-data">
        @csrf
           <input type="hidden" name="user_id" value="{{ $user_id }}">

           <label for="photo_front">Front Photo:</label>
            <input type="file" name="photo_front" required><br>

            <label for="photo_left">Left Side Photo:</label>
            <input type="file" name="photo_left" required><br>

            <label for="photo_right">Right Side Photo:</label>
            <input type="file" name="photo_right" required><br>




            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">

                <button class="btn btn-primary w-24 ml-2">Next</button>
            </div>
        </div>
    </form>
</div>
<!-- END: Wizard Layout -->
@endsection
