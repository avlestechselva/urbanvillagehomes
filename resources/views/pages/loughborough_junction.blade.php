@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Loughborough Junction'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Loughborough Junction',
    'descriptions' => [
'Loughborough Junction is no longer just a crossroads with a few shops and a train station. Today, it has become a vibrant area of its own, with artist studios, pop-up cafes, horse-riding stables and even a fresh produce farm right on its doorstep.',
'With three of our team being local residents of the area, we know Loughborough Junction inside and out. Whether you are on the lookout for a family home, a buy-to-let investment or shared rental accommodation, we can help you find a property that meets all your criteria.'
],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => ''
])

@include('partials.love-denmark-hill-section', [
   'imagePath' => 'loughborough.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Loughborough Junction',
    'paragraphs' => [
'There is something for everyone in Loughborough Junction. Looking for a warm and friendly community that buzzes with creativity? Want an abundance of outdoor spaces? Need good schools and family-friendly local amenities? Loughborough Junction has it all.',
'Just minutes from Loughborough Junction you will find the renowned Ruskin Park – housing a children’s play area, sports facilities, a beautiful flower garden and much-loved bandstand that becomes a firm favourite in the summer months.',
'Both Brixton and Camberwell are within easy walking distance, offering fantastic options for café culture and foody nights out, and thanks to the area’s excellent transport links, you can find yourself on the steps of the Tate Modern in just 10 minutes.',
'Between its village community atmosphere and proximity to central London, the area is hugely desirable for both tenants and buyers alike.'
],
    'buttonLink' => '#',
    'buttonText' => 'Talk to our team'
])


@include('partials.free-valuation', [
    'imagePath' => 'http://127.0.0.1:8000/images/about-us/logo.png',
    'imageAlt' => 'Company Logo',
    'heading' => 'Get a free property valuation',
    'paragraphs' => [
        'The London property market is hugely competitive, which means getting your pricing right and pitching to the right audience is key. Aim too high with your asking price, and your property can go stale by sitting too long on the portals. Aim too low, and you could talk yourself out of a considerable profit.',
        'Pricing your property is a balancing act, which is why getting an accurate, up-to-date, and research-based valuation is critical.',
        'Get in touch with our team to book your free valuation today.'
    ],
])


@include('partials.area-guides')


@if(count($posts) > 0)
@include('partials.property-market', ['posts' => $posts])
@endif

@include('partials.logo-spinner')


@include('includes.footer')
