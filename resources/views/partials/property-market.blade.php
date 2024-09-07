<!-- resources/views/partials/property-market.blade.php -->
<div class="property-market-section container">
    <style>
    
    </style>
    <h2>What's happening in the property market?</h2>
    <div class="property-market-container pt-4">
        @foreach($posts as $post)
            <div class="property-card">
                <!-- Adjust image path accordingly -->
                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="profile-image">
                <div class="property-card-content">
                    <span class="category">{{ $post->category->name }} <span class="read-time">| 5 MINS READ</span></span>
                    <h3>{{ $post->title }}</h3>
                    <br>
                    <div class="author">
                        <a href="{{ url('blog/view/'.$post->slug) }}" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
