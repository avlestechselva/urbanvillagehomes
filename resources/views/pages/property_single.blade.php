@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
/* Modern CSS Variables */
:root {
    --primary-color: #982585;      /* Dark Magenta */
    --primary-hover: #9A2386;     /* Slightly different Dark Magenta */
    --success-color: #404040;     /* Onyx for success/accent */
    --text-primary: #000000;      /* Black for primary text */
    --text-secondary: #404040;    /* Onyx for secondary text */
    --text-light: #666666;        /* Lighter gray from black variations */
    --border-color: #e5e7eb;      /* Keep light border */
    --bg-light: #f9fafb;          /* Keep light background */
    --bg-white: #ffffff;          /* Keep white background */
    --shadow-sm: 0 1px 2px 0 rgba(152, 37, 133, 0.05);    /* Magenta tint */
    --shadow-md: 0 4px 6px -1px rgba(152, 37, 133, 0.1), 0 2px 4px -1px rgba(152, 37, 133, 0.06);
    --shadow-lg: 0 10px 15px -3px rgba(152, 37, 133, 0.1), 0 4px 6px -2px rgba(152, 37, 133, 0.05);
    --radius-sm: 6px;
    --radius-md: 8px;
    --radius-lg: 12px;
}

/* Base Styles */
body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: var(--text-primary);
    line-height: 1.6;
}

.property-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header Section */
.property-header {
    background: linear-gradient(135deg, var(--bg-white) 0%, #f8fafc 100%);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    padding: 20px 24px;
    margin-bottom: 24px;
    border: 1px solid var(--border-color);
    position: relative;
    overflow: hidden;
}

.property-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-color), var(--success-color));
}

.header-content {
    position: relative;
    z-index: 1;
}

.property-main-info {
    max-width: 800px;
}

.property-meta {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 12px;
}

.property-icon {
    width: 40px;
    height: 40px;
    background: var(--bg-light);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow-sm);
}

.property-icon-img {
    width: 24px;
    height: 24px;
    object-fit: contain;
}

.availability-badge {
    display: inline-flex;
    align-items: center;
    padding: 4px 12px;
    background: var(--success-color);
    color: white;
    font-size: 0.75rem;
    font-weight: 600;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 4px rgba(16, 185, 129, 0.3);
}

.property-price {
    font-size: 2rem;
    font-weight: 800;
    background: linear-gradient(135deg, var(--primary-color), #982585);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 8px;
    line-height: 1.2;
}

.property-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 10px;
    text-decoration: none;
    line-height: 1.3;
    transition: color 0.2s ease;
}

.property-title:hover {
    color: var(--primary-color);
    text-decoration: none;
}

.property-details {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 6px;
    color: var(--text-secondary);
    font-size: 0.95rem;
    font-weight: 500;
}

.detail-item i {
    color: var(--primary-color);
    font-size: 1rem;
}

.detail-separator {
    color: var(--text-light);
    font-weight: 600;
}

/* Image Gallery */
.image-gallery {
    background: var(--bg-white);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    margin-bottom: 24px;
}

.gallery-main img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.gallery-controls {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background-color 0.2s;
}

.gallery-controls:hover {
    background: rgba(0, 0, 0, 0.7);
}

.gallery-prev {
    left: 16px;
}

.gallery-next {
    right: 16px;
}

.gallery-dots {
    padding: 16px;
    text-align: center;
    background: var(--bg-light);
}

.gallery-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--border-color);
    border: none;
    margin: 0 4px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.gallery-dot.active,
.gallery-dot:hover {
    background: var(--primary-color);
}

/* Navigation Tabs */
.property-nav {
    display: flex;
    gap: 8px;
    margin-bottom: 32px;
    flex-wrap: wrap;
    justify-content: center;
}

.nav-item {
    flex: 1;
    min-width: 120px;
    max-width: 180px;
}

.nav-link {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 16px;
    background: var(--bg-white);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    text-decoration: none;
    color: var(--text-secondary);
    font-size: 0.875rem;
    font-weight: 500;
    transition: all 0.2s;
    box-shadow: var(--shadow-sm);
}

.nav-link:hover {
    background: var(--primary-color);
    color: white;
    text-decoration: none;
    transform: translateY(-1px);
    box-shadow: var(--shadow-md);
}

.nav-icon {
    width: 20px;
    height: 20px;
}

/* Content Sections */
.content-section {
    background: var(--bg-white);
    border-radius: var(--radius-lg);
    padding: 24px;
    margin-bottom: 24px;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
}

.section-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 16px;
    padding-bottom: 8px;
    border-bottom: 2px solid var(--border-color);
}

.description-text {
    color: var(--text-secondary);
    line-height: 1.7;
    font-size: 0.95rem;
}

