@extends('index')

@section('main')
    <div class="container">
        <h1>Pure Css Responsive Masonry Gallery</h1>
        <div class="col-md-12">
            <div class="row">
                <hr>

                <div class="gal" id="gal">
                    {{--<img src="https://media.giphy.com/media/FYqf889lXd9Ru/giphy.gif"  alt='' >--}}
                    @foreach($gifs as $gif)
                        <img src="{{$gif->url}}"  alt='' >
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
