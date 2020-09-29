@extends ('layout15')

@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>New binga</h1>

        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('PUT')

            <div class="field">
                <label for="title" class="label">Update article</label>

                <div class="control">
                    <input type="text" class="input" name="title" id="title" value="{{ $article->title }}">
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>

                <div class="control">
                    <textarea name="excerpt" id="excerpt" class="textarea">{{ $article->excerpt }}</textarea>
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>

                <div class="control">
                    <textarea name="body" id="body" class="textarea">{{ $article->body }}</textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Submit</buton>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection