@extends('layouts.frontend')

@section('content')
<div class="col-md-8">
                        <div class="row">
                        @foreach($albumnames as $alb)
                            <div class='col-sm-6 col-md-4 space' data-category='logo'>
                                <a class='img-link' href='/view-article/{{ $alb->id }}'>
                                    <img class='img-fluid img-thumb' src='https://dkmzc8tghb19s.cloudfront.net/fit-in/600x600/uploads/{{ $alb->thumbnail}}' alt='test'>
                                    
                                </a>
                            </div>
                            @endforeach
                        </div>
                        </div>

                        <style>
                
          
@endsection


