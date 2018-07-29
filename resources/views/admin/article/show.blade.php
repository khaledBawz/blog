@extends('layouts.app')
@section('content')

<header class="bg-gradient"></header>

<div class="section light-bg text-right">
    <div class="container">
        <div class="section-title">
            <h3>{{ $article->title }}</h3>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 mt-10">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                            <div class="media-body">
                                {!! html_entity_decode($article->body) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // end .section -->

@endsection