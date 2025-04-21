    {{-- resources/views/home.blade.php --}}
    @extends('layouts.app')

    @section('title', 'Halaman utama')
    @section('content')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile - PictPocket</title>
        <script type="text/javascript">
            (function() {
                var css = document.createElement('link');
                css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
                css.rel = 'stylesheet';
                css.type = 'text/css';
                document.getElementsByTagName('head')[0].appendChild(css);
            })();
        </script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="stylesheet" href="assets/css/theme.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <a class="navbar-brand font-weight-bolder mr-3"><img src="assets/img/logo3.jpeg"></a>
            <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsDefault">
                <ul class="navbar-nav mr-auto align-items-center">
                    <form class="bd-search hidden-sm-down">
                        <input type="text" class="form-control bg-graylight border-0 font-weight-bold" id="search-input" placeholder="Search..." autocomplete="off">
                        <div class="dropdown-menu bd-search-results" id="search-results"></div>
                    </form>
                </ul>
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/post') }}">Post</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/author') }}"><img class="rounded-circle mr-2" src="assets/img/av.png" width="30"><span class="align-middle">Author</span></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg style="margin-top:10px;" class="_3DJPT" version="1.1" viewbox="0 0 32 32" width="21" height="21" aria-hidden="false" data-reactid="71">
                                <path d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z" data-reactid="22"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="dropdown02">
                            <h4 class="dropdown-header display-4">Sign In / Sign Up</h4>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('login') }}" class="dropdown-item">
                                <button class="btn btn-primary btn-block">Sign In</button>
                            </a>
                            <a href="{{ route('register') }}" class="dropdown-item">
                                <button class="btn btn-success btn-block">Sign Up</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main">
            <div class="jumbotron border-round-0 min-50vh" style="background-image:url(https://images.unsplash.com/photo-1522204657746-fccce0824cfd?ixlib=rb-0.3.5&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;s=84b5e9bea51f72c63862a0544f76e0a3&amp;auto=format&amp;fit=crop&amp;w=1500&amp;q=80);"></div>

            <div class="container mb-4">
                <img src="assets/img/av.png" class="mt-neg100 mb-4 rounded-circle" width="128">
                <h1 class="font-weight-bold title">Luthfiyyah</h1>
                <p>
                    I love Art, Web Design, Photography, Design, Illustration
                </p>

                <!-- Bagian Followers dan Following -->
                <div class="row">
                    <div class="col-6">
                        <h5><strong>Followers</strong></h5>
                        <p id="followers-count">100</p> <!-- Gantilah dengan data followers -->
                    </div>
                    <div class="col-6">
                        <h5><strong>Following</strong></h5>
                        <p id="following-count">50</p> <!-- Gantilah dengan data following -->
                    </div>
                </div>
            </div>
        </main>
    <div class="container-fluid">
    	<div class="row">
    		<div class="card-columns">
    			<!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://plus.unsplash.com/premium_photo-1663045893961-535354f273b9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal1">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://plus.unsplash.com/premium_photo-1663045893961-535354f273b9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1724210434208-9093f66e4b3f?q=80&w=1529&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal2">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal2" tabindex="-2" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1724210434208-9093f66e4b3f?q=80&w=1529&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1585652757141-8837d676fac8?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal3">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal3" tabindex="-3" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1585652757141-8837d676fac8?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal4">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal4" tabindex="-4" role="dialog" aria-labelledby="modal4Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1712056980792-68a32307fe33?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal5">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal5" tabindex="-5" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1712056980792-68a32307fe33?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal6">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal6" tabindex="-6" role="dialog" aria-labelledby="modal6Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://plus.unsplash.com/premium_photo-1661431423340-fa30b97312bc?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal7">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal7" tabindex="-7" role="dialog" aria-labelledby="modal7Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://plus.unsplash.com/premium_photo-1661431423340-fa30b97312bc?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1611143669185-af224c5e3252?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal8">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal8" tabindex="-8" role="dialog" aria-labelledby="modal8Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1611143669185-af224c5e3252?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal9">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal9" tabindex="-9" role="dialog" aria-labelledby="modal9Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1527633412983-d80af308e660?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal10">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal10" tabindex="-10" role="dialog" aria-labelledby="modal10Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1527633412983-d80af308e660?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1557205465-f3762edea6d3?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal11">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal11" tabindex="-11" role="dialog" aria-labelledby="modal11Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1557205465-f3762edea6d3?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1580870069867-74c57ee1bb07?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal12">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal12" tabindex="-12" role="dialog" aria-labelledby="modal12Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1580870069867-74c57ee1bb07?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal13">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal13" tabindex="-13" role="dialog" aria-labelledby="modal13Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1629198688000-71f23e745b6e?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal14">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal14" tabindex="-14" role="dialog" aria-labelledby="modal14Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1629198688000-71f23e745b6e?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1670019494291-8f22328601c0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal15">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal15" tabindex="-15" role="dialog" aria-labelledby="modal15Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1670019494291-8f22328601c0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1614788821231-85f8740c419a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal16">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal16" tabindex="-16" role="dialog" aria-labelledby="modal16Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1614788821231-85f8740c419a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1619954428481-32c125ae19f8?q=80&w=1370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal17">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal17" tabindex="-17" role="dialog" aria-labelledby="modal17Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1619954428481-32c125ae19f8?q=80&w=1370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1607118293209-f043e391cc9b?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal18">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal18" tabindex="-18" role="dialog" aria-labelledby="modal18Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1607118293209-f043e391cc9b?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal19">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal19" tabindex="-19" role="dialog" aria-labelledby="modal19Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="card card-pin">
                <img class="card-img" src="https://plus.unsplash.com/premium_photo-1669687759997-d2b5cee6f46b?q=80&w=1376&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image">
                <div class="overlay">
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#modal20">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                </div>
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="modal20" tabindex="-20" role="dialog" aria-labelledby="modal20Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <img id="modalImage" src="https://plus.unsplash.com/premium_photo-1669687759997-d2b5cee6f46b?q=80&w=1376&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Full Image">
                </div>
                </div>
            </div>
    		</div>
    	</div>
    </div>

    </main>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/theme.js"></script>

    <footer class="footer pt-5 pb-5 text-center">

        <div class="container">

              <div class="socials-media">

                <ul class="list-unstyled">
                  <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-facebook"></i></a></li>
                  <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-twitter"></i></a></li>
                  <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-instagram"></i></a></li>
                  <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-google-plus"></i></a></li>
                  <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-behance"></i></a></li>
                  <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-dribbble"></i></a></li>
                </ul>

              </div>

                <!--
                  All the links in the footer should remain intact.
                  You may remove the links only if you donate:
                  https://www.wowthemes.net/freebies-license/
                -->
              <p>©  <span class="credits font-weight-bold">
                <b>PictPocket</b> by LuthfiyyahKhoirunnisa
              </span>
              </p>


            </div>

        </footer>
</body>
