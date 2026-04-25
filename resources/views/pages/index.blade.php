@include('includes.header')

<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
<link rel="stylesheet" href="{{ asset('css/newhome.css') }}">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> -->

<style>
    /* Modern CSS Variables for Search Bar */
    :root {
        --primary-color: #992785;
        --secondary-color: #E00069;
        --accent-color: #AFB700;
        --success-color: #C4D442;
        
        --primary-gradient: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        --accent-gradient: linear-gradient(135deg, var(--accent-color) 0%, var(--success-color) 100%);
        --glass-bg: rgba(255, 255, 255, 0.95);
        --glass-border: rgba(153, 39, 133, 0.2);
        
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.1);
        --shadow-md: 0 8px 32px rgba(0, 0, 0, 0.1);
        --shadow-hover: 0 12px 40px rgba(0, 0, 0, 0.15);
        
        --border-radius: 12px;
        --border-radius-sm: 8px;
        --transition-smooth: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        --transition-fast: all 0.2s ease;
    }

    /* Enhanced form dropdown */
    .form-group select {
        font-size: 18px;
        color: #64748b;
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        border: 2px solid transparent;
        border-radius: var(--border-radius-sm);
        transition: var(--transition-fast);
        padding: 12px;
    }

    .form-group select:focus,
    .form-group select:focus-visible {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(153, 39, 133, 0.1);
        transform: translateY(-2px);
    }

    /* Enhanced search bar container */
    .search-bar .navbar {
        background: rgba(198, 190, 196, 0.1);
        backdrop-filter: blur(20px);
        border: 1px solid var(--glass-border);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
        transition: var(--transition-fast);
    }

    .search-bar .navbar:hover {
        box-shadow: var(--shadow-hover);
    }

    /* Enhanced property navigation buttons */
    .search-bar .Properties-for-sale {
        margin-top: -25px;
        gap: 20px;
    }

    .search-bar .all-properties {
        text-decoration: none;
        min-width: 200px;
        height: 48px;
        background: var(--primary-gradient);
        border-radius: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition-smooth);
        box-shadow: var(--shadow-sm);
        position: relative;
        overflow: hidden;
    }

    .search-bar .all-properties::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
    }

    .search-bar .all-properties:hover::before {
        left: 100%;
    }

    .search-bar .all-properties:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-hover);
    }

    .search-bar .all-properties a {
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        color: #FFFFFF;
        position: relative;
        z-index: 2;
    }

    /* Enhanced form layout */
    .search-bar form {
        gap: 16px;
        margin: 25px;
        padding: 5px 0;
    }

    .search-bar .enter-location {
        margin-top: -40px;
        width: 100%;
    }

    .search-bar .enter-location label {
        text-align: left;
        font: normal normal 600 20px/1.4 'Outfit', sans-serif;
        color: var(--primary-color);
        margin-bottom: 8px;
        display: block;
    }

    /* Enhanced form controls */
    .search-bar .form-control {
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        border: 2px solid var(--glass-border);
        border-radius: var(--border-radius-sm);
        height: 56px;
        font-size: 16px;
        padding: 12px 16px;
        transition: var(--transition-fast);
    }

    .search-bar .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(153, 39, 133, 0.1);
        transform: translateY(-2px);
        background: #ffffff;
    }

    .search-bar .form-control::placeholder {
        font: normal normal normal 16px 'Outfit', sans-serif;
        color: #9ca3af;
    }

    /* Enhanced search button */
    .search-bar button {
        min-width: 200px;
        height: 56px;
        background: var(--accent-gradient);
        border: none;
        border-radius: var(--border-radius-sm);
        gap: 12px;
        font-size: 18px;
        font-weight: 600;
        color: white;
        transition: var(--transition-smooth);
        box-shadow: var(--shadow-sm);
        position: relative;
        overflow: hidden;
    }

    .search-bar button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
    }

    .search-bar button:hover::before {
        left: 100%;
    }

    .search-bar button:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-hover);
    }

    .search-bar button:active {
        transform: translateY(-1px);
    }

    /* Enhanced form groups (checkboxes and selects) */
    .search-bar .form-group {
        min-width: 140px;
        height: 56px;
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        border: 2px solid var(--glass-border);
        border-radius: var(--border-radius-sm);
        justify-content: center;
        align-items: center;
        margin-bottom: 0;
        transition: var(--transition-fast);
        position: relative;
    }

    .search-bar .form-group:hover {
        border-color: var(--primary-color);
        transform: translateY(-1px);
    }

    .form-group label {
        font-size: 16px;
        color: #64748b;
        font-weight: 500;
        cursor: pointer;
    }

    /* Enhanced custom checkboxes */
    #html, #buy {
        display: none;
    }

    #html + label,
    #buy + label {
        position: relative;
        cursor: pointer;
        user-select: none;
        display: flex;
        align-items: center;
        font-weight: 500;
        transition: var(--transition-fast);
    }

    #html + label::before,
    #buy + label::before {
        content: '';
        position: absolute;
        left: -35px;
        width: 24px;
        height: 24px;
        border: 2px solid var(--primary-color);
        border-radius: 6px;
        background: rgba(255, 255, 255, 0.95);
        transition: var(--transition-fast);
    }

    #html:checked + label::before,
    #buy:checked + label::before {
        background: var(--primary-gradient);
        border-color: var(--primary-color);
        transform: scale(1.1);
    }

    #html:checked + label::after,
    #buy:checked + label::after {
        content: '✓';
        position: absolute;
        left: -31px;
        top: 1px;
        color: white;
        font-size: 14px;
        font-weight: bold;
    }

    #html + label:hover::before,
    #buy + label:hover::before {
        border-color: var(--secondary-color);
        transform: scale(1.05);
    }

    /* Enhanced book-now button */
    .book-now {
        background: var(--accent-gradient);
        padding: 12px 24px;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: var(--transition-smooth);
        box-shadow: var(--shadow-sm);
        border: none;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .book-now::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
    }

    .book-now:hover::before {
        left: 100%;
    }

    .book-now:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-hover);
    }

    /* Loading state for search button */
    .search-bar button.loading {
        pointer-events: none;
        opacity: 0.7;
    }

    .search-bar button.loading::after {
        content: '';
        position: absolute;
        width: 16px;
        height: 16px;
        margin: auto;
        border: 2px solid transparent;
        border-top-color: #ffffff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Enhanced dropdown animations */
    .search-bar select option {
        padding: 8px 12px;
        background: white;
        color: #374151;
    }

    /* Focus ring for accessibility */
    .search-bar *:focus {
        outline: 2px solid var(--accent-color);
        outline-offset: 2px;
    }

    /* Responsive enhancements */
    @media screen and (max-width: 768px) {
        .search-bar .form-group {
            width: 100%;
            min-width: auto;
        }
        
        .search-bar .all-properties {
            width: 100%;
            min-width: auto;
            margin-bottom: 8px;
        }
        
        .search-bar button {
            width: 100%;
            min-width: auto;
        }
        
        .search-bar .Properties-for-sale {
            flex-direction: column;
            gap: 12px;
        }
        
        #html + label::before,
        #buy + label::before {
            left: -30px;
        }
        
        #html:checked + label::after,
        #buy:checked + label::after {
            left: -26px;
        }
    }

    /* Existing styles that should remain */
    .d-flex.justify-content-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .work-with-us-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
        width: 100%;
        box-sizing: border-box;
    }

    .work-with-us-content ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .work-with-us-content ul li {
        font-weight: normal;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .work-with-us-content ul img {
        margin-right: 10px;
        width: 24px;
        height: auto;
    }

    .work-with-us-content {
        height: 350px;
        flex: 0 0 95%;
        padding-right: 20px;
        box-sizing: border-box;
    }

    .work-with-us-image {
        flex: 0 0 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .work-with-us-image img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .profile-card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        object-fit: cover;
    }

    .quote-text {
        text-align: center;
        font: normal normal normal 35px/47px DM Serif Display;
        letter-spacing: 0.84px;
        color: #992785;
        opacity: 1;
    }

    .pagination {
        background: #adc867;
        margin: auto;
        padding: 20px;
        border-radius: 0;
    }

    /* Enhanced Property Cards Styles */

/* Modern property card container */
.listing {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--border-radius);
    overflow: hidden;
    transition: var(--transition-smooth);
    box-shadow: var(--shadow-sm);
    position: relative;
    transform-style: preserve-3d;
}

