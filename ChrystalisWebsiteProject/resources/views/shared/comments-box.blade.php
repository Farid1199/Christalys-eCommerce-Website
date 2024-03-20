
<div class="container my-4">
    <h3 class="mb-3">Customer Reviews</h3>
    @auth
    

    <form action="/submit_review" method="POST" class="mb-4">
        @csrf
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select name="rating" id="rating" class="form-control" style="width: auto;">
                <option value="5">★★★★★</option>
                <option value="4">★★★★☆</option>
                <option value="3">★★★☆☆</option>
                <option value="2">★★☆☆☆</option>
                <option value="1">★☆☆☆☆</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea name="comment" id="comment" rows="3" class="form-control"></textarea>
        </div>
        <!-- Hidden input for product_id -->
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        
        <button type="submit" class="btn btn-success">Submit Review</button>
    </form>

    @else 

    <h7>You have to be logged in to post a review</h7>
    
    @endauth
    
    @foreach($product->reviews as $review)
    <div class="review mb-3">
        <div class="rating">{{ str_repeat('★', $review->rating) . str_repeat('☆', 5 - $review->rating) }}</div>
        <p class="comment">{{ $review->comment }}</p>
        <small class="text-muted">Posted by {{ $review->user->name }} on {{ $review->created_at->format('Y-m-d') }}</small>
    </div>
@endforeach

</div>















<style>
    .review {
        background-color: #f8f9fa; /* Matching album background */
        padding: 15px;
        border-radius: 0.25rem; /* Consistent with album border radius */
        box-shadow: 0 2px 4px rgba(0,0,0,.1); /* Soft shadow for depth */
    }

    .review .rating {
        color: #ffc107; /* Gold color for stars */
        font-size: 20px; /* Larger stars */
    }

    .review p.comment {
        font-size: 16px; /* Readable text size */
        color: #333; /* Dark grey for contrast */
        margin-top: 5px; /* Spacing between rating and comment */
    }

    .review small.text-muted {
        display: block; /* New line for date */
        margin-top: 10px; /* Spacing above date */
        font-size: 14px; /* Smaller, subtle date */
    }
</style>

