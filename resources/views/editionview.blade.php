@extends('layouts.frontend')

@section('content')
<div class="col-md-8">
                        <div class="row">
                        @foreach($editionlist as $edit)
                            <div class='col-sm-6 col-md-4 space' data-category='logo'>
                                <a class='img-link' href='/article/{{ $edit->id}}'> 
                                <img class='img-fluid img-thumb' src='https://dkmzc8tghb19s.cloudfront.net/fit-in/600x600/uploads/{{ $edit->thumbnail }}' alt='test'>
                                <div class='overlay'><div class='text'>{{ $edit->name}}</div></div>
                                </a>
                            </div>
                    @endforeach

                        </div>
                        </div>
<style>
                        .imagexx {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
}

.space:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  background-color: #0bb4b1;
padding-top: 5px;
padding-bottom: 5px;
padding-left: 15px;
padding-right: 15px;
}
            </style>
@endsection