.listing::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(153, 39, 133, 0.05) 0%, rgba(224, 0, 105, 0.05) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
    z-index: 1;
}

.listing:hover::before {
    opacity: 1;
}

.listing:hover {
    transform: translateY(-12px) rotateX(2deg);
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.1),
        0 8px 16px rgba(153, 39, 133, 0.15);
    border-color: rgba(153, 39, 133, 0.3);
}

/* Enhanced image container */
.listing_image {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.listing_image_container {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.listing_image_container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    filter: brightness(1) contrast(1.05);
}

.listing:hover .listing_image_container img {
    transform: scale(1.08);
    filter: brightness(1.1) contrast(1.1);
}

/* Enhanced price badge */
.listing_price {
    position: absolute;
    top: 16px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--primary-gradient);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 14px;
    z-index: 10;
    box-shadow: 0 4px 12px rgba(153, 39, 133, 0.3);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: var(--transition-fast);
    height: 40px;
}

.listing:hover .listing_price {
    transform: translateX(-50%) translateY(-2px) scale(1.05);
    box-shadow: 0 6px 20px rgba(153, 39, 133, 0.4);
}

/* Enhanced content area */
.listing_content {
    position: relative;
    z-index: 2;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
}

.listing_location {
    padding: 24px 20px 20px 20px !important;
    background: transparent;
    margin-top: 0 !important;
}

/* Enhanced sold-cards styling */
.sold-cards {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: var(--border-radius-sm);
    padding: 20px;
    margin: 0;
    transition: var(--transition-fast);
    border: 1px solid rgba(153, 39, 133, 0.1);
}

.listing:hover .sold-cards {
    background: rgba(255, 255, 255, 0.95);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.sold-cards p {
    font-family: 'Outfit', sans-serif;
    font-size: 16px;
    line-height: 1.6;
    font-weight: 500;
    color: #374151;
    margin-bottom: 16px;
    transition: color 0.3s ease;
}

.sold-cards b {
    color: var(--primary-color);
    font-size: 20px;
    font-weight: 700;
    display: block;
    margin-bottom: 8px;
}

/* Enhanced property features section */
.property-features-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 12px;
}

.property-type {
    font-size: 14px;
    color: #64748b;
    font-weight: 500;
}

.property-features {
    display: flex;
    gap: 12px;
    align-items: center;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 14px;
    color: #64748b;
    font-weight: 500;
    padding: 4px 8px;
    background: rgba(153, 39, 133, 0.1);
    border-radius: 12px;
    transition: var(--transition-fast);
}

.feature-item:hover {
    background: rgba(153, 39, 133, 0.15);
    transform: translateY(-1px);
}

.feature-item svg {
    width: 16px;
    height: 16px;
    fill: var(--secondary-color);
    transition: var(--transition-fast);
}

.feature-item:hover svg {
    fill: var(--primary-color);
    transform: scale(1.1);
}

/* Enhanced hover overlay */
.listing::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
        135deg,
        rgba(153, 39, 133, 0.1) 0%,
        rgba(224, 0, 105, 0.1) 50%,
        rgba(175, 183, 0, 0.1) 100%
    );
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
    z-index: 1;
}

.listing:hover::after {
    opacity: 1;
}

/* Add favorite button */
.favorite-btn {
    position: absolute;
    top: 16px;
    right: 16px;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: var(--transition-fast);
    z-index: 10;
    font-size: 18px;
    color: #64748b;
}

.favorite-btn:hover {
    background: var(--secondary-color);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 12px rgba(224, 0, 105, 0.3);
}

.favorite-btn.active {
    background: var(--secondary-color);
    color: white;
}

/* Enhanced view details button */
.view-details-btn {
    position: absolute;
    bottom: 20px;
    left: 20px;
    right: 20px;
    background: var(--primary-gradient);
    color: white;
    padding: 12px 20px;
    border-radius: var(--border-radius-sm);
    text-align: center;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    opacity: 0;
    transform: translateY(20px);
    transition: var(--transition-smooth);
    z-index: 10;
    box-shadow: 0 4px 12px rgba(153, 39, 133, 0.3);
}

.listing:hover .view-details-btn {
    opacity: 1;
    transform: translateY(0);
}

