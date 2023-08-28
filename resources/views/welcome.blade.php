<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crocus Tour</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>

<body>
    <header>
        <div class="container">
            <div class="navbar-wrapper">
                <div class="logo">
                    <a href="#"><img src="{{ asset('assets/images/logo.png') }}" alt="" width="200"
                            height="auto"></a>
                </div>
            </div>
            <div class="hero-wrapper">
                <div>Crocus<br>Tour</div>
                <p>Забронировать тур</p>
            </div>
            <div class="tours">
                <div class="container">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="start_date">Дата начала:</label>
                                    <input type="date" class="form-control" id="start_date"
                                        name="start_date"><br><br>
                                </div>
                                <div class="col-md-6">
                                    <label for="end_date">Дата окончания:</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date"><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="city">Город:</label>
                                    <input type="text" class="form-control" id="city" name="city"><br><br>
                                </div>
                                <div class="col-md-6">
                                    <label for="country">Страна:</label>
                                    <input type="text" class="form-control" id="country" name="country"><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="adults">Количество взрослых:</label>
                                    <input type="number" class="form-control" id="adults" name="adults"><br><br>
                                </div>
                                <div class="col-md-6">
                                    <label for="children">Число детей:</label>
                                    <input type="number" class="form-control" id="children" name="children"><br><br>
                                </div>
                            </div>
                        </div>
                        <label for="tours">Доступные туры:</label>
                        <div style="border: 1px solid black;">
                            <ul>
                                <li>Нет доступных туров</li>
                            </ul>
                        </div>
                        <br><br>
                        <input type="checkbox" id="terms" name="terms">
                        <label for="terms">Я принимаю условия пользовательского соглашения</label><br><br>
                        <input type="submit" class="btn btn-primary" value="Искать">
                    </form>
                </div>
            </div>
        </div>
        <div class="logos_wrapper">
            <a href="https://payme.uz/"><img src="{{ asset('assets/images/payme.svg') }}" alt=""></a>
            <a href="https://my.click.uz/"><img src="{{ asset('assets/images/click.png') }}" alt=""></a>
            <a href="https://uzumbank.uz/cabinet/ru/login"><img src="{{ asset('assets/images/uzum.png') }}" alt=""></a>
        </div>
    </header>

    <main style="height: 500px"></main>

    <footer id="contacts">
        <div class="footer-card">
            <div class="container">
                <div class="contact-heading">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('assets/images/logo.png') }}" alt="" width="200"
                                height="auto"></a>
                    </div>
                    <h4 class="footer-heading"> @lang('public.contacts')</h4>
                </div>
                <div class="navbar-wrapper footer-nav">
                    <nav class="d-flex justify-content-end">
                        <div class="social-media">
                            <a class="tel" href="tel:+998 959555555">+998 959555555</a>
                            <a href="https://t.me/crocustouruz"><img src="{{ asset('assets/images/telegram.svg') }}"
                                    width="30" alt=""></a>
                            <a href="https://www.instagram.com/crocustour.uz"><img
                                    src="{{ asset('assets/images/instagram.svg') }}" width="30"
                                    alt=""></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="footer-empty"></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
