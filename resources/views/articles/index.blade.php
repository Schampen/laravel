@extends ('layout15')

@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        @forelse ($articles as $article)
        <div id="content">
            <div class="title">
                <a href="{{ $article->path() }}">
                    <h2> {{ $article->title }} </h2>
                </a>
            </div>
            <p><img src=" {{ URL::asset('images/banner.jpg') }}" alt="" class="image image-full" /> </p>
            <p> {{ $article->excerpt }} </p>
            <p> {{ $article->created_at }} </p>
        </div>
        @empty
        <p>No relevant articles yet</p>
        @endforelse
    </div>
</div>
@endsection