.view-details-btn:hover {
    background: linear-gradient(135deg, #7a1f5f 0%, #b8005a 100%);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(153, 39, 133, 0.4);
    color: white;
    text-decoration: none;
}

/* Property status indicator */
.property-status {
    position: absolute;
    top: 16px;
    left: 16px;
    padding: 6px 12px;
    border-radius: 16px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    z-index: 10;
    backdrop-filter: blur(10px);
    transition: var(--transition-fast);
}

.property-status.for-sale {
    background: rgba(34, 197, 94, 0.9);
    color: white;
    border: 1px solid rgba(34, 197, 94, 0.3);
}

.property-status.to-let {
    background: rgba(59, 130, 246, 0.9);
    color: white;
    border: 1px solid rgba(59, 130, 246, 0.3);
}

.property-status.sold,
.property-status.let {
    background: rgba(156, 163, 175, 0.9);
    color: white;
    border: 1px solid rgba(156, 163, 175, 0.3);
}

/* Loading skeleton for images */
.image-skeleton {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
}

@keyframes shimmer {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}

/* Enhanced responsive design */
@media screen and (max-width: 768px) {
    .listing:hover {
        transform: translateY(-6px);
    }
    
    .listing_image {
        height: 220px;
    }
    
    .sold-cards {
        padding: 16px;
    }
    
    .sold-cards p {
        font-size: 14px;
        line-height: 1.5;
    }
    
    .sold-cards b {
        font-size: 18px;
    }
    
    .feature-item {
        font-size: 12px;
        padding: 3px 6px;
    }
    
    .view-details-btn {
        bottom: 16px;
        left: 16px;
        right: 16px;
        padding: 10px 16px;
        font-size: 13px;
    }
}

/* Stagger animation for property cards */
.listing {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.6s ease forwards;
}

.listing:nth-child(1) { animation-delay: 0.1s; }
.listing:nth-child(2) { animation-delay: 0.2s; }
.listing:nth-child(3) { animation-delay: 0.3s; }
.listing:nth-child(4) { animation-delay: 0.4s; }
.listing:nth-child(5) { animation-delay: 0.5s; }
.listing:nth-child(6) { animation-delay: 0.6s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Enhanced results info */
.results-info {
    font-weight: 500;
    color: #64748b;
    font-size: 16px;
    margin-bottom: 24px;
    padding: 12px 0;
    border-bottom: 1px solid rgba(153, 39, 133, 0.1);
}

/* No results state enhancement */
.no-results {
    text-align: center;
    padding: 60px 20px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: var(--border-radius);
    border: 1px solid rgba(153, 39, 133, 0.1);
    margin: 40px 0;
}

.no-results p {
    color: #64748b;
    font-size: 18px;
    margin-bottom: 16px;
}

.no-results h4 {
    color: #374151;
    font-size: 20px;
}

.no-results a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.no-results a:hover {
    color: var(--secondary-color);
    text-decoration: underline;
}

/* CSS Fixes - Add at the end of your <style> section */

/* Override conflicting styles */
.listing {
    background: rgba(255, 255, 255, 0.95) !important;
    backdrop-filter: blur(20px) !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    border-radius: var(--border-radius) !important;
    overflow: hidden !important;
    transition: var(--transition-smooth) !important;
    box-shadow: var(--shadow-sm) !important;
    position: relative !important;
    transform-style: preserve-3d !important;
}

/* Ensure proper card dimensions */
.col-lg-4 .listing,
.col-md-6 .listing,
.col-12 .listing {
    width: 100% !important;
    max-width: none !important;
}

/* Fix image container height */
.listing_image {
    position: relative !important;
    overflow: hidden !important;
    height: 250px !important;
}

.listing_image_container {
    position: relative !important;
    width: 100% !important;
    height: 100% !important;
    overflow: hidden !important;
}

/* Ensure images fill container properly */
.listing_image_container img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
    filter: brightness(1) contrast(1.05) !important;
}

/* Fix content area */
.listing_content {
    position: relative !important;
    z-index: 2 !important;
    background: rgba(255, 255, 255, 0.95) !important;
    backdrop-filter: blur(10px) !important;
}

.listing_location {
    padding: 24px 20px 20px 20px !important;
    background: transparent !important;
    margin-top: 0 !important;
}

/* Fix price badge positioning */
.listing_price {
    position: absolute !important;
    top: 16px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    background: var(--primary-gradient) !important;
    color: white !important;
    padding: 8px 16px !important;
    border-radius: 20px !important;
    font-weight: 600 !important;
    font-size: 14px !important;
    z-index: 10 !important;
    box-shadow: 0 4px 12px rgba(153, 39, 133, 0.3) !important;
    backdrop-filter: blur(10px) !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    transition: var(--transition-fast) !important;
}

/* Fix sold-cards styling */
.sold-cards {
    background: rgba(255, 255, 255, 0.9) !important;
    backdrop-filter: blur(10px) !important;
    border-radius: var(--border-radius-sm) !important;
    padding: 20px !important;
    margin: 0 !important;
    transition: var(--transition-fast) !important;
    border: 1px solid rgba(153, 39, 133, 0.1) !important;
}

.sold-cards p {
    font-family: 'Outfit', sans-serif !important;
    font-size: 16px !important;
    line-height: 1.6 !important;
    font-weight: 500 !important;
    color: #374151 !important;
    margin-bottom: 16px !important;
    transition: color 0.3s ease !important;
}

.sold-cards b {
    color: var(--primary-color) !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    display: block !important;
    margin-bottom: 8px !important;
}

/* Fix grid layout */
.featured_row {
    display: flex !important;
    flex-wrap: wrap !important;
    margin-left: -15px !important;
    margin-right: -15px !important;
}

.featured_row > [class*="col-"] {
    padding-left: 15px !important;
    padding-right: 15px !important;
}

/* Fix responsive grid */
@media (min-width: 576px) {
    .col-md-6 {
        flex: 0 0 50% !important;
        max-width: 50% !important;
    }
}

@media (min-width: 992px) {
    .col-lg-4 {
        flex: 0 0 33.333333% !important;
        max-width: 33.333333% !important;
    }
}

/* Ensure proper spacing */
.mb-4 {
    margin-bottom: 1.5rem !important;
}

/* Fix results info */
.results-info {
    font-weight: 500 !important;
    color: #64748b !important;
    font-size: 16px !important;
    margin-bottom: 24px !important;
    padding: 12px 0 !important;
    border-bottom: 1px solid rgba(153, 39, 133, 0.1) !important;
    width: 100% !important;
}

/* Remove conflicting animations */
.listing:nth-child(1),
.listing:nth-child(2),
.listing:nth-child(3),
.listing:nth-child(4),
.listing:nth-child(5),
.listing:nth-child(6) {
    animation-delay: 0s !important;
}

/* Ensure proper card height */
.h-100 {
    height: 100% !important;
}

/* Bootstrap Grid Fix - Add at the very end of your <style> section */

/* Force proper Bootstrap grid behavior */
.row {
    display: flex !important;
    flex-wrap: wrap !important;
    margin-right: -15px !important;
    margin-left: -15px !important;
}

.row > [class*="col-"] {
    position: relative !important;
    width: 100% !important;
    padding-right: 15px !important;
    padding-left: 15px !important;
}

/* Specific column widths */
.col-xl-4 {
    flex: 0 0 33.333333% !important;
    max-width: 33.333333% !important;
}

.col-lg-4 {
    flex: 0 0 33.333333% !important;
    max-width: 33.333333% !important;
}

.col-md-6 {
    flex: 0 0 50% !important;
    max-width: 50% !important;
}

.col-sm-12 {
    flex: 0 0 100% !important;
    max-width: 100% !important;
}

.col-12 {
    flex: 0 0 100% !important;
    max-width: 100% !important;
}

/* Responsive breakpoints */
@media (min-width: 576px) {
    .col-sm-12 {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }
}

@media (min-width: 768px) {
    .col-md-6 {
        flex: 0 0 50% !important;
        max-width: 50% !important;
    }
}

@media (min-width: 992px) {
    .col-lg-4 {
        flex: 0 0 33.333333% !important;
        max-width: 33.333333% !important;
    }
}

@media (min-width: 1200px) {
    .col-xl-4 {
        flex: 0 0 33.333333% !important;
        max-width: 33.333333% !important;
    }
}

/* Ensure the featured row behaves properly */
.featured_row {
    display: flex !important;
    flex-wrap: wrap !important;
    margin-right: -15px !important;
    margin-left: -15px !important;
}

/* Override any conflicting grid CSS from newhome.css */
.featured_row > .col-xl-4,
.featured_row > .col-lg-4,
.featured_row > .col-md-6,
.featured_row > .col-sm-12 {
    padding-right: 15px !important;
    padding-left: 15px !important;
}

/* Ensure listings take full width of their containers */
.listing {
    width: 100% !important;
    max-width: none !important;
}

/* Debug grid (remove after confirming it works) */
/* 
.col-xl-4, .col-lg-4, .col-md-6, .col-sm-12 {
    border: 2px solid red !important;
    box-sizing: border-box !important;
}
*/
</style>

<script>
// Favorite functionality
function toggleFavorite(button, propertyId) {
    button.classList.toggle('active');
    button.innerHTML = button.classList.contains('active') ? '❤️' : '♡';
    
    // Add bounce animation
    button.style.transform = 'scale(1.3)';
    setTimeout(() => {
        button.style.transform = 'scale(1)';
    }, 200);
    
    // Save/remove favorite
    const isFavorited = button.classList.contains('active');
    saveFavorite(propertyId, isFavorited);
    trackPropertyFavorite(propertyId, isFavorited);
    showFeedbackMessage(isFavorited ? 'Added to favorites' : 'Removed from favorites');
}

// Enhanced filter and property card functionality
document.addEventListener('DOMContentLoaded', function() {
    // Search bar functionality
    const rentCheckbox = document.getElementById('html');
    const buyCheckbox = document.getElementById('buy');
    const availabilitySelect = document.querySelector('select[name="availability"]');
    
    if (availabilitySelect) {
        // Save original options
        const originalOptions = Array.from(availabilitySelect.options).map(opt => {
            return {
                value: opt.value,
                text: opt.text,
                selected: opt.selected
            };
        });
        
        // Enhanced filter function
        function filterOptions() {
            availabilitySelect.style.opacity = '0.5';
            availabilitySelect.style.transform = 'scale(0.98)';
            
            setTimeout(() => {
                availabilitySelect.innerHTML = '';
                originalOptions.forEach(opt => {
                    const option = new Option(opt.text, opt.value, opt.selected, opt.selected);
                    availabilitySelect.add(option);
                });
                
                if (rentCheckbox.checked && !buyCheckbox.checked) {
                    for (let i = availabilitySelect.options.length - 1; i >= 0; i--) {
                        const option = availabilitySelect.options[i];
                        if (option.value !== '' && 
                            option.value !== 'Let' && 
                            option.value !== 'To Let' && 
                            option.value !== 'Let Agreed') {
                            availabilitySelect.remove(i);
                        }
                    }
                } else if (buyCheckbox.checked && !rentCheckbox.checked) {
                    for (let i = availabilitySelect.options.length - 1; i >= 0; i--) {
                        const option = availabilitySelect.options[i];
                        if (option.value !== '' && 
                            option.value !== 'For Sale' && 
                            option.value !== 'Sold' && 
                            option.value !== 'Sold STC') {
                            availabilitySelect.remove(i);
                        }
                    }
                }
                
                availabilitySelect.style.opacity = '1';
                availabilitySelect.style.transform = 'scale(1)';
            }, 150);
        }
        
        // Add checkbox listeners
        if (rentCheckbox && buyCheckbox) {
            [rentCheckbox, buyCheckbox].forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const parentGroup = this.parentElement;
                    parentGroup.style.transform = 'scale(1.05)';
                    parentGroup.style.borderColor = 'var(--primary-color)';
                    
                    setTimeout(() => {
                        parentGroup.style.transform = 'scale(1)';
                        parentGroup.style.borderColor = '';
                    }, 200);
                    
                    filterOptions();
                });
            });
        }
        
        filterOptions();
    }

    // Enhanced search form functionality
    const searchForm = document.getElementById('searchForm');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            submitButton.classList.add('loading');
            submitButton.innerHTML = '🔄 Searching...';
            submitButton.disabled = true;
            
            setTimeout(() => {
                submitButton.classList.remove('loading');
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }, 2000);
        });
    }

    // Property cards functionality
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe property cards for animations
    document.querySelectorAll('.listing').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
        observer.observe(card);
    });

    // Enhanced hover effects for property cards
    document.querySelectorAll('.listing').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
            
            const img = this.querySelector('.listing_image_container img');
            if (img) {
                img.style.transform = 'scale(1.08) translateZ(0)';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
            
            const img = this.querySelector('.listing_image_container img');
            if (img) {
                img.style.transform = 'scale(1) translateZ(0)';
            }
        });

        // Add click tracking
        card.addEventListener('click', function(e) {
            if (!e.target.closest('.favorite-btn') && !e.target.closest('.view-details-btn')) {
                const propertyId = this.dataset.propertyId;
                if (propertyId) trackPropertyView(propertyId);
            }
        });
    });

    // Enhanced image loading
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                const originalSrc = img.src;
                
                img.classList.add('image-skeleton');
                
                const tempImg = new Image();
                tempImg.onload = function() {
                    img.src = originalSrc;
                    img.classList.remove('image-skeleton');
                };
                tempImg.onerror = function() {
                    img.src = generatePlaceholderImage(400, 250, 'Property Image');
                    img.classList.remove('image-skeleton');
                    img.alt = 'Property image not available';
                };
                tempImg.src = originalSrc;
                
                imageObserver.unobserve(img);
            }
        });
    });

    document.querySelectorAll('.listing_image_container img').forEach(img => {
        imageObserver.observe(img);
    });

    // Property card tilt effect (desktop only)
    document.querySelectorAll('.listing').forEach(card => {
        card.addEventListener('mousemove', function(e) {
            if (window.innerWidth > 768) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 30;
                const rotateY = (centerX - x) / 30;
                
                this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-12px)`;
            }
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
        });
    });

    // Touch device optimizations
    if ('ontouchstart' in window) {
        document.querySelectorAll('.listing').forEach(card => {
            card.addEventListener('touchstart', function() {
                this.classList.add('touch-active');
            });
            
            card.addEventListener('touchend', function() {
                setTimeout(() => {
                    this.classList.remove('touch-active');
                }, 300);
            });
        });
    }

    // Load favorites on page load
    loadFavorites();

    // Add ripple animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
});

// Utility functions
function generatePlaceholderImage(width, height, text) {
    const svg = `
        <svg width="${width}" height="${height}" viewBox="0 0 ${width} ${height}" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="${width}" height="${height}" fill="#F3F4F6"/>
            <text x="50%" y="50%" font-family="Arial, sans-serif" font-size="16" fill="#9CA3AF" text-anchor="middle" dy=".3em">${text}</text>
        </svg>
    `;
    return 'data:image/svg+xml;base64,' + btoa(svg);
}

function showFeedbackMessage(message) {
    let feedback = document.getElementById('feedbackMessage');
    if (!feedback) {
        feedback = document.createElement('div');
        feedback.id = 'feedbackMessage';
        feedback.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #992785 0%, #E00069 100%);
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            z-index: 10000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        `;
        document.body.appendChild(feedback);
    }
    
    feedback.textContent = message;
    feedback.style.transform = 'translateX(0)';
    
    setTimeout(() => {
        feedback.style.transform = 'translateX(100%)';
    }, 3000);
}

function saveFavorite(propertyId, isFavorited) {
    let favorites = JSON.parse(localStorage.getItem('propertyFavorites') || '[]');
    
    if (isFavorited && !favorites.includes(propertyId)) {
        favorites.push(propertyId);
    } else if (!isFavorited) {
        favorites = favorites.filter(id => id !== propertyId);
    }
    
    localStorage.setItem('propertyFavorites', JSON.stringify(favorites));
}

function loadFavorites() {
    const favorites = JSON.parse(localStorage.getItem('propertyFavorites') || '[]');
    
    document.querySelectorAll('.favorite-btn').forEach(btn => {
        const card = btn.closest('.listing');
        const propertyId = card.dataset.propertyId;
        
        if (favorites.includes(propertyId)) {
            btn.classList.add('active');
            btn.innerHTML = '❤️';
        }
    });
}

function trackPropertyView(propertyId) {
    if (typeof gtag !== 'undefined') {
        gtag('event', 'property_view', {
            'event_category': 'engagement',
            'event_label': propertyId
        });
    }
    console.log('Property viewed:', propertyId);
}

function trackPropertyFavorite(propertyId, isFavorited) {
    if (typeof gtag !== 'undefined') {
        gtag('event', isFavorited ? 'add_to_favorites' : 'remove_from_favorites', {
            'event_category': 'engagement',
            'event_label': propertyId
        });
    }
    console.log('Property favorite toggled:', propertyId, isFavorited);
}

// Existing modal functionality
var modal = document.getElementById("video_model");
var span = document.getElementsByClassName("close-btn")[0];

function getFunction() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Existing mortgage calculator
$('#mortgage_submit').on('click', function() {
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
    var final_monthly = mortgage_value * (mortgage_interest_final * Math.pow((1 + mortgage_interest_final),
        mortgage_term_months)) / (Math.pow((1 + mortgage_interest_final), mortgage_term_months) - 1);
    final_monthly = +(final_monthly.toFixed(2));
    var total_repayment = final_monthly * mortgage_term_months;

    $('#m_amount').html(mortgage_value.toFixed(2));
    $('#m_years').html(mortgage_term);
    $('#m_interest').html(mortgage_interest);
    $('#m_payment').html(final_monthly);
    $('#m_total').html(total_repayment);

    $("#mortgage_div").show();
});

// Stamp Duty calculator
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#stamp_submit").click(function(e) {
    e.preventDefault();

    var value = $("input[name=value]").val();
    var country = $("input[name=country]:checked").val();
    var additional = $("input[name=additional]:checked").val();

    $.ajax({
        type: 'POST',
        url: '/calculate-stamp-duty',
        data: {
            "_token": "{{ csrf_token() }}",
            "value": value,
            "country": country,
            "additional": additional
        },
        success: function(data) {
            $("#error-message").hide();

            var effective_rate = 0.0;
            var higher_rates = 'Not Applicable';

            if (data.additional_rate_used == true) {
                higher_rates = 'Applicable';
            }

            effective_rate = ((data.sdlt_payable / value) * 100).toFixed(2);

            $('#tax_payable').html(data.sdlt_payable.toFixed(2));
            $('#effective_rate').html(effective_rate);
            $('#higher_rates').html(higher_rates);
        },
        error: function(xhr, status, error) {
            $("#error-message").toggle();
        }
    });
});
</script>

