@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cookie Policy</li>
    </ol>
</div>

<div class="intro">
    <div class="container">
        <div class="row row-eq-height">
            <!-- Intro Content -->
            <div class="col-lg-12">
                <div class="intro_content">
                    <div class="section_title_container">
                    <h1 class="main-title">Cookie Policy</h1>
                    </div>
                    <div class="intro_text">
                        <p>This website uses cookies to better the users experience while visiting the website. Where applicable this website uses a cookie control system allowing the user on their first visit to the website to allow or disallow the use of cookies on their computer / device. This complies with recent legislation requirements for websites to obtain explicit consent from users before leaving behind or reading files such as cookies on a user's computer / device.</p>
                        <p>Cookies are small files saved to the user's computers hard drive that track, save and store information about the user's interactions and usage of the website. This allows the website, through its server to provide the users with a tailored experience within this website.</p>
                        <p>Users are advised that if they wish to deny the use and saving of cookies from this website on to their computers hard drive they should take necessary steps within their web browsers security settings to block all cookies from this website and its external serving vendors.</p>
                        <p>This website uses tracking software to monitor its visitors to better understand how they use it. This software is provided by Google Analytics which uses cookies to track visitor usage. The software will save a cookie to your computers hard drive in order to track and monitor your engagement and usage of the website, but will not store, save or collect personal information. You can read Google's privacy policy here for further information [ http://www.google.com/privacy.html ].</p>
                        <p>Other cookies may be stored to your computers hard drive by external vendors when this website uses referral programs, sponsored links or adverts. Such cookies are used for conversion and referral tracking and typically expire after 30 days, though some may take longer. No personal information is stored, saved or collected.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
