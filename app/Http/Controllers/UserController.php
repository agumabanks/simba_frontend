<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;




class UserController extends Controller
{

    public $first_name;
    public $username;
    public $email;
    public $middle_name;
    public $last_name;
    public $gender;
    public $dob;
    public $place_of_birth;
    public $nationality;
    public $marital_status;
    public $spouse_name;
    public $national_id;
    public $passport_number;
    public $ssn;
    public $driving_license;
    public $residential_address;
    public $mailing_address;
    public $phone_number;
    public $email_address;
    public $fathers_name;
    public $mothers_name;
    public $emergency_contact_name;
    public $emergency_contact_relationship;
    public $emergency_contact_phone;
    public $employment_status;
    public $current_employer;
    public $current_job_title;
    public $employment_history;
    public $highest_education;
    public $institutions_attended;
    public $graduation_years;
    public $blood_type;
    public $known_allergies;
    public $medical_history;
    public $languages_spoken;
    public $criminal_record;
    public $skills_or_qualifications;
    public $military_service_record;
    public $terms_and_conditions_ack;
    public $privacy_policy_ack;
    public $retina_scan;
    public $audit_logs;
    public $facial_data;
    public $fingerprint_data;
    public $password;

    public function showForm()
    {
        $client = new Client();
        $response = $client->get('http://localhost:8080/getallusers');
        $users = json_decode($response->getBody()->getContents());

        // Check if $users is what you expect
        // Log::info($users);
        // return view('admin.fdr.index', compact('pageTitle', 'emptyMessage', 'data'));
        // $data = $query->with('user','plan')->paginate(getPaginate());

        return view('livewire.dashboard', compact('users',));
    }

    public function getUser($user_id) // Laravel will automatically pass user_id
    {
        try {
            $client = new Client();
            $response = $client->get('http://localhost:8080/getuser', [
                'query' => [
                    'user_id' => $user_id
                ]
            ]);

            $profile = json_decode($response->getBody()->getContents(), true); // Assuming the response is JSON
            return view('livewire.memberProfile', compact('profile'));

        } catch (GuzzleException $e) {
            // Handle the HTTP request error (e.g., log it, return a custom view, etc.)
            return view('errors.custom', ['message' => 'Failed to fetch user']);
        }
    }

    public function deleteUser($user_id){
        try {
            $client = new Client();
            $response = $client->delete('http://localhost:8080/deleteuser', [ // Using DELETE verb
                'query' => [
                    'user_id' => $user_id
                ]
            ]);

            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();

            if($statusCode === 204) { // No Content
                // return response()->json(['message' => 'User successfully deleted']);
                return redirect()->route('dashboard')->with('status', 'User deleted successfully');

            } else {
                return response()->json(['message' => 'Failed to delete user'], $statusCode);

            }
        } catch (GuzzleException $e) {
            // Log the error
            // Log::error('Failed to delete user: ' . $e->getMessage());

            // Return custom error view or JSON response
            return view('errors.custom', ['message' => 'Failed to delete user']);
        }
    }



