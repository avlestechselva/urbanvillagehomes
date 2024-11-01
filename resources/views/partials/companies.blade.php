<style>
    #about-us-carousel .item img {
    width: 500px; /* Set a fixed width for all logos */
    height: 150px; /* Set a fixed height for all logos */
    object-fit: contain; /* This ensures the image fits within the width/height without being distorted */
    display: block;
    margin: 0 auto; /* Center the images */
}

    #about-us-carousel .item {
        display: flex;
        align-items: center;
        justify-content: center;
        height: auto; /* Adjust as needed */
    }
</style>
<div class="hot logo-spinner" style="margin-bottom:-32px;">
    <div class="container">
        <div class="carousel-wrap">
            <div class="owl-carousel" id="about-us-carousel">
               
                <div class="item"><a href="https://www.hometrack.com/uk" target="_blank"><img src="{{ asset('images/logo/hometrackx.png') }}" class="img-responsive"></a></div>
                <div class="item"><a href="https://www.primelocation.com" target="_blank"><img src="{{ asset('images/logo/primelocationx.png') }}" class="img-responsive"></a></div>
                <div class="item"><a href="https://www.rightmove.co.uk/" target="_blank"><img src="{{ asset('images/logo/rightmove-colour.svg') }}" class="img-responsive"></a></div>
            
                <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/Tenant.png') }}" class="img-responsive" /></a></div>
                
                <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/arla-colour.svg') }}" class="img-responsive" /></a></div>
                <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/zoopla-colour.svg') }}" class="img-responsive" /></a></div>
                <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/jupixx.png') }}" class="img-responsive"></a></div>
                <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/ctsi.png') }}" class="img-responsive"></a></div>
                <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/ombustman.png') }}" class="img-responsive"></a></div>
                
        
                <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/safeagent-colour.svg') }}" class="img-responsive"></a></div>
                
                <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/tsi-colour.svg') }}" class="img-responsive"></a></div>
                
            </div>
        </div>
        <div class="custom-nav d-none d-lg-block">
            <span class="custom-prev d-none d-md-block">
            <img src="{{ asset('images/icons/left-chevron.png') }}" >
            <!-- <i class="fa-solid fa-chevron-left"></i> -->
                <div data-v-90132dd2="" class="ruk-icon-arrow-left-thin-1-01"></div>
            </span>
            <span class="custom-next d-none d-md-block">
            <img src="{{ asset('images/icons/right-chevron.png') }}" >
            <!-- <i class="fa-solid fa-chevron-right"></i> -->
                <div data-v-90132dd2="" class="ruk-icon-arrow-right-thin-1-01"></div>
            </span>
        </div>
    </div>
</div>