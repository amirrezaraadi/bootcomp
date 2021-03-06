<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وبلاگ {{ $title ?? '' }}</title>
    <meta name="description"
          content="وب آموز وبسایت آموزش برنامه نویسی وب و موبایل ، جاوااسکریپت ، لاراول ، react ، آموزش node js با مجرب ترین مدرسین">
    <meta name="keywords"
          content="آموزش طراحی سایت,آموزش برنامه نویسی,طراحی وب,ساخت وب سایت,آموزش git,آموزش لاراول,آموزش php,آموزش react,آموزش پی اچ پی,آموزش laravel,آموزش جاوا اسکریپت,آموزش ساخت وب سایت,آموزش mvc,آموزش React Native,وب آموز , وب اموز">
    <link rel="stylesheet" href="{{ asset('/blog/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/blog/css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('/blog/panel/css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('/blog/css/responsive.css') }}" media="(max-width:991px)">
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">-->
</head>
<body>
<header class="c-header">
    <div class="container container--responsive container--white">
        <div class="c-header__row ">
            <div class="c-header__right">
                <div class="logo">
                    <a href="{{ route('landing') }}" ></a>
                </div>
                <div class="c-search width-100 ">
                    <form action="" class="c-search__form position-relative">
                        <input type="text" class="c-search__input" placeholder="جستجو کنید">
                        <button class="c-search__button"></button>
                    </form>
                </div>

            </div>
            <div class="c-header__left">
                <div class="c-header__icons">
                    <div class="c-header__button-search "></div>
                    <div class="c-header__button-nav"></div>
                </div>
                @guest
                    <div class="c-button__login-regsiter">
                        <div><a class="c-button__link c-button--login" href="{{ route('login') }}">ورود</a></div>
                        <div><a class="c-button__link c-button--register" href="{{ route('register') }}">ثبت نام</a></div>
                    </div>
                @else
                <div style="width: 180px;">
                    <div class="dropdown-select wide" id="dropdown-user" onclick="toggleUserDropdown()" tabindex="0">
                        <span class="current">
                        {{ auth()->user()->name }}
                        </span>
                        <div class="list">
                            <ul>
                                <li class="option" data-value="0" data-display-text="" tabindex="0">
                                    <a href="{{ route('profile') }}">پروفایل</a>
                                </li>
                                <li class="option " data-value="0" data-display-text="" tabindex="0" onclick="logoutUser()">
                                    خروج
                                </li>
                            </ul>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                @endguest
            </div>
        </div>
    </div>
    <nav class="nav" id="nav">
        <div class="c-button__login-regsiter d-none">
            <div><a class="c-button__link c-button--login" href="{{ route('login') }}">ورود</a></div>
            <div><a class="c-button__link c-button--register" href="{{ route('register') }}">ثبت نام</a></div>
        </div>
        <div class="container container--nav">
            <ul class="nav__ul">
                <li class="nav__item"><a href="#" class="nav__link">صفحه اصلی</a></li>
                @foreach($categories as $category)
                <li class="nav__item nav__item--has-sub"><a href="#" class="nav__link">{{ $category->name }}</a>
                    <div class="nav__sub">
                        <div class="container d-flex item-center flex-wrap container--nav">
                            @foreach($category->children as $childCategory)
                                <a href="" class="nav__link">{{ $childCategory->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
                @endforeach
                <li class="nav__item"><a href="#" class="nav__link">درباره ما</a></li>
                <li class="nav__item"><a href="#" class="nav__link">تماس باما</a></li>
            </ul>
        </div>
    </nav>
</header>
@yield('main')

<footer class="footer">
    <a href="" class="scroll-top"></a>

    <div class="container">
        <div class="footer__links">
            <a href="" class="footer__link">لینک اول</a>
            <a href="" class="footer__link">لینک اول</a>
            <a href="" class="footer__link">لینک اول</a>
            <a href="" class="footer__link">لینک اول</a>
            <a href="" class="footer__link">لینک اول</a>
            <a href="" class="footer__link">لینک اول</a>
        </div>
        <div class="footer__hr"></div>
        <div class="footer__about">
        >
        </div>
    </div>


</footer>
<div class="overlay"></div>
<script src="{{ asset('/blog/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('/blog/js/js.js') }}"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>-->
<script>
function toggleUserDropdown() {
    document.getElementById('dropdown-user').classList.toggle('open')
}
function logoutUser() {
    document.getElementById('logout-form').submit();
}
</script>

</body>
</html>