@include('includes.header')

<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">

<style>
    .work-with-us-section {
    display: flex; /* Flexbox for layout */
    justify-content: space-between; /* Space between text and image */
    align-items: center; /* Center align items vertically */
    background-color: white; /* Background color for the section */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Padding inside the section */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for slight elevation */
    margin: 20px 0; /* Margin for spacing above and below */
}

.work-with-us-content {
    max-width: 50%; /* Maximum width for text content */
}

.work-with-us-content h2 {
    color: #A22D6C; /* Heading color */
    font-size: 24px; /* Font size for the heading */
    margin-bottom: 15px; /* Margin below the heading */
}

.work-with-us-content p {
    font-size: 16px; /* Font size for paragraphs */
    line-height: 1.5; /* Line height for readability */
    color: #333; /* Text color */
    margin-bottom: 15px; /* Margin below paragraphs */
}

.work-with-us-content ul {
    list-style-type: none; /* Remove default list style */
    padding-left: 0; /* Remove left padding */
    margin-bottom: 0; /* Remove bottom margin */
}

.work-with-us-content ul li {
    font-size: 16px; /* Font size for list items */
    line-height: 1.5; /* Line height for list items */
    color: #6f6f6f; /* Text color */
    margin-bottom: 10px; /* Margin between list items */
    padding-left: 25px; /* Padding to align text */
    position: relative; /* Positioning for icon */
}

.work-with-us-content ul li::before {
    content: "🌿"; /* Add icon before list items */
    position: absolute; /* Absolute position for icon */
    left: 0; /* Align icon to the left */
    top: 0; /* Align icon vertically */
}

.work-with-us-image {
    max-width: 45%; /* Maximum width for image */
    margin-left: 20px; /* Margin between image and text */
}

.work-with-us-image img {
    width: 100%; /* Full width image */
    border-radius: 10px; /* Rounded corners   */
}

