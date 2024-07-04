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


@if ($user->pathdoctor)
## Doctor Details
- **Registration Number:** {{ $user->pathdoctor->registration_number }}
- **License Number:** {{ $user->pathdoctor->license_number }}
- **Specialization:** {{ $user->pathdoctor->specialization }}
- **Commission:** {{ $user->pathdoctor->commission }} %
- **Location Name:** {{ $user->pathdoctor->locationname }}
@endif



@component('mail::button', ['url' => route('login')])
Login to your account
@endcomponent

We are excited to have you on board!

Thanks,<br>
{{ config('app.name') }}
@endcomponent