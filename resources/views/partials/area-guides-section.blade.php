<!-- resources/views/partials/area-guides-section.blade.php -->
<div class="area-guides-section">
    <style>
        .area-guides-section {
    text-align: center; /* Center-aligns the text */
    padding: 20px; /* Padding around the section */
    margin: 0 auto; /* Centers the section horizontally */
    max-width: 800px; /* Sets a maximum width for the content */
}

.area-guides-heading {
    color: #A22D6C; /* Heading color */
    font-size: 32px; /* Font size for the heading */
    margin-bottom: 10px; /* Margin below the heading */
    font-family: 'DM Serif Display', serif; /* Font family for the heading */
    font-weight: normal; /* Normal font weight */
}

.area-guides-subtitle {
    color: #333; /* Subtitle text color */
    font-size: 18px; /* Font size for the subtitle */
    line-height: 1.5; /* Line height for better readability */
    margin: 0; /* No margin to keep it tight to the heading */
}

        </style>
    <h2 class="area-guides-heading">{{ $heading }}</h2>
    <p class="area-guides-subtitle">
        {{ $subtitle }}
    </p>
</div>
