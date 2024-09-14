<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Valuation Popup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: white;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 50%; /* Could be more or less, depending on screen size */
            border-radius: 8px;
        }

        /* Close button */
        .close {
            color: #888;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            text-decoration: none;
            cursor: pointer;
        }

        /* Form styles */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .radio-group {
            margin-bottom: 15px;
        }

        .radio-group label {
            margin-right: 10px;
        }

        .submit-btn {
            background-color: #c2185b;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #9c1448;
        }

        .privacy-policy {
            font-size: 14px;
            margin-top: 10px;
        }

        .privacy-policy a {
            color: #c2185b;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Trigger/Open Button -->
<button id="popupBtn">Request Property Valuation</button>

<!-- The Modal -->
<div id="popupModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>PROPERTY VALUATION</h2>
        
        <div class="radio-group">
            <label><input type="radio" name="valuation-type" value="sales" checked> SALES</label>
            <label><input type="radio" name="valuation-type" value="rental"> RENTAL</label>
            <label><input type="radio" name="valuation-type" value="rental-sales"> RENTAL & SALES</label>
        </div>
        
        <div class="form-group">
            <input type="text" placeholder="Property Address">
        </div>
        
        <div class="form-group">
            <input type="text" placeholder="Property Postcode">
        </div>
        
        <div class="form-group">
            <input type="text" placeholder="Full Name">
        </div>
        
        <div class="form-group">
            <input type="email" placeholder="Email address">
        </div>
        
        <div class="form-group">
            <input type="tel" placeholder="Best Contact Number">
        </div>
        
        <div class="form-group">
            <textarea rows="3" placeholder="Tell us about your property"></textarea>
        </div>
        
        <button class="submit-btn">SUBMIT</button>
        <p class="privacy-policy">View our <a href="#">privacy policy</a> regarding website enquiries.</p>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById("popupModal");

    // Get the button that opens the modal
    var btn = document.getElementById("popupBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
