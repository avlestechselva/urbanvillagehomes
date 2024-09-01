@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/landlords.jpg') }}" alt="banner" />
</header>-->
<style>
    .custom-btn {
        background-color: #e11959; /* Use the color from the image */
        color: white; /* Text color */
        padding: 10px 20px; /* Adjust padding to match the look */
        border-radius: 25px; /* Rounded corners */
        border: none; /* Remove any border */
        font-weight: bold; /* Bold text */
        text-align: center; /* Center text */
        display: inline-block; /* Ensure it behaves like a button */
        text-decoration: none; /* Remove underline from link */
        transition: background-color 0.3s ease; /* Smooth hover effect */
    }

    .custom-btn:hover {
        background-color: #d41653; /* Slightly darker shade on hover */
    }

    .button-container { /* New class to center the button */
        text-align: center; /* Center align text within the container */
        margin-top: 20px; /* Optional: Add some space above the button */
    }

    .letting-section {
    display: flex; /* Flexbox for layout */
    justify-content: space-between; /* Space between text and image */
    align-items: center; /* Align items vertically in the center */
    background-color: white; /* Background color for the section */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Padding inside the section */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for slight elevation */
    margin: 20px 0; /* Margin for spacing above and below */
}

.letting-content {
    max-width: 50%; /* Maximum width for text content */
}

.letting-content h2 {
    color: #A22D6C; /* Heading color */
    font-size: 24px; /* Font size for the heading */
    margin-bottom: 15px; /* Margin below the heading */
}

.letting-content p {
    font-size: 16px; /* Font size for paragraphs */
    line-height: 1.5; /* Line height for readability */
    color: #333; /* Text color */
    margin-bottom: 15px; /* Margin below paragraphs */
}

.letting-button-container {
    text-align: center; /* Center align button horizontally */
    margin-top: 20px; /* Margin above button */
}

