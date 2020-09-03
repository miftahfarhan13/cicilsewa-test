<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{'css/welcome.css'}}" rel='stylesheet' type='text/css'>

    <title>Co-Kantor</title>
    <style>
        html body {
            height: 100%;
        }

        .jumbotron {
            background-image: url(img/office.jpg);
            background-size: cover;
            text-align: center;
            height: 100%;
            position: relative;
        }

        .jumbotron .container {
            position: relative;
            z-index: 1;
        }


        .jumbotron .display-4 {
            color: white;
            font-weight: 500;
            font-size: 40px;
            margin-top: 150px;
        }

        .jumbotron::after {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        }

        .jumbotron .display-4 {
            font-weight: 500;
            font-size: 50px;
            color: white;
        }

        .navbar {
            position: relative;
            z-index: 1;
        }

        .navbar-brand {
            font-weight: 400;
            font-size: 20px;
        }

        .card {
            height: 100%;
        }

        .card-text h5 {
            color: #DEB887;
            text-align: center;
            font-weight: 600;
        }

        .card-text p {
            color: black;
            text-align: center;
            font-weight: 500;
        }

        .card {
            border-radius: 0px;
            border: none;
        }

        .info-container {
            margin-top: 10px;
        }

        .info-line {
            width: 180px;
            height: 8px;
            background-color: #DEB887;
            border: #DEB887;
            margin-bottom: 20px;
            margin-top: 20px;
            float: left;
        }

        .info-right {
            margin-right: 10px;
        }

        .info-right h3 {
            font-weight: 700;
            font-size: 40px;
            color: black;
        }

        .info-right p {
            float: left;
        }

        .question-title {
            font-weight: 700;
            font-size: 40px;
            color: black;
            text-align: center;
            margin-bottom: 50px;
            margin-top: 100px;
        }

        .question-info,
        .container-question {
            background-color: #055B66;
            margin-top: 100px;
            margin-bottom: 100px;
            color: white;
        }

        .img-question {
            width: 50px;
            height: 50px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .info-info {
            margin-top: 100px;
        }

        .price-info {
            margin-top: 100px;
        }

        .price-info img {}

        .container-footer{
            background-color: #055B66;
        }

        @media (min-width: 992px) {

            .navbar-brand,
            .nav-link {
                color: white !important;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
                font-weight: 500;
            }

            .nav-link:hover::after {
                content: '';
                display: block;
                border-bottom: 3px solid #FFFFFF;
                width: 50%;
                margin: auto;
                padding-bottom: 5px;
                margin-bottom: -8px;
            }

            .jumbotron {
                margin-top: -86px;
                height: 740px;
            }

            .jumbotron .display-4 {
                font-size: 62px;
            }

        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <h2 class="navbar-brand">Co-Kantor</h2>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link mx-3" href="#">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p class="display-4">KICKSTART YOUR BUSINESS NOW</p>
            <p style="color:white; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
        </div>
    </div>

    <div class="container price-info">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/office3.jpg" style="height: 250px;" class="card-img-top" alt="...">
                    <div class="card-body card-text">
                        <h5 class="card-title">JAKARTA</h5>
                        <p class="card-text">From IDR 5.000.000</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/office2.JPG" style="height: 250px;" class="card-img-top" alt="...">
                    <div class="card-body card-text">
                        <h5 class="card-title">BANDUNG</h5>
                        <p class="card-text">From IDR 5.000.000</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/office3.jpg" style="height: 250px;" class="card-img-top" alt="...">
                    <div class="card-body card-text">
                        <h5 class="card-title card-text">SURABAYA</h5>
                        <p class="card-text">From IDR 5.000.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row info-info">
        <div class="col-sm">
            <img src="img/office3.jpg" class="card-img-top" alt="...">
        </div>
        <div class="col-sm">
            <div class="info-right">
                <h3>Find Your Best Working<br> Environment With Us</h3>
                <hr class="info-line">
                <p>printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                    the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing
                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                    including
                    versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>

    <h3 class="question-title">Why Choose Co-Kantor?</h3>

    <div class="question-info">
        <div class="container container-question">
            <div class="row justify-content-center">
                <div class="col-10 info-panel">
                    <div class="row mt-5 mb-5">
                        <div class="col-lg justify-content-center mx-3">
                            <img src="/img/settings.svg" style="text-align: center;" alt="communications"
                                class="img-question img-fluid">
                            <div class="before-hover">
                                <h4 class="mt-4" style="text-align: center;">Support</h4>
                                <p class="mt-4" style="text-align: center;">printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard dummy
                                    text ever since
                                    the 1500s</p>
                            </div>
                            <div class="after-hover" hidden>
                                <button type="button" class="btn btn-primary">Primary</button>
                            </div>
                        </div>
                        <div class="col-lg justify-content-center mx-3">
                            <img src="/img/security.svg" style="text-align: center;" alt="multimedia"
                                class="img-question">
                            <h4 class="mt-4" style="text-align: center;">Security</h4>
                            <p class="mt-4" style="text-align: center;">printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy
                                text ever since
                                the 1500s</p>
                        </div>
                        <div class="col-lg justify-content-center mx-3">
                            <img src="/img/shield.svg" style="text-align: center;" alt="location" class="img-question">
                            <h4 class="mt-4" style="text-align: center;">Safety</h4>
                            <p class="mt-4" style="text-align: center;">printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy
                                text ever since
                                the 1500s</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    </div>

</body>

<script>
    $(document).ready(function () {
        // executes when HTML-Document is loaded and DOM is ready
        console.log("document is ready");
        $(".card").hover(
            function () {
                $(this).addClass('shadow-lg').css('cursor', 'pointer');
            },
            function () {
                $(this).removeClass('shadow-lg');
            }
        );
        // document ready  
    });

</script>

</html>