/* Contact Info */
.contact-info {
    color: var(--text-secondary);
    line-height: 1.8;
    font-size: 0.9rem;
}

.contact-info strong {
    color: var(--text-primary);
}

/* Property Features */
.features-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.features-list li {
    padding: 8px 0;
    padding-left: 24px;
    position: relative;
    color: var(--text-secondary);
    font-size: 0.9rem;
    border-bottom: 1px solid var(--border-color);
}

.features-list li:last-child {
    border-bottom: none;
}

.features-list li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: var(--success-color);
    font-weight: 600;
}

/* Resources Grid */
.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 24px;
}

.resource-card {
    background: var(--bg-white);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    padding: 20px;
    text-decoration: none;
    transition: all 0.2s;
    box-shadow: var(--shadow-sm);
}

.resource-card:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
    text-decoration: none;
    border-color: var(--primary-color);
}

.resource-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
}

.resource-icon {
    width: 40px;
    height: 40px;
    background: var(--primary-color);
    color: white;
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.resource-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text-primary);
    margin: 0;
}

.resource-description {
    color: var(--text-secondary);
    font-size: 0.875rem;
    margin: 0;
}

/* Virtual Tour */
.virtual-tour {
    background: var(--bg-white);
    border-radius: var(--radius-lg);
    padding: 24px;
    margin-bottom: 24px;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
}

.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    border-radius: var(--radius-md);
}

.embed-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: var(--radius-md);
}

/* Contact Form */
.contact-form-section {
    background: var(--bg-light);
    padding: 48px 0;
    margin-top: 48px;
}

.form-container {
    background: var(--bg-white);
    border-radius: var(--radius-lg);
    padding: 32px;
    box-shadow: var(--shadow-md);
    border: 1px solid var(--border-color);
}

.form-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--text-primary);
    text-align: center;
    margin-bottom: 32px;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    font-weight: 500;
    color: var(--text-primary);
    margin-bottom: 6px;
    font-size: 0.9rem;
}

.form-input {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    font-size: 0.95rem;
    transition: border-color 0.2s, box-shadow 0.2s;
    background: var(--bg-white);
}

.form-input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.form-textarea {
    min-height: 120px;
    resize: vertical;
}

.checkbox-container {
    display: flex;
    align-items: start;
    gap: 8px;
    margin-top: 16px;
}

.checkbox-container input[type="checkbox"] {
    margin-top: 4px;
}

.checkbox-container label {
    font-size: 0.875rem;
    color: var(--text-secondary);
    line-height: 1.5;
}

.submit-btn {
    background: var(--primary-color);
    color: white;
    border: none;
    padding: 14px 32px;
    border-radius: var(--radius-md);
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    width: 100%;
}

.submit-btn:enabled:hover {
    background: var(--primary-hover);
    transform: translateY(-1px);
    box-shadow: var(--shadow-md);
}

.submit-btn:disabled {
    background: var(--text-light);
    cursor: not-allowed;
}

/* Map */
.map-container {
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    margin-top: 24px;
}

.map-container iframe {
    border-radius: var(--radius-lg);
}

/* Alert */
.alert-success {
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    color: #065f46;
    padding: 16px;
    border-radius: var(--radius-md);
    margin-bottom: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .property-container {
        padding: 0 16px;
    }
    
    .property-header {
        padding: 20px;
    }
    
    .property-price {
        font-size: 1.75rem;
    }
    
    .property-title {
        font-size: 1.25rem;
    }
    
    .property-nav {
        justify-content: center;
    }
    
    .nav-item {
        flex: 0 0 calc(50% - 4px);
        min-width: auto;
    }
    
    .content-section {
        padding: 20px;
    }
    
    .form-container {
        padding: 24px;
    }
    
    .resources-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 576px) {
    .property-header {
        margin-top: 85px;
    }
    
    .nav-item {
        flex: 1;
        min-width: 100px;
    }
    
    .gallery-main img {
        height: 250px;
    }
}
</style>

