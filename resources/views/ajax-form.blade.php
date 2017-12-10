<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            /* Forms */
            form label {
                font-weight: normal;
            }

            textarea {
                resize: vertical;
            }

            select {
                border: 1px solid #E5E7E9;
                border-radius: 6px;
                outline: none;
            }

            .label {
                font-weight: normal;
            }

            .form-group:after {
                content: ".";
                display: block;
                clear: both;
                visibility: hidden;
                line-height: 0;
                height: 0;
            }

            .form-control:focus {
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
                border-color: #CCC;
            }

            .form-control.error {
                border-color: #a94442;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            }

            .form-control.error:focus {
                border-color: #843534;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
            }

            /* Forms Validations */
            label.valid {
                display: inline-block;
                text-indent: -9999px;
            }

            label.error {
                color: #c10000;
                font-size: 0.9em;
                line-height: 18px;
                padding: 5px 0 0;
            }

            .hide-box {
                display: none!important;
            }
           
        </style>
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
                        <li><a href="">Simple Table</a></li>
                        <li><a href="">Simple Table</a></li>
                        
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
                                    <textarea maxlength="5000" data-msg-required="Please enter your message" rows="8" class="form-control" name="message" id="message" required></textarea>                       
                                </div>

                                <input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Sending...">
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
    <script src="{{ asset('js/ajax-form.js') }}"></script>

    </body>
</html>