    public function registerUser(Request $request)
    {

        $username = $this->username;
        $email = $this->email;
        $first_name = $this->first_name;
        $middle_name = $this->middle_name;
        $last_name = $this->last_name;
        $gender = $this->gender;
        $dob = $this->dob;
        $place_of_birth = $this->place_of_birth;
        $nationality = $this->nationality;
        $marital_status = $this->marital_status;
        $spouse_name = $this->spouse_name;
        $national_id = $this->national_id;
        $passport_number = $this->passport_number;
        $ssn = $this->ssn;
        $driving_license = $this->driving_license;
        $residential_address = $this->residential_address;
        $mailing_address = $this->mailing_address;
        $phone_number = $this->phone_number;
        $email_address = $this->email_address;
        $fathers_name = $this->fathers_name;
        $mothers_name = $this->mothers_name;
        $emergency_contact_name = $this->emergency_contact_name;
        $emergency_contact_relationship = $this->emergency_contact_relationship;
        $emergency_contact_phone = $this->emergency_contact_phone;
        $employment_status = $this->employment_status;
        $current_employer = $this->current_employer;
        $current_job_title = $this->current_job_title;
        $employment_history = $this->employment_history;
        $highest_education = $this->highest_education;
        $institutions_attended = $this->institutions_attended;
        $graduation_years = $this->graduation_years;
        $blood_type = $this->blood_type;
        $known_allergies = $this->known_allergies;
        $medical_history = $this->medical_history;
        $languages_spoken = $this->languages_spoken;
        $criminal_record = $this->criminal_record;
        $skills_or_qualifications = $this->skills_or_qualifications;
        $military_service_record = $this->military_service_record;
        $terms_and_conditions_ack = $this->terms_and_conditions_ack;
        $privacy_policy_ack = $this->privacy_policy_ack;
        $retina_scan = $this->retina_scan;
        $audit_logs = $this->audit_logs;
        $facial_data = $this->facial_data;
        $fingerprint_data = $this->fingerprint_data;
        $password = $this->password;


        return view('livewire.newProfile',
        compact( 'username',
        'email',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'dob',
        'place_of_birth',
        'nationality',
        'marital_status',
        'spouse_name',
        'national_id',
        'passport_number',
        'ssn',
        'driving_license',
        'residential_address',
        'mailing_address',
        'phone_number',
        'email_address',
        'fathers_name',
        'mothers_name',
        'emergency_contact_name',
        'emergency_contact_relationship',
        'emergency_contact_phone',
        'employment_status',
        'current_employer',
        'current_job_title',
        'employment_history',
        'highest_education',
        'institutions_attended',
        'graduation_years',
        'blood_type',
        'known_allergies',
        'medical_history',
        'languages_spoken',
        'criminal_record',
        'skills_or_qualifications',
        'military_service_record',
        'terms_and_conditions_ack',
        'privacy_policy_ack',
        'retina_scan',
        'audit_logs',
        'facial_data',
        'fingerprint_data',
        'password')  );
    }

    // Personal Information
    public function kycProfileOne(){

        $username = $this->username;
        $first_name  = $this->first_name ;
        $middle_name = $this-> middle_name;
        $last_name = $this-> last_name;
        $email = $this->email ;
        $phone_number = $this-> phone_number;
        $dob = $this-> dob;
        $place_of_birth = $this-> place_of_birth;
        $gender = $this-> gender;
        $nationality = $this-> marital_status;
        $marital_status = $this-> marital_status;
        $spouse_name = $this-> spouse_name;

        return view('livewire.kycStep1', compact(
            'username',
            'first_name',
            'middle_name',
            'last_name',
            'email',
            'phone_number',
            'dob',
            'place_of_birth',
            'gender',
            'nationality',
            'marital_status',
            'spouse_name',
        ));

    }


    // Identification & Legal Status
    public function kycProfileTwo(Request $request){
    $client = new Client();
    $response = $client->post('http://127.0.0.1:8080/registerpersional',[
        'form_params' => [
            'username' => $request->first_name . '_' . $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'dob' => $request->dob,
            'place_of_birth' => $request->place_of_birth,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'marital_status' => $request->marital_status,
            'spouse_name' => $request->spouse_name,
        ]
        ]);

        $response = $response->getBody()->getContents();

        // {
        //     "user_id": "880888c6-4c2f-11ee-bbce-8c859014fd23",
        //     "message": "User created successfully"
        //   }
        $national_id = $this->national_id;
        $passport_number  =$this-> passport_number;
        $ssn  =$this->ssn;
        $driving_license = $this->driving_license;
        $criminal_record = $this->criminal_record;
        $military_service_record = $this->military_service_record;
        $responseArray = json_decode($response, true);
        $user_id = $responseArray['user_id'] ?? null;




        // reture view('livewire.kycStep1');
        return view('livewire.kycStep2', compact('user_id',
        'national_id',
        'passport_number',
        'ssn',
        'driving_license',
        'criminal_record',
        'military_service_record',
    ));
    }

    // Contact & Emergency Details
    public function kycProfileThree(Request $request){
    $client = new Client();
        $responseData = $client->post('http://127.0.0.1:8080/updateAdditionalInfo',
            ['form_params' => [
                'user_id' => $request->user_id,
                'national_id'  => $request->national_id,
                'passport_number' => $request->passport_number ,
                'ssn' => $request->ssn ,
                'driving_license' => $request->driving_license ,
                'criminal_record' => true,
                'military_service_record' => true
            ]]

            );
            $response = $responseData->getBody()->getContents();

            $responseArray = json_decode($response, true);
            $user_id = $responseArray['user_id'] ?? null;
            $residential_address = $this->residential_address;
            $mailing_address = $this->mailing_address;
            $email_address = $this->email_address;
            $emergency_contact_name = $this->emergency_contact_name;
            $emergency_contact_relationship = $this->emergency_contact_relationship;
            $emergency_contact_phone = $this->emergency_contact_phone;

            return view('livewire.kycStep3', compact(
            'user_id',
            'residential_address',
            'mailing_address',
            'email_address',
            'emergency_contact_name',
            'emergency_contact_relationship',
            'emergency_contact_phone',
        ));
    }