<div class="property-container">
    <!-- Property Header -->
    <div class="property-header">
        <div class="header-content">
            <div class="property-main-info">
                <div class="property-meta">
                    <span class="availability-badge">{{ $property->availability }}</span>
                    <div class="property-icon">
                        <img src="{{ asset('images/icon_4_large.png') }}" alt="Property Icon" class="property-icon-img">
                    </div>
                </div>
                <div class="property-price">
                    £@if($property->rent) {{ number_format($property->rent).'/'.$property->rentFrequency }} @else {{ number_format($property->price) }} @endif
                </div>
                <a href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}" class="property-title">
                    {{ $property->displayAddress }}
                </a>
                <div class="property-details">
                    <span class="detail-item">
                        <i class="fa fa-bed"></i>
                        {{ $property->propertyBedrooms }} Bedrooms
                    </span>
                    <span class="detail-separator">•</span>
                    <span class="detail-item">
                        <i class="fa fa-home"></i>
                        {{ $property->propertyStyle }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Gallery -->
    <div class="image-gallery position-relative">
        @foreach($property->images AS $k => $image)
            <div class="mySlides" style="display: {{ $k == 0 ? 'block' : 'none' }}">
                <div class="gallery-main">
                    <img src="{{ $image }}" alt="Urban Village Home - {{ $property->displayAddress }} : Image {{ $k+1 }}">
                </div>
            </div>
        @endforeach
        
        @if(count($property->images) > 1)
            <button class="gallery-controls gallery-prev" onclick="plusSlides(-1)">❮</button>
            <button class="gallery-controls gallery-next" onclick="plusSlides(1)">❯</button>
        @endif
        
        @if(count($property->images) > 1)
            <div class="gallery-dots">
                @foreach($property->images AS $k => $image)
                    <button class="gallery-dot {{ $k == 0 ? 'active' : '' }}" onclick="currentSlide({{ $k+1 }})"></button>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Navigation -->
    <div class="property-nav">
        <div class="nav-item">
            <div class="nav-link">
                <img src="{{ asset('images/house.svg') }}" class="nav-icon" alt="">
                <span>{{ $property->availability }}</span>
            </div>
        </div>
        <div class="nav-item">
            <a href="#features" class="nav-link">
                <img src="{{ asset('images/houses.svg') }}" class="nav-icon" alt="">
                <span>Features</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="#resources" class="nav-link">
                <img src="{{ asset('images/contract.svg') }}" class="nav-icon" alt="">
                <span>Documents</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="#location" class="nav-link">
                <img src="{{ asset('images/location.svg') }}" class="nav-icon" alt="">
                <span>Location</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="#contact" class="nav-link">
                <img src="{{ asset('images/directions.svg') }}" class="nav-icon" alt="">
                <span>Contact</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="https://api.whatsapp.com/send?text={{ urlencode(url('property/'.$property->propertyID.'/'.$property->slug)) }}" 
               target="_blank" class="nav-link" style="background: #25d366; color: white;">
                <img src="{{ asset('images/icons/whatsapp_01.png') }}" width="20" height="20" alt="">
                <span>Share</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row">
        <!-- Description -->
        <div class="col-lg-6 mb-4">
            <div class="content-section">
                <h3 class="section-title">Description</h3>
                <div class="description-text">{!! $property->mainSummary !!}</div>
            </div>
        </div>

        <!-- Contact Agent -->
        <div class="col-lg-3 mb-4">
            <div class="content-section">
                <h3 class="section-title">Contact Agent</h3>
                <div class="contact-info">
                    <strong>Urban Village Homes Limited</strong><br>
                    121 Denmark Hill<br>
                    Camberwell<br>
                    London<br>
                    SE5 8EN<br>
                    United Kingdom<br>
                    Tel: 020 3519 9121<br>
                    info@urbanvillagehomes.com
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="col-lg-3 mb-4" id="features">
            <div class="content-section">
                <h3 class="section-title">Property Features</h3>
                <ul class="features-list">
                    @if($property->propertyFeature1)<li>{!! $property->propertyFeature1 !!}</li>@endif
                    @if($property->propertyFeature2)<li>{!! $property->propertyFeature2 !!}</li>@endif
                    @if($property->propertyFeature3)<li>{!! $property->propertyFeature3 !!}</li>@endif
                    @if($property->propertyFeature4)<li>{!! $property->propertyFeature4 !!}</li>@endif
                    @if($property->propertyFeature5)<li>{!! $property->propertyFeature5 !!}</li>@endif
                    @if($property->propertyFeature6)<li>{!! $property->propertyFeature6 !!}</li>@endif
                    @if($property->propertyFeature7)<li>{!! $property->propertyFeature7 !!}</li>@endif
                    @if($property->propertyFeature8)<li>{!! $property->propertyFeature8 !!}</li>@endif
                    @if($property->propertyFeature9)<li>{!! $property->propertyFeature9 !!}</li>@endif
                    @if($property->propertyFeature10)<li>{!! $property->propertyFeature10 !!}</li>@endif
                </ul>
            </div>
        </div>
    </div>

    <!-- Virtual Tour -->
    @if(!empty($property['virtualTours']))
        <div class="virtual-tour">
            <h3 class="section-title">Property Virtual Tour</h3>
            @foreach($property['virtualTours'] AS $k => $virtualTours)
                <div class="embed-container">
                    <iframe src="{{ $virtualTours->virtualTour }}" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Resources Section -->
    <div class="content-section" id="resources">
        <h3 class="section-title">Documents & Resources</h3>
        <div class="resources-grid">
            <!-- EPC -->
            @foreach($property->epcGraphs AS $k => $epcGraph)
                <a href="{{url('view-resource/'.$epcGraph)}}" target="_blank" class="resource-card">
                    <div class="resource-header">
                        <div class="resource-icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <div>
                            <h4 class="resource-title">EPC Certificate</h4>
                            <p class="resource-description">Energy Performance Certificate</p>
                        </div>
                    </div>
                </a>
            @endforeach

            <!-- Floor Plans -->
            @foreach($property->floorplans AS $k => $floorplan)
                <a href="{{url('view-resource/'.$floorplan)}}" target="_blank" class="resource-card">
                    <div class="resource-header">
                        <div class="resource-icon">
                            <i class="fa fa-newspaper-o"></i>
                        </div>
                        <div>
                            <h4 class="resource-title">Floor Plan</h4>
                            <p class="resource-description">{{ $property->displayAddress }}</p>
                        </div>
                    </div>
                </a>
            @endforeach

            <!-- Brochures -->
            @foreach($property->brochures AS $k => $brochure)
                <a href="{{url('view-resource/'.$brochure)}}" target="_blank" class="resource-card">
                    <div class="resource-header">
                        <div class="resource-icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div>
                            <h4 class="resource-title">Property Brochure</h4>
                            <p class="resource-description">Brochure No {{ $k+1 }}</p>
                        </div>
                    </div>
                </a>
            @endforeach

            <!-- External Links -->
            @if(!empty($property['externalLinks']))
                @foreach($property['externalLinks'] AS $k => $externalLinks)
                    <a href="{{ $externalLinks->url }}" target="_blank" class="resource-card">
                        <div class="resource-header">
                            <div class="resource-icon">
                                <i class="fa fa-external-link-square"></i>
                            </div>
                            <div>
                                <h4 class="resource-title">{{ $externalLinks->description }}</h4>
                                <p class="resource-description">External Link {{ $k+1 }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</div>

<!-- Contact Form -->
@if(!($property->availability == "Sold"))
    <div class="contact-form-section" id="contact">
        <div class="property-container">
            <div class="form-container">
                <h2 class="form-title">Arrange a Viewing</h2>
                
                <form action="{{url('send-valuation-request')}}" method="post" id="contact_form">
                    {{csrf_field()}}
                    <input type="hidden" name="property_id" value="{{ $property->propertyID }}"/>
                    <input type="hidden" name="display_address" value="{{ $property->displayAddress }}"/>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-input" name="name" placeholder="Enter your full name" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-input" name="email" placeholder="Enter your email" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-input" name="phone" placeholder="Enter your phone number" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-input" name="address" placeholder="Enter your address" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            @if(session('flash_success'))
                                <div class="alert-success">
                                    <strong>Success!</strong> {!! session('flash_success') !!}
                                </div>
                            @endif
                            
                            <div class="form-group">
                                <label class="form-label">Preferred Viewing Time</label>
                                <input type="text" class="form-input" name="preferr_date" id="datetimepicker" placeholder="Select preferred date and time">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Message</label>
                                <textarea class="form-input form-textarea" name="body_text" placeholder="Tell us about your requirements..." required></textarea>
                            </div>
                            
                            <div class="checkbox-container">
                                <input type="checkbox" id="privacy" name="privacy" value="terms" required>
                                <label for="privacy">I agree to the <a href="{{ url('privacy-policy') }}">Privacy Policy</a></label>
                            </div>
                            
                            <div class="checkbox-container">
                                <input type="checkbox" id="marketing" name="marketing" value="marketing">
                                <label for="marketing">I would like to receive updates and newsletters from Urban Village Homes</label>
                            </div>
                            
                            <div class="form-group" style="margin-top: 24px;">
                                <button type="submit" class="submit-btn" id="sendNewSms" disabled>
                                    Submit Viewing Request
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

<!-- Map -->
<div class="property-container">
    <div class="map-container" id="location">
        <iframe src="https://maps.google.com/maps?q={{ $property->latitude }},{{ $property->longitude }}&z=15&output=embed" 
                width="100%" height="450" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<script>
// Image gallery functionality
let slideIndex = 1;

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("gallery-dot");
    
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active");
    }
    
    if (slides[slideIndex-1]) {
        slides[slideIndex-1].style.display = "block";
    }
    
    if (dots[slideIndex-1]) {
        dots[slideIndex-1].classList.add("active");
    }
}

// Form validation
document.getElementById('privacy').addEventListener('change', function() {
    const submitBtn = document.getElementById('sendNewSms');
    submitBtn.disabled = !this.checked;
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

@include('includes.footer')