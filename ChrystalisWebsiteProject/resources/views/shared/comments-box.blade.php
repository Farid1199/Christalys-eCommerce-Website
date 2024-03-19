
<div class="container my-4">
    <h3 class="mb-3">Customer Reviews</h3>
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
        <button type="submit" class="btn btn-success">Submit Review</button>
    </form>
    
    <div class="reviews">
        {{-- Loop through reviews here --}}
        <div class="review mb-3">
            <div class="rating">★★★★☆</div>
            <p class="comment">Great product, fast delivery!</p>
            <small class="text-muted">Posted by John Doe on 2024-03-19</small>
        </div>
        {{-- Repeat for other reviews --}}
    </div>
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

