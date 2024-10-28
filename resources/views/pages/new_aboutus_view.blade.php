@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/blog.jpg') }}" alt="banner" />
</header>-->

<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">


<!-- <div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
    </ol>
</div> -->
<div class="pt-3 pt-lg-5">
    <h1 class="about-us m-0">About us </h1>
    <div class="industry-experience">Over 32 years of industry expertise</div>
    <div class="d-flex justify-content-center">
        <div class="col-6  d-flex justify-content-center">
            <div class="row  accommodation home-accommodation">
                    
                <video width="100%" height="546" controls loop muted style="display: block; margin: 20px auto;" poster="{{ asset('images/about-us/logo_poster.jpg') }}">
                    <source src="{{ asset('videos/AboutUs_UV.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid mt-5"> -->
    <section class="our-story position-relative mt-5">
        <img src="{{ asset('images/about-us/logo.png') }}" alt="">
        <div class="container">
            <h2 class="pt-0">Our story</h2>
            <div class="body-component">
                <p>
                    <b>When Urban Village was first established, one thing was set in stone: we were not going to be your stereotypical estate agents.</b>
                    Your property journey should be an exciting time – not one that is burdened with stress and unnecessary pressures. We built a team that is dedicated to ensuring your property journey is as seamless, hassle-free and successful as possible.
                </p>
                <p>
                    Following more than 20 years of experience in the estate agency world, our founder, Suzanne Vincent, set up her own agency in 2015 in South London, focusing on progressive growth by exceptional performance. Today, we pride ourselves on our bespoke service you can only get from an independently owned business.
                </p>
            </div>
        </div>
    </section>
    <!-- </div> -->
    <div class="container container-group text-center">
        <img src="{{ asset('images/about-us/MaskGroup44.png') }}" class="group-photo"> </img>
    </div>
    <!--  -->
    <section>
        <!-- 1 -->
        <div class="container pt-0">
            <div class="profile-card">
                <img src="{{ asset('images/about-us/MaskGroup14.png') }}" alt="Suzanne Vincent" class="profile-image">
                <div class="profile-info d-flex flex-column justify-content-center align-items-start">
                    <h3 class="mb-2">Suzanne Vincent</h3>
                    <p>Suzanne is our very own estate agency guru. She first started in the industry in 1992 by complete accident, following a misunderstanding at a job interview. Little did she know that it would be the catalyst for a lifelong passion! Fast forward 33 years, and she set up her own independent estate agency, Urban Village, in 2015. Today, she’s all about delivering bespoke, trusted experiences for our clients, with fair and transparent fees and dedicated customer service. When she’s not wowing our clients, you’ll likely find her horse riding or walking her dog.</p>
                </div>
            </div>

            <div class="profile-card mt-4">
                <div class=" profile-info order-2 order-lg-1 border-change d-flex flex-column justify-content-center align-items-start">
                    <h3 class="color-change mb-2">Sarah Trevett</h3>
                    <p>Sarah is no newbie when it comes to estate agency. After more than seven years in the industry, she manages our dynamic, forward-thinking team, helping us to deliver personalised experiences for all our clients. She takes genuine pleasure in engaging with customers and guiding them throughout their property journeys. Outside of work, Sarah is a gym fanatic, foodie, and proud owner of our resident cockapoo, Reggie.</p>
                </div>
                <img src="{{ asset('images/about-us/MaskGroup15.png') }}" alt="Sarah Trevett" class="profile-image order-lg-2">
            </div>

        </div>
        <!-- 2 -->
        <div class="container pt-0">
            <div class="profile-card">
                <img src="{{ asset('images/about-us/kate morrison.png') }}" alt="Suzanne Vincent" class="profile-image">
                <div class="profile-info d-flex flex-column justify-content-center align-items-start">
                    <h3 class="mb-2">Kate Morrison</h3>
                    <p>Kate is an experienced Property Manager with seven years in the industry. Her approach to troubleshooting issues with tenants and quickly resolving them never fails to impress our landlords. She offers sound advice and has a deep understanding of how things work and how to prevent issues escalating. Her calm, friendly nature and impeccable organisation skills are a winning formula for us… Our secret weapon!</p>
                </div>
            </div>

            <div class="profile-card mt-4">
                <div class=" profile-info order-2 order-lg-1 border-change d-flex flex-column justify-content-center align-items-start">
                    <h3 class="color-change mb-2">Julie Simpson</h3>
                    <p>Julie has a unique eye for detail. She takes care of our tenancies, ensuring that they all comply with current legislation. She inspects the properties regularly ensuring that fire safety is adhered to, from smoke alarms to fire blankets to HMO licencing compliance - she is very thorough. She has a knack for quickly spotting any issues, creating bespoke reports for landlords so we can deal with even the smallest repairs before they become a problem. Think of her as our very own Miss Marple!</p>
                </div>
                <img src="{{ asset('images/about-us/julie-simpson.png') }}" alt="Sarah Trevett" class="profile-image order-lg-2">
            </div>

        </div>
        <!-- 3 -->
        <div class="container pt-0">
            <div class="profile-card">
                <img src="{{ asset('images/about-us/natalie-elliott.png') }}" alt="Suzanne Vincent" class="profile-image">
                <div class="profile-info d-flex flex-column justify-content-center align-items-start">
                    <h3 class="mb-2">Natalie Elliott</h3>
                    <p>With a background as an entertainment agent and a personal love for all things interior and home-related, the transition into property sales was an easy one for Natalie. Born and raised in South London, she knows the area inside and out. When she’s not impressing her clients with her local knowledge and dedicated customer service, you’ll likely find her relaxing on a beach with a glass of wine in the Mediterranean, or spending time with her two beautiful daughters.</p>
                </div>
            </div>

            <div class="profile-card mt-4">
                <div class="profile-info order-2 order-lg-1 border-change d-flex flex-column justify-content-center align-items-start">
                    <h3 class="color-change mb-2">Tyler Connor</h3>
                    <p>Tyler might be new to city life, but that’s precisely what makes her such a valuable addition to the team – she knows all too well just how strong the draw of South London life can be! After working in estate agency for four years in a small Oxfordshire town, she gave into temptation and moved to Brixton to enjoy the city life. Now, she spends her time helping others find their dream London homes. When not at work, you’ll likely find her with her nose buried in a book, accompanied by a fruity cocktail and some camembert nibbles.</p>
                </div>
                <img src="{{ asset('images/about-us/tyler-connor.png') }}" alt="Sarah Trevett" class="profile-image order-lg-2">
            </div>

        </div>
    </section>


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
                    <h4>Rosie - Verified Reviewer</h4>
                    <div class="stars ml-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>Urban Village Camberwell were excellent from start to finish. When I left London
                    they let my property for over 2 years and then went on to sell it for me in March
                    2024. Natalie was professional, prompt, with excellent communication and I loved
                    that she was so genuine. I really felt like I could trust her and the team, which made
                    a real difference to my experience. Thankyou so much for your hard work on my
                    behalf! I would highly recommended Urban Village for renting, buying and selling. 5
                    stars </p>
            </div>
            <div class="review-card">
                <div class="d-flex pb-2">
                    <h4>Duyen Nguyen - Verified Reviewer</h4>
                    <div class="stars ml-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>I am very satisfied and happy with the customer services provided by Tyler Connor.
                    I am totally impressed with her patience and friendly approaches to answer my
                    queries, especially to work with the seller to answer my concerns promptly. As a
                    landlord who has been dealing with a number of estate agents, and from the
                    experience working with Tyler Connor at Urban Village from the 1st viewing to the
                    completion stage of the purchase, I consider Tyler as one the best estate agent staff
                    and would not hesitate to ask for her assistance in the future if I can find a possible
                    purchase with Urban Village in the future.</p>
            </div>
            <div class="review-card">
                <div class="d-flex pb-2">
                    <h4>Dan - Verified Reviewer</h4>
                    <div class="stars ml-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>We bought our house through Urban Village and found the whole process with them to be straightforward. They communicate clearly, reply to messages promptly and were always friendly and helpful. In our experience of buying and selling, Urban
                    Village have been the best we have come across. Special thanks to Natalie for being so easy to work with.</p>
            </div>
            <div data-v-90132dd2="" class="ruk-icon-arrow-right-thin-1-01 green-chevron">  <img src="{{ asset('images/icons/green-chevron.png') }}" ></div>
        </div>
    </div>


    <!-- Our work in the community -->
    <div class="reviews-section container-fluid our-community">
        <h2>Our work in the community</h2>
        <div class="reviews-container pt-2 pt-lg-4 row d-flex justify-content-center row">
           <div class="col-6" style="display: contents;">
           <iframe width="100%" height="591" class=" set-phone-height" src="https://player.vimeo.com/video/328369211"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>

        </div>
    </div>



    <!-- Book a free valuation -->
    <section class="our-story position-relative my-2 my-lg-5 valuation position-relative">
        <img src="{{ asset('images/about-us/logo.png')  }}" alt="">
        <h2 class="text-white position-relative">Book a free valuation</h2>
        <div class="body-component text-center mx-0">
            <p>
                Do you know what your property is really worth? Whether you’re looking to sell or let, or you’re just curious, book a free valuation with one of our teams today.
            </p>
            <div class="d-flex justify-content-center pt-4 pt-lg-5">
                <a href="#" class="book-now text-white d-flex justify-content-center align-items-center">BOOK NOW</a>
            </div>
        </div>
    </section>

    
    @include('partials.property-market', ['posts' => $posts])
    @include('partials.companies')
   
</div>
@include('includes.footer')
