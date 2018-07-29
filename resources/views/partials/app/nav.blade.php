<!-- Nav Menu -->
<div class="nav-menu fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <a class="navbar-brand" href="{{ url('/') }}">
                    مدونة خالد باوزير</a> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a href="#home" class="nav-link active">الصفحة الرئيسية</a> </li>
                            <li class="nav-item"> <a href="#cv" class="nav-link">السيرة الذاتية </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#contact">تواصل معي</a> </li>
                            @if(auth::user())
                            <form action="/logout" method="POST" id="logout">
                            <li class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="document.getElementById('logout').submit();">تسجيل الخروج</a>
                            <input type="hidden" name="logout"/>
                            @csrf
                            </li>
                            </form>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>