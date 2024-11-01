@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Waterloo'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Waterloo',
    'descriptions' => [
'Combining old and new, local and international, cultural and commercial – Waterloo has come to typify some of the most enviable elements of London living.',
'With one turn down a residential street, you can be completely transported from a busy city to a quiet local community. Whether you are on the hunt for a family home, a buy-to-let investment or shared rental accommodation, we can help find your dream Waterloo property that meets all your criteria.'
],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => ''
])

@include('partials.love-denmark-hill-section', [
    'imagePath' => 'waterloo.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Waterloo',
    'paragraphs' => [
'The beauty of Waterloo is in its ability to merge the local community feel with the convenience of a central London location. ',
'Just moments from the river, the area is home to numerous public gardens and green spaces, iconic theatres like the Old Vic, major attractions like the London Eye, and numerous restaurants and pubs that keep the area bustling.',
'Not to mention the fact that Waterloo is perfectly suited for commuters. You will find major train and tube stations just on your doorstep, as well as bus routes heading in every direction, and easy walks into the city centre with iconic views along the way.',
'Think Waterloo could be the place for you? Get in touch with our team to start your search.'
],
    'buttonLink' => '#',
    'buttonText' => 'Talk to our team'
])


@include('partials.free-valuation', [
   'imagePath' => 'waterloo.png',
    'imageAlt' => 'Company Logo',
    'heading' => 'Get a free property valuation',
    'paragraphs' => [
'The London property market is hugely competitive, which means getting your pricing right and pitching to the right audience is key. Aim too high with your asking price, and your property can go stale by sitting too long on the portals. Aim too low, and you could talk yourself out of a considerable profit.',
        'Pricing your property is a balancing act, which is why getting an accurate, up-to-date, and research-based valuation is critical.',
        'Get in touch with our team to book your free valuation today.'

    ],
    'buttonLink' => '#',
    'buttonText' => 'BOOK NOW'
])


@include('partials.area-guides')


@if(count($posts) > 0)
@include('partials.property-market', ['posts' => $posts])
@endif

@include('partials.logo-spinner')


@include('includes.footer')
