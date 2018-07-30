@extends('layouts.app')
@section('content')
<header class="bg-gradient" id="home">
    <div class="container mt-5">
        <h1>خالد باوزير</h1>
        <p class="tagline">
            إسمي خالد باوزير من مواليد مدينة جدة بنهاية عام 1989، خريج علوم حاسوب من ماليزيا وأعمل كمطور برمجيات، مهتم في البرمجة والطيران والموسيقى.
        </p>
    </div>
    <div class="img-holder mt-3">
        <img src="images/khaled_bawazir.jpg" alt="Khaled Bawazir" class="rounded-circle img-fluid" width="300" height="300">
    </div>
</header>

<div class="section light-bg">
    <div class="container">
        <div class="section-title">
            <h3>المقالات</h3>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 mt-10 text-right">
                <single-article></single-article>
            </div>
        </div>
    </div>
</div>
<!-- // end .section -->

<div class="section" id="cv">
    <div class="container">
        <div class="section-title">
            <h3>السيرة الذاتية</h3>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 mt-10 text-center">
                <p>عزيزي القارئ بإمكانك مشاهدة السيرة الذاتية الخاصة بي عبر الرابط التالي</p>
                <br>
                <a href="{{ url('/attachments/cv.pdf') }}" class="btn btn-primary">مشاهدة السيرة الذاتية</a>
            </div>
        </div>
    </div>
</div>


<div class="light-bg py-5" id="contact">
    <div class="container">
        <div class="section-title">
            <h3>تواصل معي</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 text-center text-lg-right">
                <div class=" d-block d-sm-inline-block">
                    <p class="mb-2">
                    <span class="fa fa-envelope mr-2"></span> البريد الإلكتروني </br><a class="mr-4" href="mailto:devkhaledz@gmail.com">devkhaledz@gmail.com</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="social-icons">
                    <a href="https://github.com/khaledBawz" target="_blank"><span class="fa fa-github"></span></a>
                    <a href="https://twitter.com/KhaledBawz" target="_blank"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.instagram.com/khaledbawz/" target="_blank"><span class="fa fa-instagram"></span></a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection