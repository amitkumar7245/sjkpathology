<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our Platform</title>
</head>
<body>
    <h1>Welcome, {{ $user->name }}!</h1>
    <p>Thank you for registering as a doctor on our platform.</p>

    <h2>User Details</h2>
    <p><strong>Full Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Phone:</strong> {{ $user->phone }}</p>
    <p><strong>Address:</strong> {{ $user->address }}</p>
    <p><strong>Gender:</strong> {{ $user->gender == 1 ? 'Male' : 'Female' }}</p>
    <p><strong>Date of Birth:</strong> {{ $user->dob }}</p>
    <p><strong>Date of Joining:</strong> {{ $user->doj }}</p>
    <p><strong>Aadhar Number:</strong> {{ $user->aadharnumber }}</p>

    <h2>Doctor Details</h2>
    @if($doctor)
        <p><strong>Registration Number:</strong> {{ $doctor->reg_number }}</p>
        <p><strong>License Number:</strong> {{ $doctor->license_number }}</p>
        <p><strong>Bank Name:</strong> {{ $doctor->bankname_id }}</p>
        <p><strong>Branch Name:</strong> {{ $doctor->branchname }}</p>
        <p><strong>IFSC Code:</strong> {{ $doctor->ifsccode }}</p>
        <p><strong>Account Number:</strong> {{ $doctor->accountnumber }}</p>
        <p><strong>Account Holder Name:</strong> {{ $doctor->accountholdername }}</p>
        <p><strong>Commission:</strong> {{ $doctor->commission }}</p>
        <p><strong>Location Name:</strong> {{ $doctor->locationname }}</p>
    @else
        <p>No doctor details available.</p>
    @endif

    <h2>Clinic Details</h2>
    @if($clinic)
        <p><strong>Clinic Name:</strong> {{ $clinic->clinic_name }}</p>
        <p><strong>Clinic Owner Name:</strong> {{ $clinic->clinicowner_name }}</p>
        <p><strong>GST Number:</strong> {{ $clinic->gst_number }}</p>
        <p><strong>Phone Number:</strong> {{ $clinic->phone_number }}</p>
        <p><strong>Telephone Number:</strong> {{ $clinic->telephonephone_number }}</p>
        <p><strong>Clinic Email:</strong> {{ $clinic->clinic_email }}</p>
        <p><strong>Clinic Address:</strong> {{ $clinic->clinic_address }}</p>
    @else
        <p>No clinic details available.</p>
    @endif

    <p>We are excited to have you on board!</p>
</body>
</html>
