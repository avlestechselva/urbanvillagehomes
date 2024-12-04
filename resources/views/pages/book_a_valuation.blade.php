@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<style>
    label{
       float: left;
    }
    /* Center the form container */
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
    }

    /* Style the form */
    .property-valuation-form {
        width: 70%;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style form elements */
    .property-valuation-form div {
        margin-bottom: 15px;
    }

    .property-valuation-form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .property-valuation-form input[type="text"],
    .property-valuation-form input[type="email"],
    .property-valuation-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Style the submit button */
    .submit-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #d63031;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-align: center;
    }

    .submit-btn:hover {
        background-color: #e17055;
    }

    /* Responsive styling */
    @media (max-width: 768px) {
        .property-valuation-form {
            width: 90%;
        }
    }

    /* Style the radio buttons */
    .property-valuation-form input[type="radio"] {
        margin-right: 10px;
        margin-left: 10px;
    }

    .property-valuation-form div:first-child {
        margin-bottom: 20px;
    }

    /* Style for the new section */
    .valuation-section {
        text-align: center;
        margin-bottom: 20px;
    }

    .valuation-section h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .valuation-section p {
        font-size: 18px;
        color: #555;
        padding: 0 20px;
    }
</style>

<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Book a valuation</li>
    </ol>
</div>

<!-- New Section: Your free property valuation awaits -->
<div class="valuation-section">
    <h2>Your free property valuation awaits</h2>
    <p>Ever wondered what your property is really worth?</p>
    <p>Whether you’re wanting to enter the property market, or are simply curious, you can book a free valuation with one of our property experts below. Simply fill out the form and we will be in touch shortly to confirm a time and date that is convenient for you.</p>
</div>

<!-- Contact -->
<div class="form-container">
    <script type="text/javascript" src="https://form.jotform.com/jsform/243285002399054"></script>
    {{-- <form method="POST" action="{{ route('property.valuation.submit') }}" class="property-valuation-form">
        @csrf
        <div>
            <label for="valuationType">Valuation Type:</label><br>
            <input type="radio" id="sales" name="valuation_type" value="Sales" checked> Sales
            <input type="radio" id="rental" name="valuation_type" value="Rental"> Rental
            <input type="radio" id="rental_sales" name="valuation_type" value="Rental & Sales"> Rental & Sales
        </div>

        <div>
            <label for="propertyAddress">Property Address:</label>
            <input type="text" id="propertyAddress" name="property_address" required>
        </div>

        <div>
            <label for="propertyPostcode">Property Postcode:</label>
            <input type="text" id="propertyPostcode" name="property_postcode" required>
        </div>

        <div>
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="full_name" required>
        </div>

        <div>
            <label for="emailAddress">Email Address:</label>
            <input type="email" id="emailAddress" name="email_address" required>
        </div>

        <div>
            <label for="contactNumber">Best Contact Number:</label>
            <input type="text" id="contactNumber" name="contact_number" required>
        </div>

        <div>
            <label for="propertyDetails">Tell us about your property:</label>
            <textarea id="propertyDetails" name="property_details" required></textarea>
        </div>

        <button type="submit" class="submit-btn">Submit</button>
    </form> --}}
</div>

@include('includes.footer')