.quote-text {
    text-align: center;
    font: normal normal normal 35px/47px DM Serif Display;
letter-spacing: 0.84px;
color: #992785;
opacity: 1;
}


    </style>

    <div id="video_model" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close-btn">&times;</span>
                <h5>Urban Village Video</h5>
            </div>
            <div class="modal-body">
                <iframe title="Urban Village Reviews" style="width: 100% !important;" src="https://player.vimeo.com/video/361889922" height="374" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <img src="{{ asset('images/logo.jpg') }}" alt="logo" class="img-responsive" />
            </div>
        </div>
    </div>
    
    <div class="page-title-div"> Buy, sell, let or rent – we’re here at every step </div>
    <div class= "page-subtitle-div"> Your dedicated Independent Estate Agents in SE5 </div>
    <div class="featured" style="padding-top: 0px !important;">
        <div class="container">
            <div class="row featured_row move_up">
               
                @foreach($properties AS $k => $property)
                    <div class="col-lg-4">
                        <div class="listing">
                            <div class="listing_image">
                                <div class="listing_image_container">
                                    
                                    <a href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">
                                        <img src="{{ $property->image }}" alt="Urban Village Home - {{ $property->displayAddress }}">
                                    </a>

                                    
                            </div>
                                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    {{-- <div class="tag tag_house"><a href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">{{ $property->availability }}</a></div> --}}
                                    <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                                </div>
                                <div class="tag_price listing_price">{{ $property->availability }}</div>
                                {{-- <div class="tag_price listing_price">£ @if($property->rent) {{ number_format($property->rent).'/'.$property->rentFrequency }} @else {{ number_format($property->price) }} @endif</div> --}}
                            </div>
                            
                            <div class="listing_content">
                                <div class="prop_location listing_location align-items-start justify-content-start">
                                    
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ asset('images/icon_4_large.png') }}" alt="Icon Image">
                                        </div>
                                        
                                        <div class="col-md-10">
                                            
                                            <a class="pro-title" href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">{{ str_limit($property->displayAddress, $limit = 25, $end = '...') }}</a>
                                            <p class="pro-desc">{{ $property->propertyBedrooms }} Bedroom, {{ $property->propertyStyle }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <!-- <div class="container-fluid mt-5"> -->
        <section class="our-story position-relative mt-5">
            <img src="{{ asset('images/about-us/logo.png') }}" alt="">
            <div class="container">
                <h2 class="pt-0">We are Urban Village</h2>
                <div class="body-component">
                    <p>
                        <b>Your local Independent Estate Agents for South London properties.                   </p>
                        </br>
                    </br>
                    <p>
                        We know how challenging the London property market can be, which is why we pride ourselves on our dedication to customer service, fair and open fees, and local market knowledge and expertise to help you find exactly what you’re looking for. 
                    </br>
                    </br>Whether you want to sell, let, buy or rent – we’re here to support you at every step.
                    </p>
                </div>
            </div>
        </section>

        <div class="work-with-us-section">
            <div class="work-with-us-content">
                <h2>Why work with us?</h2>
                <p>We don’t just work for you, we work with you. Partner with our team of experts to benefit from:</p>
                <ul>
                    <li>Unrivalled market knowledge and local expertise</li>
                    <li>Free professional photoshoot to showcase your property</li>
                    <li>Exceptional, dedicated customer service</li>
                    <li>Coverage on all major property websites</li>
                </ul>
            </div>
            <div class="work-with-us-image">
                <img src="{{ asset('images/about-us/MaskGroup44.png') }}" alt="Team Image">
            </div>
        </div>
        

        <!-- Reviews Section -->
    <div class="reviews-section container-fluid">
        <h2>See what our customers say</h2>
        <div class="reviews-container pt-2 pt-lg-4">
            <div class="review-card main-review">
                <div class="review-content d-flex flex-column gap-3">
                    <div class="">
                        <h3>Excellent</h3>
                        <!-- stars -->
                        <div data-v-5158ce97="" data-v-90132dd2="" class="starCollection Excellent-stars d-flex justify-content-center gap-2 pt-1">
                            <div class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div class="ReviewStar ruk-icon-percentage-star--75"></div>&nbsp;
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1 mt-0 average-reviews">
                        <span>4.9 average</span>
                        <span>207 reviews</span>
                    </div>
                </div>
                <div class="reviews-io d-flex justify-content-center mt-4">
                <div class="review-star position-relative"><img src="{{ asset('images/about-us/review-star.png') }}" alt=""></div>
                <div class="ReviewStar ruk-icon-percentage-star--77 position-relative"></div>&nbsp;
                    <!-- <img src="path_to_reviews_io_logo.png" alt="Reviews.io"> -->
                </div>
            </div>
            <div class="review-card" style="background-color: #C6BEC426; border: 1px solid #992785;">
                <div class="d-flex pb-2">
                    <h4>Ruth Mackie</h4>
                    <div class="stars ml-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved - I didn’t have any major ones! I was very happy with my part-furnished flat while I was searching for a permanent home of my own. I can recommend Urban Village whole-heartedly to any prospective tenant.</p>
            </div>
            <div class="review-card">
                <div class="d-flex pb-2">
                    <h4>Ruth Mackie</h4>
                    <div class="stars ml-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved - I didn’t have any major ones! I was very happy with my part-furnished flat while I was searching for a permanent home of my own. I can recommend Urban Village whole-heartedly to any prospective tenant.</p>
            </div>
            <div class="review-card">
                <div class="d-flex pb-2">
                    <h4>Ruth Mackie</h4>
                    <div class="stars ml-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved - I didn’t have any major ones! I was very happy with my part-furnished flat while I was searching for a permanent home of my own. I can recommend Urban Village whole-heartedly to any prospective tenant.</p>
            </div>
            <div data-v-90132dd2="" class="ruk-icon-arrow-right-thin-1-01"></div>
        </div>
    </div>



<br/>


<div class="quote-text">
    “The level of service is brilliant.”
</div>

<section class="our-story position-relative mt-5">
    <img src="{{ asset('images/about-us/logo.png') }}" alt="">
    <div class="container">
        <h2 class="pt-0">Book a free valuation</h2>
        <div class="body-component">
            
            <p>
                Do you know what your property is really worth? Whether you’re looking to sell or let, or you’re just curious, book a free valuation with one of our teams today.
            </p>
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
<script>
    // Get the modal
    var modal = document.getElementById("video_model");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-btn")[0];

    // Get the button that opens the modal
    function getFunction() {
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
    
    $('#mortgage_submit').on('click',function(){

        var mortgage_price = 0;
        var down_payment = 0;
        var mortgage_term = 1;
        var mortgage_interest = 0;

        mortgage_price = document.getElementById('ma').value;
        down_payment = document.getElementById('dp').value;
        mortgage_term = document.getElementById('mt').value;
        mortgage_interest = document.getElementById('ir').value;

        var mortgage_term_months = mortgage_term * 12;
        var mortgage_value = mortgage_price - down_payment;
        var mortgage_interest_final = mortgage_interest / 1200;
        var final_monthly = mortgage_value*(mortgage_interest_final * Math.pow((1 + mortgage_interest_final), mortgage_term_months))/(Math.pow((1 + mortgage_interest_final), mortgage_term_months) - 1);
        final_monthly = +(final_monthly.toFixed(2));
        var total_repayment = final_monthly * mortgage_term_months;

        $('#m_amount').html(mortgage_value.toFixed(2));
        $('#m_years').html(mortgage_term);
        $('#m_interest').html(mortgage_interest);
        $('#m_payment').html(final_monthly);
        $('#m_total').html(total_repayment);

        $("#mortgage_div").show();
    });
    
    
    //========= Stamp Duty calculator starts ========

    $.ajaxSetup({
        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#stamp_submit").click(function(e){
        e.preventDefault();

        var value = $("input[name=value]").val();
        var country = $("input[name=country]:checked").val();
        var additional = $("input[name=additional]:checked").val();

        $.ajax({

            type:'POST',
            url:'/calculate-stamp-duty',

            data:{
                "_token": "{{ csrf_token() }}",
                "value":value,
                "country":country,
                "additional":additional
            },

            success:function(data){
                $("#error-message").hide();

                var effective_rate  = 0.0;
                var higher_rates    = 'Not Applicable';

                if(data.additional_rate_used == true){
                    higher_rates    = 'Applicable';
                }

                effective_rate = ((data.sdlt_payable/value) * 100).toFixed(2);

                //set values to the output
                $('#tax_payable').html(data.sdlt_payable.toFixed(2));
                $('#effective_rate').html(effective_rate);
                $('#higher_rates').html(higher_rates);
            },

            error: function(xhr, status, error){
                $("#error-message").toggle();
            }

        });



    });

    //========= Stamp Duty calculator end ========
</script>
<style>
    #selling_banner {
    display: none;
}

@media screen and (min-width: 768px) {
    #selling_banner {
        display: block;
    }
}
</style>

@include('includes.footer')
