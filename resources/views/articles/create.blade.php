@extends ('layout15')

@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>New binga</h1>

        <form method="POST" action="/articles">
            @csrf

            <div class="field">
                <label for="title" class="label">Title</label>

                <div class="control">
                    <input type="text" class="input" name="title" id="title" value="{{ old('title') }}">
                    @error ('title')
                        <p> {{ $errors->first('title') }} </p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>

                <div class="control">
                    <textarea name="excerpt" id="excerpt" class="textarea">{{ old('excerpt') }}</textarea>
                    @error ('excerpt')
                        <p> {{ $errors->first('excerpt') }} </p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>

                <div class="control">
                    <textarea name="body" id="body" class="textarea">{{ old('body') }}</textarea>
                    @error ('body')
                        <p> {{ $errors->first('body') }} </p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Tags</label>

                <div class="control">
                    <select name="tags[]" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"> {{ $tag->name }} </option>
                        @endforeach
                    </select>
                    @error ('tags')
                        <p> {{ $message }} </p>
                    @enderror
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