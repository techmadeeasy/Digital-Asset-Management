@extends('layouts.frontend')

@section('content')
<div class="col-md-8">
                        <div class="row">
                        @foreach($albumnames as $alb)
                            <div class='col-sm-6 col-md-4 space' data-category='logo'>
                                <a class='img-link' href='/view-article/{{ $alb->id }}'>
                                    <img class='img-fluid img-thumb' src='https://dkmzc8tghb19s.cloudfront.net/fit-in/600x600/uploads/{{ $alb->thumbnail}}' alt='test'>
<<<<<<< HEAD
                                    
=======
>>>>>>> 1b360367b41186be9c2cdd235eecc62e8003ad60
                                </a>
                            </div>
                            @endforeach
                        </div>
                        </div>
<<<<<<< HEAD

                        <style>
                
          
=======
>>>>>>> 1b360367b41186be9c2cdd235eecc62e8003ad60
@endsection


