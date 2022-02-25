<header class="main-header default">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                <div class="logo-area default">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ Voyager::Image(setting('site.logo')) }}" alt="{{ setting('site.title') }}">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-8 col-7">
                <div class="search-area default">
                    <form action="" class="search">
                        <input type="text" placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                        <button type="submit"><img src="{{ asset('assets/img/search.png') }}" alt="{{ setting('site.title') }}"></button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="user-login dropdown">
                    <a href="#" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown"
                       id="navbarDropdownMenuLink1">
                        ورود / ثبت نام
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        <div class="dropdown-item">
                            <a class="btn btn-info">ورود به {{ setting('site.title') }}</a>
                        </div>
                        <div class="dropdown-item font-weight-bold">
                            <span>کاربر جدید هستید؟</span> <a class="register" href="#">ثبت‌نام</a>
                        </div>
                    </ul>
                </div>
                <div class="cart dropdown">
                    <a href="#" class="btn dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink1">
                        <i class="now-ui-icons shopping_cart-simple"></i>
                        سبد خرید
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        <div class="basket-header">
                            <div class="basket-total">
                                <span>مبلغ کل خرید:</span>
                                <span> ۰</span>
                                <span> تومان</span>
                            </div>
                            <a href="#" class="basket-link">
                                <span>مشاهده سبد خرید</span>
                                <div class="basket-arrow"></div>
                            </a>
                        </div>
                        <ul class="basket-list">
                            <li>
                                <a href="#" class="basket-item">
                                    <div class="basket-item-content">
                                        <div class="basket-item-details">
                                            <div class="basket-item-title">سبد خرید خالیست !</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="#" class="basket-item">--}}
{{--                                    <button class="basket-item-remove"></button>--}}
{{--                                    <div class="basket-item-content">--}}
{{--                                        <div class="basket-item-image">--}}
{{--                                            <img alt="" src="{{ asset('assets/img/cart/2324935.jpg') }}">--}}
{{--                                        </div>--}}
{{--                                        <div class="basket-item-details">--}}
{{--                                            <div class="basket-item-title">هندزفری بلوتوث مدل S530--}}
{{--                                            </div>--}}
{{--                                            <div class="basket-item-params">--}}
{{--                                                <div class="basket-item-props">--}}
{{--                                                    <span> ۱ عدد</span>--}}
{{--                                                    <span>رنگ مشکی</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                        <a href="#" class="basket-submit">ورود و ثبت سفارش</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu">
        <div class="container">
            {{ menu('site', 'layout.myHeader') }}
        </div>
    </nav>
</header>