<div id="video_model" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close-btn">&times;</span>
            <h5>Urban Village Video</h5>
        </div>
        <div class="modal-body">
            <iframe title="Urban Village Reviews" style="width: 100% !important;"
                src="https://player.vimeo.com/video/361889922" height="374" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
            <img src="{{ asset('images/logo.jpg') }}" alt="logo" class="img-responsive" />
        </div>
    </div>
</div>

<div class="page-title-div mb-3"> Buy, sell, let or rent – we’re here at every step </div>
<div class="page-subtitle-div"> Your dedicated Independent Estate Agents in SE5 </div>
<!-- search-bar -->
<div class="container search-bar mt-3 mt-lg-5">
    <nav class="navbar navbar-light p-0">
        <div class="container-fluid p-0">
            <div class="Properties-for-sale d-flex flex-column flex-md-row justify-content-center align-items-center w-100">
                <div class="all-properties d-flex justify-content-center align-items-center mb-2 mb-md-0">
                    <a href="{{ url('property/buyers') }}">Properties for sale</a>
                </div>
                <div class="all-properties d-flex justify-content-center align-items-center mb-2 mb-md-0">
                    <a href="{{ url('property/tenants') }}">Properties for rent</a>
                </div>
                <div class="all-properties d-flex justify-content-center align-items-center">
    <a href="javascript:void(0)" onclick="openFillout()">
        Book a valuation
    </a>
