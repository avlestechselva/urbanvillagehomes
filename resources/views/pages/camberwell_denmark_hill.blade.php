@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->
<style>
    .content-image-section {
    display: flex; /* Flexbox for layout */
    justify-content: space-between; /* Space between text and image */
    align-items: flex-start; /* Align items to the top */
    padding: 20px; /* Padding around the content */
    margin: 0 auto; /* Center align section horizontally */
    max-width: 1200px; /* Max width for content section */
}

.content-text {
    max-width: 60%; /* Maximum width for text content */
    margin-right: 20px; /* Margin between text and image */
}

.subheading {
    color: #A22D6C; /* Subheading color */
    font-size: 20px; /* Font size for subheading */
    font-weight: normal; /* Normal font weight */
    margin-bottom: 10px; /* Margin below subheading */
}

.main-heading {
    color: #992785; /* Main heading color */
    font-size: 48px; /* Font size for main heading */
    font-weight: normal; /* Normal font weight */
    margin-bottom: 20px; /* Margin below main heading */
    font-family: 'DM Serif Display', serif; /* Font family for main heading */
}

.description {
    font-size: 16px; /* Font size for description text */
    line-height: 1.6; /* Line height for readability */
    color: #333; /* Text color */
    margin-bottom: 20px; /* Margin below paragraphs */
}

.button-container {
    display: flex; /* Flexbox for buttons */
    gap: 20px; /* Space between buttons */
    margin-top: 20px; /* Margin above the buttons */
}

.btn {
    background-color: #f7f7f7; /* Button background color */
    color: #333; /* Button text color */
    padding: 10px 20px; /* Padding inside buttons */
    border-radius: 25px; /* Rounded corners for buttons */
    border: 2px solid #f0f0f0; /* Button border */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Bold text */
    display: inline-block; /* Make it behave like a button */
    transition: background-color 0.3s ease; /* Smooth transition on hover */
}

.btn:hover {
    background-color: #eaeaea; /* Hover background color */
}

.content-image {
    max-width: 35%; /* Maximum width for the image container */
    border-radius: 10px; /* Rounded corners for the image */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for the image */
}

.image-placeholder {
    width: 100%; /* Full width image */
    height: auto; /* Maintain aspect ratio */
    border-radius: 10px; /* Rounded corners for the image */
}

.love-denmark-hill-section {
    display: flex; /* Use Flexbox for layout */
    justify-content: space-between; /* Space between the image and text */
    align-items: center; /* Center items vertically */
    background-color: #1A1033; /* Background color for the section */
    padding: 40px; /* Padding around the section */
    border-radius: 20px; /* Rounded corners for the section */
    max-width: 1200px; /* Maximum width for the section */
    margin: 0 auto; /* Center the section horizontally */
}

.image-container {
    flex: 1; /* Take up 50% of the width */
    margin-right: 20px; /* Margin between the image and text */
}

.image {
    width: 100%; /* Full width for the image */
    border-radius: 20px; /* Rounded corners for the image */
}

.text-container {
    flex: 1; /* Take up 50% of the width */
    background-color: white; /* Background color for text container */
    padding: 30px; /* Padding inside the text container */
    border-radius: 20px; /* Rounded corners for the text container */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
}

.text-container h2 {
    color: #A22D6C; /* Heading color */
    font-size: 28px; /* Font size for the heading */
    margin-bottom: 15px; /* Margin below heading */
}

.text-container p {
    color: #333; /* Paragraph text color */
    font-size: 16px; /* Font size for paragraphs */
    line-height: 1.6; /* Line height for readability */
    margin-bottom: 15px; /* Margin below paragraphs */
}

.button-container {
    text-align: center; /* Center the button */
    margin-top: 20px; /* Margin above the button */
}

