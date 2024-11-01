@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Stockwell'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Stockwell',
    'descriptions' => [
'If it’s good enough for the likes of Vincent Van Gogh, David Bowie, Roger Moore, Will Self and Joanna Lumley, it’s good enough for us! Nestled in the borough of Lambeth in South West London, Stockwell has been home to a number of well-known faces. Its good transport links, fantastic local amenities and rich history make it a hugely popular area to live, and it’s easy to see why.',
'Whether you’re on the hunt for a family home, a buy-to-let investment, or shared rental accommodation, we can help you find your dream Stockwell property that meets all your criteria.'
],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => ''
])

@include('partials.love-denmark-hill-section', [
    'imagePath' => 'stockwell.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Stockwell',
    'paragraphs' => [
'A diverse and vibrant area, Stockwell has been described as one of South London’s up-and-coming neighbourhoods. It’s home to a hot pot of highly rated restaurants, from Ethiopian to African, Peruvian and Mediterranean, as well as a number of celebrated cafes, bars, and pubs.',
'But if food isn’t one of your top criteria, Stockwell has plenty more to offer. With easy access to both the Victoria and Northern lines, it’s just a short journey from central London, and its close proximity to a range of high performing primary and secondary schools make it the perfect location for your next family home.',
'Slade Gardens and Larkhall Park are just a short walk away, leaving playgrounds, basketball and tennis courts and football pitches right on your doorstep.',
'Think Stockwell could be the place for you? Get in touch with our team to start your search.'
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
    'buttonLink' => '#',
    'buttonText' => 'BOOK NOW'
])


@include('partials.area-guides')


@if(count($posts) > 0)
@include('partials.property-market', ['posts' => $posts])
@endif

@include('partials.logo-spinner')


@include('includes.footer')
