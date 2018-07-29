@extends('layouts.app')
@section('content')

<header class="bg-gradient"></header>

<div class="section light-bg text-right">
    <div class="container">
        <div class="section-title">
            <h3>تعديل مقالة</h3>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 mt-10">
                @include('partials.app.messages')
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                            <div class="media-body">
                                <form method="POST" action="{{ route('app.article.update', $article) }}">
                                {{ method_field('PATCH') }}
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">العنوان</label>
                                        <input type="text" id="title" class="form-control" name="title" value="{{ $article->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">المحتوى</label>
                                        <textarea id="summernote" name="body">{{ $article->body }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="ارسال"></input>
                                    </div>
                                </form>
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