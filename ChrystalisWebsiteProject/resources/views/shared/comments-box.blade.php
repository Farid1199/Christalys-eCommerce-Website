<div class="container my-4" style="animation: fadeIn 1s;">
<h2 class="fw-bolder mb-4">Customer Reviews</h2>
    @auth
    <form action="/submit_review" method="POST" class="mb-4" style="border: 2px solid #FFD700; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
        @csrf
        <div class="mb-3">
            <label for="rating" class="form-label" >Rating</label>
            <select name="rating" id="rating" class="form-control" style="width: auto; border: 1px solid ;">
                <option value="5">★★★★★</option>
                <option value="4">★★★★☆</option>
                <option value="3">★★★☆☆</option>
                <option value="2">★★☆☆☆</option>
                <option value="1">★☆☆☆☆</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label" >Comment</label>
            <textarea name="comment" id="comment" rows="3" class="form-control" style=" border: 1px solid ;"></textarea>
        </div>
        <!-- Hidden input for product_id -->
        <input type="hidden" name="product_id" value="{{ $product->id }}">

        <button type="submit" class="btn" style="background-color: #FFD700; border: none;">Submit Review</button>
    </form>
    @else
    <h5 class="my-3">You have to be logged in to post a review</h5>
    @endauth

    @foreach($product->reviews as $review)
    <div class="review mb-3" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
        <div class="rating" style="color: #FFD700; font-size: 24px;">{{ str_repeat('★', $review->rating) . str_repeat('☆', 5 - $review->rating) }}</div>
        <p class="comment" style="color: #333; margin-top: 10px;">{{ $review->comment }}</p>
        <small class="text-muted" style="display: block; margin-top: 10px; color: #999;">Posted by {{ $review->user->name }} on {{ $review->created_at->format('Y-m-d') }}</small>
    </div>
@endforeach

</div>

<style>
    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    .review:hover {
        transform: scale(1.03);
    }
</style>















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