.letting-btn {
    background-color: #e11959; /* Button background color */
    color: white; /* Button text color */
    padding: 10px 20px; /* Button padding */
    border-radius: 25px; /* Rounded button corners */
    border: none; /* Remove button border */
    font-weight: bold; /* Bold text */
    text-align: center; /* Center text in button */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Make it behave like a button */
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

.letting-btn:hover {
    background-color: #d41653; /* Darker shade on hover */
}

.letting-image {
    max-width: 45%; /* Maximum width for image */
    margin-left: 20px; /* Margin between image and text */
}

.letting-image img {
    width: 100%; /* Full width image */
    border-radius: 10px; /* Rounded corners for image */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for image */
}

.support-section {
    display: flex; /* Enables flexbox */
    flex-direction: column; /* Aligns children vertically */
    align-items: center; /* Centers child elements horizontally */
    justify-content: center; /* Centers child elements vertically */
    text-align: center; /* Center align the text */
    margin: 0 auto; /* Center the support section container horizontally */
    min-height: 100vh; /* Ensure it takes at least the full height of the viewport */
    padding: 20px; /* Padding around the content */
}

.support-section h2 {
    color: #A22D6C; /* Heading color */
    font-size: 24px; /* Font size for the heading */
    margin-bottom: 10px; /* Margin below the heading */
}

.support-section p {
    font-size: 16px; /* Font size for paragraphs */
    line-height: 1.5; /* Line height for readability */
    color: #333; /* Text color */
    margin-bottom: 20px; /* Margin below paragraphs */
    max-width: 600px; /* Max width for paragraphs */
    margin-left: auto; /* Centering */
    margin-right: auto; /* Centering */
}

.service-box {
    border: 2px solid #A22D6C; /* Border color */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Padding inside the box */
    margin: 20px auto; /* Margin around the box */
    max-width: 800px; /* Max width for service boxes */
    text-align: left; /* Align text to the left */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for slight elevation */
}

.service-box h3 {
    color: #A22D6C; /* Subheading color */
    font-size: 20px; /* Font size for subheadings */
    margin-bottom: 15px; /* Margin below the subheading */
}

.service-box p {
    font-size: 16px; /* Font size for paragraphs */
    line-height: 1.5; /* Line height for readability */
    color: #333; /* Text color */
    margin-bottom: 15px; /* Margin below paragraphs */
}

.service-box strong {
    font-weight: bold; /* Bold text for emphasis */
}

.service-buttons {
    margin-top: 20px; /* Margin above the buttons */
}

.service-btn {
    background-color: #e11959; /* Button background color */
    color: white; /* Button text color */
    padding: 10px 20px; /* Button padding */
    border-radius: 25px; /* Rounded button corners */
    border: none; /* Remove button border */
    font-weight: bold; /* Bold text */
    text-align: center; /* Center text in button */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Make it behave like a button */
    transition: background-color 0.3s ease; /* Smooth hover effect */
    margin-right: 10px; /* Margin right between buttons */
}

.service-btn:hover {
    background-color: #d41653; /* Darker shade on hover */
}

.service-btn.whatsapp {
    background-color: #25D366; /* WhatsApp green color */
    padding: 10px 15px; /* Padding for WhatsApp button */
}

.service-btn.whatsapp i {
    font-size: 18px; /* Font size for WhatsApp icon */
    color: white; /* Icon color */
}

.letting-experience-section {
    display: flex; /* Use Flexbox to create a side-by-side layout */
    justify-content: space-between; /* Space between the image and text */
    align-items: center; /* Align items in the center vertically */
    background-color: #1A1033; /* Dark background color */
    padding: 40px; /* Padding around the section */
    border-radius: 20px; /* Rounded corners for the section */
    max-width: 1200px; /* Maximum width for the section */
    margin: 0 auto; /* Center the section horizontally */
}

.image-container {
    flex: 1; /* Flex-grow: occupies equal space as the text container */
    margin-right: 20px; /* Margin between the image and text */
}

.experience-image {
    width: 100%; /* Full width for the image */
    border-radius: 10px; /* Rounded corners for the image */
}

.text-container {
    flex: 1; /* Flex-grow: occupies equal space as the image container */
    color: white; /* Text color for content */
}

.experience-heading {
    color: #d4df12; /* Heading color */
    font-size: 28px; /* Font size for the heading */
    margin-bottom: 20px; /* Margin below heading */
}

.text-container p {
    font-size: 16px; /* Font size for paragraphs */
    line-height: 1.6; /* Line height for readability */
    margin-bottom: 20px; /* Margin below paragraphs */
}

.benefits-list {
    list-style-type: none; /* Remove default list style */
    padding-left: 0; /* Remove left padding */
}

.benefits-list li {
    font-size: 16px; /* Font size for list items */
    line-height: 1.6; /* Line height for list items */
    color: #d4df12; /* List item text color */
    margin-bottom: 10px; /* Margin between list items */
    padding-left: 20px; /* Padding to align text */
    position: relative; /* Positioning for icon */
}

.benefits-list li::before {
    content: "🌿"; /* Add icon before list items */
    position: absolute; /* Absolute position for icon */
    left: 0; /* Align icon to the left */
    top: 0; /* Align icon vertically */
}



    </style>
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tenants</li>
    </ol>
</div>

<div class="page-title-div"> Selling your property with Urban Village </div>
    <div class= "page-subtitle-div"> Discover why others choose to partner with us </div>


<div class="intro" style="padding-bottom: 42px !important;">
    <div class="container">
        <div class="row row-eq-height move_up_top">
            <!-- Intro Content -->
            <div class="col-lg-12 move_up_top-2">
                <div class="intro_content">
                    <br/>
                    <div class="button-container"> <!-- Wrapper to center the button -->
                        <a target="_blank" href="https://urban-village-homes.engage.epropservices.com/" class="btn custom-btn">
                            <b>Book a Free Valuation</b>
                        </a>
                    </div>
                </div>
            </div>
            <div class="letting-section">
                <div class="letting-content">
                    <h2>Why let with Urban Village?</h2>
                    <p>We’re not your typical run-of-the-mill estate agency. As a genuinely independent, local agency, you can rest assured that your property is highly valued and looked after.</p>
                    <p>We make an effort to get to know our landlords personally, as well as their properties, so we can provide a bespoke service tailored to you as an individual, not just as an addition to our portfolio. Essentially, we are a real estate agency run by real people that you can contact whenever you need to.</p>
                    <p>With our extensive knowledge of the local rental market, unparalleled lettings experience and regularly updated database of suitable tenants, we can help you find the ideal match, making sensible and fast decisions on your behalf to best protect your property and tenancy.</p>
                    <div class="letting-button-container">
                        <a href="#" class="letting-btn">Book a valuation</a>
                    </div>
                </div>
                <div class="letting-image">
                    <img src="{{ asset('images/garden.jpg') }}" alt="Property Image">
                </div>
            </div>
            <div class="letting-experience-section">
                <div class="image-container">
                    <video id="myVideo" poster="{{ asset('images/about-us/logo_poster.jpg') }}" width="100%" height="546">
                </div>
                <div class="text-container">
                    <h2 class="experience-heading">A stress-free letting experience</h2>
                    <p>
                        Choosing to let with Urban Village gives you access to a whole host of benefits:
                    </p>
                    <ul class="benefits-list">
                        <li>Our 24/7 client care portal, giving you peace of mind and control throughout the tenancy</li>
                        <li>Highly trusted contractor partners</li>
                        <li>Pre-qualification and detailed referencing to find the best tenants</li>
                        <li>A highly experienced, in-house property manager to ensure your property is well looked after</li>
                        <li>Completely transparent, fair fees with no inflated prices on repairs or maintenance</li>
                        <li>Our team visit in person every six months rather than delegating to a third party</li>
                    </ul>
                </div>
            </div>
            

            <div class="support-section">
                <h2>Get the right support for your needs</h2>
                <p>Every landlord has varying levels of letting experience — so we let you take the driving seat in deciding what you need from us. Whether you want all-round property maintenance support, or just want a helping hand in sourcing the right tenants, we have your back.</p>
            
                <div class="service-box">
                    <h3>Premium Managed</h3>
                    <p>From the moment your tenants move in, we look after everything — from rental collection to property maintenance.</p>
                    <p>With our fully managed service, landlords get complete peace of mind that their tenants are looked after, their property is kept in good condition, and everything is taken care of, with an experienced property manager on hand and a network of trusted trade people.</p>
                    <p><strong>15% including VAT for our standard 12-month tenancy. No automatic renewal fees charged, which is a unique benefit with Urban Village. We also add free rental warranty and legal protection cover for the first 12 months for rent collection and managed services.</strong></p>
                    <div class="service-buttons">
                        <a href="#" class="btn service-btn">Book a Valuation</a>
                        <a href="#" class="btn service-btn whatsapp"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            
                <div class="service-box">
                    <h3>Let-Only Service</h3>
                    <p>Our team of letting experts will help you to market your property and find the perfect tenants — once the contracts are signed, you take the reins.</p>
                    <p>You will be in total control of your own property maintenance, rental collection, and tenancy, from start to finish.</p>
                    <p><strong>10% including VAT for our standard 12-month tenancy. No automatic renewal fees charged, which is a unique benefit with Urban Village.</strong></p>
                    <div class="service-buttons">
                        <a href="#" class="btn service-btn">Book a Valuation</a>
                        <a href="#" class="btn service-btn whatsapp"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <section class="our-story position-relative mt-5">
                <img src="{{ asset('images/about-us/logo.png') }}" alt="">
                <div class="container">
                    <h2 class="pt-0">Get a free property valuation</h2>
                    <div class="body-component">
                        <p>
                            The London property market is hugely competitive, which means getting your pricing right and pitching to the right audience is key. Aim too high with your asking price, and your property can go stale by sitting too long on the portals. Aim too low, and you could talk yourself out of a considerable profit. 
                        </p>
                        <p>
                            Pricing your property is a balancing act, which is why getting an accurate, up-to-date, and research-based valuation is critical. 
                        </p>
                        <p> 
                            Get in touch with our team to book your free valuation today.
                        </p>
                        <div class="button-container"> <!-- Wrapper to center the button -->
                            <a target="_blank" href="https://urban-village-homes.engage.epropservices.com/" class="btn custom-btn">
                                <b>Book Now</b>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="property-market-section container">
                <h2>What's happening in the property market?</h2>
                <div class="property-market-container pt-4">
                    <div class="property-card">
                        <!-- <img src="path_to_image1.png" alt="7 ways to maximise your outdoor space"> -->
                        <img src="{{ asset('images/about-us/urban-villlage-one.png') }}" alt="Suzanne Vincent" class="profile-image">
                        <div class="property-card-content">
                            <span class="category">HOME IMPROVEMENTS <span class="read-time">| 5 MINS READ</span></span>
                            <h3>7 ways to maximise your outdoor space</h3>
                            <br>
                            <div class="author">
                                <img src="{{ asset('images/about-us/MaskGroup15.png') }}" alt="Suzanne Vincent">
                                <span>Suzanne Vincent</span>
                                <a href="#" class="read-more">Read more...</a>
                            </div>
                        </div>
                    </div>
                    <div class="property-card">
                        <!-- <img src="path_to_image2.png" alt="The women etched in history: A tour of South London"> -->
                        <img src="{{ asset('images/about-us/urban-village_two.png') }}" alt="Suzanne Vincent" class="profile-image">
                        <div class="property-card-content">
                            <span class="category">LOCAL AREA <span class="read-time">| 5 MINS READ</span></span>
                            <h3>The women etched in history: A tour of South London</h3>
                            <div class="author">
                                <img src="{{ asset('images/about-us/MaskGroup15.png') }}" alt="Suzanne Vincent">
                                <span>Suzanne Vincent</span>
                                <a href="#" class="read-more">Read more...</a>
                            </div>
                        </div>
                    </div>
                    <div class="property-card">
                        <!-- <img src="path_to_image3.png" alt="5 spring cleaning dos and don'ts"> -->
                        <img src="{{ asset('images/about-us/urban-village_three.png') }}" alt="Suzanne Vincent" class="profile-image">
                        <div class="property-card-content">
                            <span class="category">HOME IMPROVEMENTS <span class="read-time">| 5 MINS READ</span></span>
                            <h3>5 spring cleaning dos and don'ts</h3>
                            <br>
                            <div class="author">
                                <img src="{{ asset('images/about-us/MaskGroup15.png') }}" alt="Suzanne Vincent">
                                <span>Suzanne Vincent</span>
                                <a href="#" class="read-more">Read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel -->
            <div class="hot logo-spinner" style="margin-bottom:-32px;">
            <div class="container">
                <div class="carousel-wrap">
                    <div class="owl-carousel" id="about-us-carousel">
                        <div class="item"><a href="https://safeagents.co.uk/" target="_blank"><img src="{{ asset('images/logo/safeagent_Logo_RGB.jpg') }}" class="img-responsive"></a></div>
                        <div class="item"><a href="https://www.guildproperty.co.uk" target="_blank"><img src="{{ asset('images/logo/guildproperty.jpg') }}" class="img-responsive"></a></div>
                        <div class="item"><a href="https://www.hometrack.com/uk" target="_blank"><img src="{{ asset('images/logo/hometrack.jpg') }}" class="img-responsive"></a></div>
                        <div class="item"><a href="https://www.primelocation.com" target="_blank"><img src="{{ asset('images/logo/primelocation.jpg') }}" class="img-responsive"></a></div>
                        <div class="item"><a href="https://www.rightmove.co.uk/" target="_blank"><img src="{{ asset('images/logo/rightmove.jpg') }}" class="img-responsive"></a></div>
                        <div class="item"><a href="https://www.zoopla.co.uk/" target="_blank"><img src="{{ asset('images/logo/zoopla.jpg') }}" class="img-responsive"></a></div>
                        <div class="item"><a href="https://www.onthemarket.com/" target="_blank"><img src="{{ asset('images/logo/onthemarket.jpg') }}" class="img-responsive" /></a></div>
                        <div class="item"><a href="https://www.urbanvillagehomes.com/" target="_blank"><img src="{{ asset('images/logo/urbanvillagehomes.jpg') }}" class="img-responsive" /></a></div>
                        <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/tenant.jpg') }}" class="img-responsive" /></a></div>
                        <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/national_approved.jpg') }}" class="img-responsive" /></a></div>
                    </div>
                </div>
                <div class="custom-nav">
                    <span class="custom-prev d-none d-md-block"><div data-v-90132dd2="" class="ruk-icon-arrow-left-thin-1-01"></div></span>
                    <span class="custom-next d-none d-md-block"><div data-v-90132dd2="" class="ruk-icon-arrow-right-thin-1-01"></div></span>
                </div>
            </div>
        </div>
            
            
            

        </div>
    </div>
</div>

@include('includes.footer')