    // Employment & Education
    public function kycProfileFour(Request $request){
    $client = new Client();
    $responseData = $client->post('http://127.0.0.1:8080/updatecontactInfo',
        ['form_params' => [
            'user_id' => $request->user_id,
            'residential_address'  => $request->residential_address,
            'mailing_address' => $request->mailing_address ,
            'email_address' => $request->email_address ,
            'emergency_contact_name' => $request->emergency_contact_name ,
            'emergency_contact_relationship' => $request->emergency_contact_relationship,
            'emergency_contact_phone' => $request->emergency_contact_phone
        ]]

        );
        $response = $responseData->getBody()->getContents();

        $responseArray = json_decode($response, true);
        $user_id = $responseArray['user_id'] ?? null;

        ///// Employment & Education

        $employment_status = $this-> employment_status ;
        $current_employer = $this-> current_employer ;
        $current_job_title = $this-> current_job_title ;
        $employment_history = $this-> employment_history ;
        $highest_education = $this-> highest_education ;
        $institutions_attended = $this->institutions_attended  ;
        $graduation_years = $this-> graduation_years ;
        $skills_or_qualifications = $this-> skills_or_qualifications ;

        return view('livewire.kycStep4', compact(
            'user_id',
            'employment_status',
            'current_job_title',
            'employment_history',
            'highest_education',
            'institutions_attended',
            'graduation_years',
            'skills_or_qualifications'

        ));

    }

    public function kycProfileFive(Request $request){
        $client = new Client();
    $responseData = $client->post('http://127.0.0.1:8080/updateemplotInfo',
        ['form_params' => [
            'user_id' => $request->user_id,
            'employment_status'  => $request->employment_status,
            'current_job_title' => $request->current_job_title ,
            'employment_history' => $request->employment_history ,
            'highest_education' => $request->highest_education ,
            'institutions_attended' => $request->institutions_attended,
            'graduation_years' => $request->graduation_years,
            'skills_or_qualifications' => $request->skills_or_qualifications,
        ]]

        );
        $response = $responseData->getBody()->getContents();

        $responseArray = json_decode($response, true);
        $user_id = $responseArray['user_id'] ?? null;
        $blood_type = $this->blood_type;
        $known_allergies = $this->known_allergies;
        $medical_history = $this->medical_history;
        $languages_spoken = $this->languages_spoken;
        $terms_and_conditions_ack = $this->terms_and_conditions_ack;
        $privacy_policy_ack = $this->privacy_policy_ack;
        $retina_scan = $this->retina_scan;
        $audit_logs = $this->audit_logs;
        $facial_data = $this->facial_data;
        $fingerprint_data = $this->fingerprint_data;
        $password = $this->password;
        return view('livewire.kycStep5', compact(
            'user_id',
            'blood_type',
            'known_allergies',
            'medical_history',
            'languages_spoken',
            'retina_scan',
            'audit_logs',
            'fingerprint_data',
            'password',
            'facial_data',
            'privacy_policy_ack',
        ));

        // updateemplotInfo

    }


    public function kycProfileSix(Request $request){
        $client = new Client();
        $responseData = $client->post('http://127.0.0.1:8080/updateDetailedUserInfo',
            ['form_params' => [
                'user_id' => $request->user_id,
                'blood_type'  => $request->blood_type,
                'known_allergies' => $request->known_allergies ,
                'medical_history' => $request->medical_history ,
                'languages_spoken' => $request->languages_spoken ,
                'password' => $request->password,
                'privacy_policy_ack' => true
            ]]

            );
            $response = $responseData->getBody()->getContents();

            $responseArray = json_decode($response, true);
            $user_id = $responseArray['user_id'] ?? null;



            return view('livewire.kycphotoes', compact(
                'user_id', ));

            // redirect('profiles');
            // return redirect()->route('profiles')->with('status', 'User deleted successfully');
    }



