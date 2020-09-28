@extends ('layout15')

@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2> {{ $article->title }} </h2>
            </div>
            <p><img src=" {{ URL::asset('images/banner.jpg') }}" alt="" class="image image-full" /> </p>
            <p> {{ $article->body }} </p>
            <p> {{ $article->created_at }} </p>
        </div>
    </div>
</div>
@endsection