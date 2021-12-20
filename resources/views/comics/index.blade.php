@extends ('layouts.app')


@section('content')
    <h1>Comics page</h1>

    @foreach($comics as $comic)
        <div class="comic">
            <div class="poster">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}} poster">
            </div>
            <p>{{$comic['series']}}</p>
        </div>
    @endforeach
@endsection