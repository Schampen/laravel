@extends ('layout15')

@section ('content')
<div id="wrapper">
    <div id="page" class="container">
    <form method="POST" action="/contact">
        @csrf 
        <div>
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email">

            @error('email') 
                <p> {{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Email me</button>

        @if (session('message'))
        <p>
            {{ session('message') }}
        </p>
        @endif
    </form>
    </div>
</div>
@endsection