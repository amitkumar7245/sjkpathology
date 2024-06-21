@component('mail::message')
# Welcome, {{ $user->name }}!

Thank you for registering as a doctor on our platform.

## User Details
- **Full Name:** {{ $user->name }}
- **Email:** {{ $user->email }}
- **Phone:** {{ $user->phone }}
- **Address:** {{ $user->address }}
- **Gender:** {{ $user->gender == 1 ? 'Male' : 'Female' }}
- **Date of Birth:** {{ $user->dob }}
- **Date of Joining:** {{ $user->doj }}
- **Aadhar Number:** {{ $user->aadharnumber }}

@if($user->doctor)
## Doctor Details
- **Registration Number:** {{ $user->doctor->reg_number }}
- **License Number:** {{ $user->doctor->license_number }}
- **Bank Name:** {{ $user->doctor->bank->bankname }}
- **Branch Name:** {{ $user->doctor->branchname }}
- **IFSC Code:** {{ $user->doctor->ifsccode }}
- **Account Number:** {{ $user->doctor->accountnumber }}
- **Account Holder Name:** {{ $user->doctor->accountholdername }}
- **Commission:** {{ $user->doctor->commission }} %
- **Location Name:** {{ $user->doctor->locationname }}
@endif

@if($user->clinic)
## Clinic Details
- **Clinic Name:** {{ $user->clinic->clinic_name }}
- **Clinic Owner Name:** {{ $user->clinic->clinicowner_name }}
- **GST Number:** {{ $user->clinic->gst_number }}
- **Phone Number:** {{ $user->clinic->phone_number }}
- **Telephone Number:** {{ $user->clinic->telephonephone_number }}
- **Clinic Email:** {{ $user->clinic->clinic_email }}
- **Clinic Address:** {{ $user->clinic->clinic_address }}
@endif

@component('mail::button', ['url' => route('login')])
Login to your account
@endcomponent

We are excited to have you on board!

Thanks,<br>
{{ config('app.name') }}
@endcomponent