.valuation-btn {
    background-color: #e11959; /* Button background color */
    color: white; /* Button text color */
    padding: 12px 24px; /* Button padding */
    border-radius: 25px; /* Rounded corners for the button */
    text-decoration: none; /* Remove underline from the link */
    font-weight: bold; /* Bold text */
    display: inline-block; /* Display as inline block */
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

.valuation-btn:hover {
    background-color: #d41653; /* Hover color */
}

.area-guides-section {
    text-align: center; /* Center-aligns the text */
    padding: 20px; /* Padding around the section */
    margin: 0 auto; /* Centers the section horizontally */
    max-width: 800px; /* Sets a maximum width for the content */
}

.area-guides-heading {
    color: #A22D6C; /* Heading color */
    font-size: 32px; /* Font size for the heading */
    margin-bottom: 10px; /* Margin below the heading */
    font-family: 'DM Serif Display', serif; /* Font family for the heading */
    font-weight: normal; /* Normal font weight */
}

.area-guides-subtitle {
    color: #333; /* Subtitle text color */
    font-size: 18px; /* Font size for the subtitle */
    line-height: 1.5; /* Line height for better readability */
    margin: 0; /* No margin to keep it tight to the heading */
}


    </style>
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Camberwell And Denmark Hill</li>
    </ol>
</div>

<div class="content-image-section">
    <div class="content-text">
        <h3 class="subheading">Estate & Letting Agents in</h3>
        <h1 class="main-heading">Denmark Hill</h1>
        <p class="description">
            Denmark Hill – the place we call home. Our office has sat at the heart of Camberwell for some time now, meaning we know the area inside and out. We can advise you on all the best cafes, restaurants, local schools, and even the best properties.
        </p>
        <p class="description">
            Whether you’re on the hunt for a family home, a buy-to-let investment or a shared rental accommodation, we can help you find the perfect property around Denmark Hill to meet your criteria.
        </p>
        <p>

        </p>
        <div class="button-container">
            <a href="#" class="btn property-btn">Properties for sale</a>
            <a href="#" class="btn property-btn">Properties for rent</a>
        </div>
    </div>
    <div class="content-image">
        <iframe width="100%" height="355" class="set-phone-height" src="https://www.youtube.com/embed/paW1T11FAZc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="love-denmark-hill-section">
    <div class="image-container">
        <img src="your-image-path.jpg" alt="Denmark Hill Image" class="image">
    </div>
    <div class="text-container">
        <h2>Why we love Denmark Hill</h2>
        <p>
            Denmark Hill is perfectly positioned for those seeking an inner-London postcode with easy access to the city centre, without sacrificing the open green spaces and community vibe.
        </p>
        <p>
            From period properties with large gardens to an abundance of luscious green parks like Ruskin Park, Burgess Park and more – Denmark Hill has something for everyone. It is also home to a range of excellent schools and colleges, making it an ideal location for families or buy-to-let investors.
        </p>
        <p>
            Thanks to the new Cross-Rail trainline, it’s just a short journey from central London, placing it right on the commuter belt for those working in city centre.
        </p>
        <p>
            Think Denmark Hill could be the place for you? Get in touch with our team to start your search.
        </p>
        <div class="button-container">
            <a href="#" class="btn valuation-btn">Book a valuation</a>
        </div>
    </div>
</div>

<section class="our-story position-relative my-2 my-lg-5 valuation position-relative">
    <img src="http://127.0.0.1:8000/images/about-us/logo.png" alt="">
    <h2 class="text-white position-relative">Get a free property valuation</h2>
    <div class="body-component text-center mx-0">
        <p>
            The London property market is hugely competitive, which means getting your pricing right and pitching to the right audience is key. Aim too high with your asking price, and your property can go stale by sitting too long on the portals. Aim too low, and you could talk yourself out of a considerable profit. 
        </p>
        <p>
            Pricing your property is a balancing act, which is why getting an accurate, up-to-date, and research-based valuation is critical.
        </p>
        <p>
            Get in touch with our team to book your free valuation today.
        </p>
        <div class="d-flex justify-content-center pt-4 pt-lg-5">
            <a href="#" class="book-now text-white d-flex justify-content-center align-items-center">BOOK NOW</a>
        </div>
    </div>
</section>

<div class="area-guides-section">
    <h2 class="area-guides-heading">Area guides</h2>
    <p class="area-guides-subtitle">
        We sell and let homes all across London's cityscape, discover the areas we cover
    </p>
</div>

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

@include('includes.footer')
