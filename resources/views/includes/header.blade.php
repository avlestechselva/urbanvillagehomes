<!DOCTYPE html>
<html lang="en">
<head>
    <title>Urban Village Homes | {{ isset($page_title) ? $page_title : '' }}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : 'Urban Village Homes Estate Agents and Letting Agents in Camberwell, Brixton, SE5' }}" />
    <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'Urban Village Homes Estate Agents and Letting Agents in Camberwell, Brixton, SE5' }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://www.urbanvillagehomes.com" />
    <!-- Favicon -->
    <link href="{{ asset('favicon.png') }}" rel="icon" type="image/png" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.3.4/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.3.4/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css?t=3') }}">
    <link rel="stylesheet" href="{{ asset('css/extra/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.cookiebar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/customs.css?t=5') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    @if(isset($css_files))
        @foreach($css_files AS $k => $css_file)
            <link rel="stylesheet" type="text/css" href="{{ asset('css/'.$css_file.'.css') }}">
        @endforeach
    @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PJPJBXD');</script>
    <!-- End Google Tag Manager -->
    <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "Organization",
          "name" : "Urban Village Homes",
         "url" : "https://www.urbanvillagehomes.com/",
         "sameAs" : [
           "https://twitter.com/UVHomes1",
           "https://www.facebook.com/urbanvillagehomes",
           "https://www.instagram.com/urbanvillagehomes/"
           ],
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "121 Denmark Hill",
            "addressRegion": "London",
            "postalCode": "SE5 8EN",
            "addressCountry": "UK"
          }
        }
    </script>
    <!-- End FB Tag -->
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '1874803346125046'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=1874803346125046&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <style>
        /* Modal styles */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            background-color: rgba(0,0,0,0.5); 
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border-radius: 8px;
            width: 50%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJPJBXD"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Modal -->
    <div id="popupModal-valuation" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Property Valuation Form</h2>
            <form>
                <label for="propertyAddress">Property Address</label>
                <input type="text" id="propertyAddress" name="propertyAddress"><br><br>
                <label for="propertyPostcode">Property Postcode</label>
                <input type="text" id="propertyPostcode" name="propertyPostcode"><br><br>
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName"><br><br>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email"><br><br>
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone"><br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <nav class="classy-navbar justify-content-between mt-3" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="width: 200px; height: auto;">
                </a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#" class="text-black">SALES</a></li>
                            <li><a href="#" class="text-black">LETTINGS</a></li>
                            <li><a href="{{ url('new-aboutus') }}"> About Us</a></li>
                            <li><a href="{{ url('blog') }}" class="text-black">BLOG</a></li>
                            <li><a href="{{ url('contact') }}" class="text-black">CONTACT</a></li>
                            <li><a href="#" class="BOOK-VALUATION text-white ml-4">BOOK A VALUATION</a></li>
                        </ul>

                        <!-- Search Form -->
                        <div class="south-search-form">
                            <form action="#" method="post">
                                <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>

    <script>
        // Get the modal
        var modalex = document.getElementById("popupModal-valuation");

        // Get the button that opens the modal
        var link = document.querySelector(".BOOK-VALUATION");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        link.onclick = function(event) {
            debugger;
            event.preventDefault(); // Prevents following the link
            modalex.style.display = "block"; // Show the modal
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modalex.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            debugger;
            if (event.target == modal) {
                modalex.style.display = "none";
            }
        }
    </script>
</body>
</html>
