<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
  </head>
  <body>
    <h1>Welcome, {{ $doctorsAgreement->name }}!</h1>
    <p>Thank you for registering as a doctor on our platform.</p>

    <h2>User Details</h2>
    <p><strong>Full Name:</strong> {{ $doctorsAgreement->name }}</p>
    <p><strong>Email:</strong> {{ $doctorsAgreement->email }}</p>
    <p><strong>Phone:</strong> {{ $doctorsAgreement->phone }}</p>
    <p><strong>Address:</strong> {{ $doctorsAgreement->address }}</p>
    <p><strong>Gender:</strong> {{ $doctorsAgreement->gender == 1 ? 'Male' : 'Female' }}</p>
    <p><strong>Date of Birth:</strong> {{ $doctorsAgreement->dob }}</p>
    <p><strong>Date of Joining:</strong> {{ $doctorsAgreement->doj }}</p>
    <p><strong>Aadhar Number:</strong> {{ $doctorsAgreement->aadharnumber }}</p>
    
  </body>
</html>