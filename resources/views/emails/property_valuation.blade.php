<!DOCTYPE html>
<html>
<head>
    <title>Property Valuation Request</title>
</head>
<body>
    <h2>New Property Valuation Request</h2>
    <p><strong>Valuation Type:</strong> {{ $data['valuation_type'] }}</p>
    <p><strong>Property Address:</strong> {{ $data['property_address'] }}</p>
    <p><strong>Property Postcode:</strong> {{ $data['property_postcode'] }}</p>
    <p><strong>Full Name:</strong> {{ $data['full_name'] }}</p>
    <p><strong>Email Address:</strong> {{ $data['email_address'] }}</p>
    <p><strong>Contact Number:</strong> {{ $data['contact_number'] }}</p>
    <p><strong>Property Details:</strong> {{ $data['property_details'] }}</p>
</body>
</html>