</div>

<!-- Fillout renders a button here, we hide it visually -->
<div style="position:absolute; opacity:0; pointer-events:none; z-index:-1;">
    <div id="fillout_wrapper"
         data-fillout-id="aQEigFYmCzus" 
         data-fillout-embed-type="popup" 
         data-fillout-dynamic-resize 
         data-fillout-inherit-parameters 
         data-fillout-popup-size="large">
    </div>
</div>
<script src="https://server.fillout.com/embed/v1/"></script>

<script>
    function openFillout() {
        // Fillout renders a button inside the wrapper, find and click it
        var btn = document.querySelector('#fillout_wrapper button');
        if (btn) {
            btn.click();
        }
    }
</script>
            </div>
            <!-- <form class="w-100 d-flex flex-column flex-lg-row pt-4">
                <div class="enter-location">
                    <label for="exampleInput" class="form-label">Enter a location</label>
                    <input class="form-control me-2 mb-0" type="search" placeholder="Search for street, postcode or area" aria-label="Search">
                </div>
                <div class="d-flex" style="gap: 10px;">
                    <div class="form-group d-flex align-items-center justify-content-evenly mb-0">
                        <input type="checkbox" id="html">
                        <label for="html" class="d-flex align-items-center mb-0">Rent</label>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-evenly">
                        <input type="checkbox" id="buy">
                        <label for="buy" class="d-flex align-items-center mb-0">Buy</label>
                    </div>
                </div>

                <button class="btn text-white d-flex align-items-center justify-content-center" type="submit"><svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg> Search</button>
            </form> -->
            <form class="w-100 d-flex flex-column pt-4" id="searchForm" method="GET" action="">
                <div class="enter-location">
                    <label for="exampleInput" class="form-label">Enter a location</label>
                    <input class="form-control me-2 mb-3" type="search"
                        placeholder="Search for street, postcode or area" aria-label="Search" name="search"
                        value="{{ request()->query('search') ?? '' }}">
                </div>
                <div class="d-flex flex-column flex-md-row" style="gap: 10px;">
                    <div class="d-flex mb-2 mb-md-0" style="gap: 10px;">
                        <div class="form-group d-flex align-items-center justify-content-evenly mb-0">
                            <input type="checkbox" id="html" name="rent" value="1"
                                {{ request()->query('rent') == 1 ? 'checked' : '' }} />
                            <label for="html" class="d-flex align-items-center mb-0">Rent</label>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-evenly">
                            <input type="checkbox" id="buy" name="buy" value="1"
                                {{ request()->query('buy') == 1 ? 'checked' : '' }} />
                            <label for="buy" class="d-flex align-items-center mb-0">Buy</label>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row" style="gap: 10px;">
                        <div class="form-group d-flex align-items-center justify-content-evenly p-2 mb-2 mb-md-0 w-100">
                            <select class="my-select mb-0 h-100 border-0 p-0 w-100" data-container="body" name="min_amount">
                                <option value="" {{ (request()->query('min_amount') == ''?'selected':'')}}>No Min</option>
                                <option value="100000" {{ (request()->query('min_amount') == '100000'?'selected':'')}}>£100,000</option>
                                <option value="250000" {{ (request()->query('min_amount') == '250000'?'selected':'')}}>£250,000</option>
                                <option value="500000" {{ (request()->query('min_amount') == '500000'?'selected':'')}}>£500,000</option>
                                <option value="750000" {{ (request()->query('min_amount') == '750000'?'selected':'')}}>£750,000</option>
                                <option value="1000000" {{ (request()->query('min_amount') == '1000000'?'selected':'')}}>£1,000,000</option>
                                <option value="2500000" {{ (request()->query('min_amount') == '2500000'?'selected':'')}}>£2,500,000</option>
                                <option value="5000000" {{ (request()->query('min_amount') == '5000000'?'selected':'')}}>£5,000,000</option>
                            </select>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-evenly p-2 mb-2 mb-md-0 w-100">
                            <select class="my-select mb-0 h-100 border-0 p-0 w-100" data-container="body" name="max_amount">
                                <option value=""{{ (request()->query('max_amount') == ''?'selected':'')}}>No Max</option>
                                <option value="250000" {{ (request()->query('max_amount') == '250000'?'selected':'')}}>£250,000</option>
                                <option value="500000" {{ (request()->query('max_amount') == '500000'?'selected':'')}}>£500,000</option>
                                <option value="750000" {{ (request()->query('max_amount') == '750000'?'selected':'')}}>£750,000</option>
                                <option value="1000000" {{ (request()->query('max_amount') == '1000000'?'selected':'')}}>£1,000,000</option>
                                <option value="2500000" {{ (request()->query('max_amount') == '2500000'?'selected':'')}}>£2,500,000</option>
                                <option value="5000000" {{ (request()->query('max_amount') == '5000000'?'selected':'')}}>£5,000,000</option>
                                <option value="10000000" {{ (request()->query('max_amount') == '10000000'?'selected':'')}}>£10,000,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row" style="gap: 10px;">
                        <div class="form-group d-flex align-items-center justify-content-evenly p-2 mb-2 mb-md-0 w-100">
                            <select class="my-select mb-0 h-100 border-0 p-0 w-100" data-container="body" name="availability">
                                <option value=""{{ (request()->query('availability') == ''?'selected':'')}}>Availability</option>
                                <option value="Let" {{ (request()->query('availability') == 'Let'?'selected':'')}}>Let</option>
                                <option value="To Let" {{ (request()->query('availability') == 'To Let'?'selected':'')}}>To Let</option>
                                <option value="Let Agreed" {{ (request()->query('availability') == 'Let Agreed'?'selected':'')}}>Let Agreed</option>
                                <option value="For Sale" {{ (request()->query('availability') == 'For Sale'?'selected':'')}}>For Sale</option>
                                <option value="Sold STC" {{ (request()->query('availability') == 'Sold STC'?'selected':'')}}>Sold STC</option>
                                <option value="Sold" {{ (request()->query('availability') == 'Sold'?'selected':'')}}>Sold</option>
                            </select>
                        </div>
                        <button class="btn text-white d-flex align-items-center justify-content-center mb-2 mb-md-0 w-100" type="submit">
                            @include('icons.search-icon') Search</button>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</div>

<div class="featured" style="padding-top: 0px !important;">
    <div class="container">
        @if (count($properties))
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="results-info">
                        Showing {{ $properties->count() }} records out of {{ $properties->total() }}
                    </div>
                </div>
            </div>
            
            <div class="row featured_row move_up">
                @foreach ($properties as $k => $property)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="listing h-100" data-property-id="{{ $property->propertyID }}">
                            <div class="listing_image">
                                <div class="listing_image_container">
                                    <a href="{{ url('property/' . $property->propertyID . '/' . $property->propertyID) }}">
                                        <img src="{{ $property->image }}"
                                            alt="Urban Village Home - {{ $property->displayAddress }}" 
                                            class="img-fluid"
                                            loading="lazy"
                                            onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xODAgMTEwSDIyMFYxNDBIMTgwVjExMFoiIGZpbGw9IiM5Q0EzQUYiLz4KPC9zdmc+'; this.classList.add('image-skeleton');">
                                    </a>
                                </div>
                                
                                <!-- Enhanced status badge -->
                                <div class="property-status {{ strtolower(str_replace(' ', '-', $property->availability)) }}">
                                    {{ $property->availability }}
                                </div>
                                
                                <!-- Price badge -->
                                <div class="listing_price">
                                    £ @if ($property->rent)
                                        {{ number_format($property->rent) }}/{{ $property->rentFrequency }}
                                    @else
                                        {{ number_format($property->price) }}
                                    @endif
                                </div>
                                
                                <!-- Favorite button -->
                                <button class="favorite-btn" onclick="toggleFavorite(this, '{{ $property->propertyID }}')" 
                                        aria-label="Add to favorites">
                                    ♡
                                </button>
                            </div>

                            <div class="listing_content">
                                <div class="prop_location listing_location">
                                    <div class="sold-cards">
                                        <!-- Property address -->
                                        <div class="property-address">
                                            📍 {!! str_limit($property->addressStreet . ', ' . $property->addressPostcode, $limit = 35, $end = '...') ?? 'Address not available' !!}
                                        </div>
                                        
                                        <!-- Property features container -->
                                        <div class="property-features-container">
                                            <div class="property-type">
                                                {!! $property->displayPropertyType ?? 'Property Type' !!}
                                            </div>
                                            
                                            <div class="property-features">
                                                @if($property->propertyBedrooms)
                                                <div class="feature-item">
                                                    {{ $property->propertyBedrooms }}
                                                    <svg fill="currentColor" height="16px" width="16px" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 315.00 315.00">
                                                        <path d="m292.617,146.484h-3.105v-51.322c0-17.997-14.642-32.639-32.638-32.639h-198.748c-17.996,0-32.638,14.642-32.638,32.639v51.322h-3.106c-12.341,0-22.382,10.041-22.382,22.383v33.162c0,12.342 10.041,22.383 22.383,22.383h27.672v21.064c0,3.866 3.134,7 7,7s7-3.134 7-7v-21.064h186.891v21.064c0,3.866 3.134,7 7,7 3.866,0 7-3.134 7-7v-21.064h27.672c12.342,0 22.383-10.041 22.383-22.383v-33.162c-0.001-12.342-10.042-22.383-22.384-22.383zm-253.129-51.322c0-10.277 8.36-18.639 18.638-18.639h198.748c10.277,0 18.638,8.361 18.638,18.639v51.322h-8.974v-14.057c0-8.964-7.292-16.256-16.255-16.256h-71.754c-8.965,0-16.258,7.292-16.258,16.256v14.057h-9.543v-14.057c0-8.964-7.293-16.256-16.258-16.256h-71.753c-8.963,0-16.255,7.292-16.255,16.256v14.057h-8.974v-51.322zm136.783,51.322v-14.057c0-1.223 1.034-2.256 2.258-2.256h71.754c1.223,0 2.255,1.033 2.255,2.256v14.057h-76.267zm-113.809,0v-14.057c0-1.223 1.032-2.256 2.255-2.256h71.754c1.224,0 2.258,1.033 2.258,2.256v14.057h-76.267zm238.538,55.545c0,4.622-3.761,8.383-8.383,8.383h-270.234c-4.622,0-8.383-3.761-8.383-8.383v-33.162c0-4.622 3.761-8.383 8.383-8.383h270.234c4.622,0 8.383,3.761 8.383,8.383v33.162z"></path>
                                                    </svg>
                                                </div>
                                                @endif
                                                
                                                @if($property->propertyBathrooms)
                                                <div class="feature-item">
                                                    {{ $property->propertyBathrooms }}
                                                    <svg height="16px" width="16px" version="1.1" 
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        fill="currentColor">
                                                        <path d="M484.615,197.061v24.064c0,0.61,0,1.208-0.012,1.817c-0.966,92.403-76.184,167.011-168.806,167.011h-205.42c-45.839,0-82.994-37.155-82.994-82.994V197.061L484.615,197.061L484.615,197.061z"></path>
                                                        <path d="M484.394,157.766H27.606c-10.481,0-18.979,8.497-18.979,18.979v1.337c0,10.481,8.497,18.979,18.979,18.979h456.788c10.482,0,18.979-8.497,18.979-18.979v-1.337C503.373,166.263,494.876,157.766,484.394,157.766z"></path>
                                                    </svg>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Enhanced view details button -->
                            <a href="{{ url('property/' . $property->propertyID . '/' . $property->propertyID) }}" 
                               class="view-details-btn">
                                View Details
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Enhanced pagination -->
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center mt-4">
                        {{ $properties->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-12">
                    <div class="no-results">
                        <div class="mb-4">
                            <svg width="64" height="64" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #9ca3af; margin: 0 auto 20px;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21l-7-7m0 0l-7-7m7 7l7-7m-7 7l-7 7"></path>
                            </svg>
                        </div>
                        <p>There are no properties listed for your search criteria</p>
                        <h4>Please click <a href="{{ url('/') }}">here</a> to see all our properties for sale or refine your search criteria.</h4>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>


<section class="Why-work-with-us">
    <div class="container">
        <div class="profile-card  row">
            <div class="col-12 col-md-6 work-with-us-section">
                <div class="work-with-us-content">
                    <h2>Why work with us?</h2>
                    <p>We don’t just work for you, we work with you. Partner with our team of experts to benefit from:
                    </p>
                    <ul>
                        <li><img src="{{ asset('images/about-us/logo.png') }}" alt="">Unrivalled market
                            knowledge and local expertise</li>
                        <li><img src="{{ asset('images/about-us/logo.png') }}" alt="">Free professional
                            photoshoot to showcase your property</li>
                        <li><img src="{{ asset('images/about-us/logo.png') }}" alt="">Exceptional, dedicated
                            customer service</li>
                        <li><img src="{{ asset('images/about-us/logo.png') }}" alt="">Coverage on all major
                            property websites</li>
                    </ul>
                </div>
            </div>
            <!-- <div class="profile-info d-flex flex-column justify-content-center align-items-start">
                <h3 class="mb-2">Suzanne Vincent</h3>
                <p>Suzanne is our very own estate agency guru. She first started in the industry in 1992 by complete accident, following a misunderstanding at a job interview. Little did she know that it would be the catalyst for a lifelong passion! Fast forward 33 years, and she set up her own independent estate agency, Urban Village, in 2015. Today, she’s all about delivering bespoke, trusted experiences for our clients, with fair and transparent fees and dedicated customer service. When she’s not wowing our clients, you’ll likely find her horse riding or walking her dog.</p>
            </div> -->
            <div class="col-12 col-md-6 p-0 px-lg-3">
                <img src="{{ asset('images/about-us/MaskGroup44.png') }}" alt="" class="profile-image ms-4">
            </div>
        </div>
    </div>
</section>



@include('partials.reviews')

<!-- <div class="container-fluid mt-5"> -->
    <section class="our-story position-relative mt-lg-2">
        <img src="{{ asset('images/about-us/logo.png') }}" alt="">
        <div class="container">
            <h2 class="pt-0">We are Urban Village</h2>
            <div class="body-component">
                <p>
                    <b>Your local Independent Estate Agents for South London properties.
                </p>
                </br>
                </br>
                <p>
                    We know how challenging the London property market can be, which is why we pride ourselves on our
                    dedication to customer service, fair and open fees, local market knowledge and expertise to help you
                    find exactly what you’re looking for.
                    </br>
                    </br>Whether you want to sell, let, buy or rent – we’re here to support you at every step.
                </p>
                <div class="d-flex justify-content-center pt-4 pt-lg-5">
                    <a href="/meet-the-team" class="book-now text-white d-flex justify-content-center align-items-center">MEET
                        THE TEAM</a>
                </div>
            </div>
        </div>
    </section>

<!-- Reviews Section -->
{{-- <div class="reviews-section container-fluid customers-say">
    <h2>See what our customers say</h2>
    <div class="reviews-container pt-2 pt-lg-4">
        <div class="review-card main-review">
            <div class="review-content d-flex flex-column gap-3">
                <div class="">
                    <h3>Excellent</h3>
                    <!-- stars -->
                    <div data-v-5158ce97="" data-v-90132dd2=""
                        class="starCollection Excellent-stars d-flex justify-content-center gap-2 pt-1">
                        <div class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div
                            class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div
                            class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div
                            class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div
                            class="ReviewStar ruk-icon-percentage-star--75"></div>&nbsp;
                    </div>
                </div>
                <div class="d-flex flex-column gap-1 mt-0 average-reviews">
                    <span>4.9 average</span>
                    <span>207 reviews</span>
                </div>
            </div>
            <div class="reviews-io d-flex justify-content-center mt-4">
                <div class="review-star position-relative"><img src="{{ asset('images/about-us/review-star.png') }}"
                        alt=""></div>
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
        <div data-v-90132dd2="" class="ruk-icon-arrow-right-thin-1-01 green-chevron"> <img
                src="{{ asset('images/icons/green-chevron.png') }}"></div>
    </div>
</div> --}}
<br />

<!-- “The level of service is brilliant.”-->
<div class="reviews-section container-fluid our-community Brilliant">
    <h2>“The level of service is brilliant.”</h2>
    <div class="reviews-container pt-2 pt-lg-4 row d-flex justify-content-center row">
        <div class="col-6" style="display: contents;">
            <iframe width="100%" height="591" class=" set-phone-height"
                src="https://player.vimeo.com/video/328369211" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen=""></iframe>
        </div>

    </div>
</div>

<!-- <div class="quote-text">
    “The level of service is brilliant.”
</div> -->

<section class="our-story position-relative my-2 my-lg-5 valuation position-relative">
    <img src="{{ asset('images/about-us/logo.png') }}" alt="">
    <div class="container">
        <h2 class="pt-0">Book a free valuation</h2>
        <div class="body-component text-center mx-0">
            <p>
                Do you know what your property is really worth? Whether you’re looking to sell or let, or you’re just
                curious, book a free valuation with one of our teams today.
            </p>
            <div class="d-flex justify-content-center pt-4 pt-lg-5">
                <a href="#" class="book-now text-white d-flex justify-content-center align-items-center">BOOK
                    NOW</a>
            </div>
        </div>
    </div>
</section>

@include('partials.property-market', ['posts' => $posts])

@include('partials.companies')

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

    $('#mortgage_submit').on('click', function() {

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
        var final_monthly = mortgage_value * (mortgage_interest_final * Math.pow((1 + mortgage_interest_final),
            mortgage_term_months)) / (Math.pow((1 + mortgage_interest_final), mortgage_term_months) - 1);
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

    $("#stamp_submit").click(function(e) {
        e.preventDefault();

        var value = $("input[name=value]").val();
        var country = $("input[name=country]:checked").val();
        var additional = $("input[name=additional]:checked").val();

        $.ajax({

            type: 'POST',
            url: '/calculate-stamp-duty',

            data: {
                "_token": "{{ csrf_token() }}",
                "value": value,
                "country": country,
                "additional": additional
            },

            success: function(data) {
                $("#error-message").hide();

                var effective_rate = 0.0;
                var higher_rates = 'Not Applicable';

                if (data.additional_rate_used == true) {
                    higher_rates = 'Applicable';
                }

                effective_rate = ((data.sdlt_payable / value) * 100).toFixed(2);

                //set values to the output
                $('#tax_payable').html(data.sdlt_payable.toFixed(2));
                $('#effective_rate').html(effective_rate);
                $('#higher_rates').html(higher_rates);
            },

            error: function(xhr, status, error) {
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