    public function kycphotoes(Request $request){
        $user_id = $request->user_id;
        $photoPaths = [];

        // Validate the uploaded photos
            $request->validate([
                'photo_front' => 'required|image|max:2048',
                'photo_left' => 'required|image|max:2048',
                'photo_right' => 'required|image|max:2048',
            ]);
        $photoTypes = ['photo_front', 'photo_left', 'photo_right'];

        foreach ($photoTypes as $type) {
            $photo = $request->file($type);

            // Generate a unique file name
            $fileName = $type .'.'. $photo->getClientOriginalExtension();
            // . '-' . time() . '.' . $photo->getClientOriginalExtension();

            // Define a folder path
            $userFolder = "photos/{$user_id}";

            // Create the directory if it doesn't exist
            if (!File::exists(public_path($userFolder))) {
                File::makeDirectory(public_path($userFolder), 0777, true);
            }

            // Move the photo to the directory
            $photo->move(public_path($userFolder), $fileName);

            // Store the photo's path into an array
            $photoPaths[$type] = $userFolder . '/' . $fileName;
        }
        // Log::info("photoPaths: ", $photoPaths);

        // Initialize Guzzle HTTP client
        $client = new Client();

        try {
            $response = $client->post('http://127.0.0.1:8080/kycphotos', [
                'form_params' => [
                    'user_id' => $user_id,
                    'front_photo_url' => $photoPaths['photo_front'],
                    'left_photo_url' => $photoPaths['photo_left'],
                    'right_photo_url' => $photoPaths['photo_right'],
                ]
            ]);

            $body = $response->getBody();
            $result = json_decode($body->getContents(), true);

            // Handle the result as needed
        } catch (\Exception  $e) {
            // Handle the exception
            echo 'Request failed: ' . $e->getMessage();
        }





        return redirect()->route('profiles')->with('status', 'User deleted successfully');
    }


public function kycBiomatrics(Request $request){

}
public function registerUserNow2(Request $request)
    {
        $client = new Client();

        $response = $client->post('http://localhost:8080/register', [
            'form_params' => [
                'username' => $request->first_name,
                // 'password' => $request->password,
                'email' => $request->email,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'place_of_birth' => $request->place_of_birth,
                'nationality' => $request->nationality,
                'marital_status' => $request->marital_status,
                'spouse_name' => $request->spouse_name,
                'national_id' => $request->national_id,
                'passport_number' => $request->passport_number,
                'ssn' => $request->ssn,
                'driving_license' => $request->driving_license,
                'residential_address' => $request->residential_address,
                'mailing_address' => $request->mailing_address,
                'phone_number' => $request->phone_number,
                'email_address' => $request->email_address,
                'fathers_name' => $request->fathers_name,
                'mothers_name' => $request->mothers_name,
                'emergency_contact_name' => $request->emergency_contact_name,
                'emergency_contact_relationship' => $request->emergency_contact_relationship,
                'emergency_contact_phone' => $request->emergency_contact_phone,
                'employment_status' => $request->employment_status,
                'current_employer' => $request->current_employer,
                'current_job_title' => $request->current_job_title,
                'employment_history' => $request->employment_history,
                'highest_education' => $request->highest_education,
                'institutions_attended' => $request->institutions_attended,
                'graduation_years' => $request->graduation_years,
                'blood_type' => $request->blood_type,
                'known_allergies' => $request->known_allergies,
                'medical_history' => $request->medical_history,
                'languages_spoken' => $request->languages_spoken,
                'criminal_record' => $request->criminal_record,
                'skills_or_qualifications' => $request->skills_or_qualifications,
                'military_service_record' => $request->military_service_record,
                'terms_and_conditions_ack' => $request->terms_and_conditions_ack,
                'privacy_policy_ack' => $request->privacy_policy_ack,
                'retina_scan' => $request->retina_scan,
                'audit_logs' => $request->audit_logs,
                'facial_data' => $request->facial_data,
                'fingerprint_data' => $request->fingerprint_data,
                'password' => 'password'
            ]
        ]);

        // return view('livewire.newProfile');
        // return view('livewire.newProfile');

        $response->getBody()->getContents();
    }



public function getAllUsers()
    {
        $client = new Client();
        $response = $client->get('http://localhost:8080/getallusers');
        return $response->getBody()->getContents();
    }


}
