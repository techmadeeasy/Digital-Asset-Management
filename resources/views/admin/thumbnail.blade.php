@extends('layouts.layout')


@section('content')
<div class="content">
<h2 class="content-heading">{{ $album_name[0]->names }}</h2>
                    <div class="row items-push">
                    @foreach($get_thumb as $thumb)
                        <div class="col-md-4 animated fadeIn">
                            <div class="options-container fx-item-zoom-in">
                                <img class="img-fluid options-item" src="https://dkmzc8tghb19s.cloudfront.net/fit-in/360x360/uploads/{{ $thumb->thumbnail }}" alt="thumbnail">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5"></h3>
                                        <h4 class="h6 text-white-op mb-15"></h4>
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="/delete/{{$thumb->id}}/thumbnail">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <style>
                    @media (min-width: 1200px){
                    #page-container.main-content-narrow>#main-container .content, #page-container.main-content-narrow>#page-footer .content, #page-container.main-content-narrow>#page-header .content, #page-container.main-content-narrow>#page-header .content-header{
                        max-width:65%;
                    }}
                    </style>
@endsection