<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
  </head>
  <body>
    <h1>Welcome, {{ $doctorAgreement->name }}!</h1>
    <p>Thank you for registering as a doctor on our platform.</p>

    <h2>User Details</h2>
    <p><strong>Full Name:</strong> {{ $doctorAgreement->name }}</p>
    <p><strong>Email:</strong> {{ $doctorAgreement->email }}</p>
    <p><strong>Phone:</strong> {{ $doctorAgreement->phone }}</p>
    <p><strong>Address:</strong> {{ $doctorAgreement->address }}</p>
    <p><strong>Gender:</strong> {{ $doctorAgreement->gender == 1 ? 'Male' : 'Female' }}</p>
    <p><strong>Date of Birth:</strong> {{ $doctorAgreement->dob }}</p>
    <p><strong>Date of Joining:</strong> {{ $doctorAgreement->doj }}</p>
    
  </body>
</html>