@foreach ($discussions as $discussion)
    <div>
        <h3>{{ $discussion->title }}</h3>
        <div>
            Latest post by {{ $discussion->latestPost->user->name }}
        </div>
    </div>
@endforeach
