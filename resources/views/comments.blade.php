@foreach($comments as $comment)
    <div class="comment">
        <p>{{ $comment->feedback }}</p>
        <small>Submitted at: {{ $comment->created_at }}</small>
    </div>
@endforeach

@forelse($comments as $comment)
    <div class="comment">
        <p>{{ $comment->feedback }}</p>
        <small>Submitted at: {{ $comment->created_at }}</small>
    </div>
@empty
    <p>No comments yet.</p>
@endforelse

@foreach($comments as $comment)
    <div class="comment">
        <p>{{ $comment->feedback }}</p>
        <small>Submitted at: {{ $comment->created_at }}</small>
        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endforeach

@foreach($comments as $comment)
            <div class="comment">
                <p>{{ $comment->feedback }}</p>
                <small>Submitted at: {{ $comment->created_at }}</small>
            </div>
        @endforeach
    </div>
