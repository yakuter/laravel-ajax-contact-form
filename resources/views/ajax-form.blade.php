<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ajax Contact Form</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        
    </head>
    <body>

        <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://www.yakuter.com" target="_blank">Yakuter</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Laravel Ajax Contact Form</h2>
                        </div>

                        <div class="panel-body">

                            <div class="alert alert-success hide-box mt-4" id="contactSuccess">
                                <p><strong>Success!</strong> We got your message.</p>
                            </div>
                            
                            <div class="alert alert-danger hide-box mt-4" id="contactError">
                                <p><strong>Error!</strong> Problem sending message</p>
                                <span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
                            </div>

                            <form id="contactForm" action="{{ url('/send') }}" method="POST">
                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                
                                <div class="form-group">
                                    <label>Name Surname *</label>
                                    <input type="text" value="" data-msg-required="Please enter your name and surname" maxlength="100" class="form-control" name="name" id="name" placeholder="Name Surname" required>
                                </div>

                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" value="" data-msg-required="Please enter your email" data-msg-email="Please entera valid email" maxlength="100" class="form-control" name="email" id="email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <label>Message *</label>
                                    <textarea maxlength="5000" data-msg-required="Please enter your message" rows="8" class="form-control" name="message" id="message" placeholder="Message" required></textarea>                       
                                </div>

                                <input type="submit" value="Send Message" class="btn btn-primary" data-loading-text="Sending...">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="{{ asset('js/jquery.validation.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>
