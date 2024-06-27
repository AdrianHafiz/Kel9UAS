<div class="container">
    <div class="feedback-list">
        <h4>All Feedback</h4>
        @forelse($feedbacks as $fb)
            <div class="comment">
                <p>{{ $fb->feedback }}</p>
                <small>Submitted at: {{ $fb->created_at }}</small>
            </div>
        @empty
            <p>No feedback yet.</p>
        @endforelse
    </div>
</div>