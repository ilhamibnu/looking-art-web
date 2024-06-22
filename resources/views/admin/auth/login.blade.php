<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}">
    <title>Login - Sistem Informasi Pencari Art</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlite.css?ver=3.2.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/assets/css/theme.css?ver=3.2.3') }}">
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');

    </script>
</head>
<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a></div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5"><a href="/admin/login" class="logo-link"><img class="logo-light logo-img logo-img-lg" src="{{ ('admin/images/logo.png') }}" srcset="images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img logo-img-lg" src="{{ asset('admin/images/logo-dark.png') }}" srcset="../../images/logo-dark2x.png 2x" alt="logo-dark"></a></div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-In</h5>
                                        <div class="nk-block-des">
                                            <p>Access the DashLite panel using your email and passcode.</p>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show mt-2  mb-2">



                                    <?php

                                $nomer = 1;

                                ?>

                                    @foreach ($errors->all() as $error)
                                    <li>{{ $nomer++ }}. {{ $error }}</li>
                                    @endforeach
                                </div>
                                @endif
                                <form action="/admin/login" method="POST" class="form-validate is-alter" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="email-address">Email or Username</label><a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a></div>
                                        <div class="form-control-wrap"><input autocomplete="off" name="email" type="text" class="form-control form-control-lg" required="" id="email-address" placeholder="Enter your email address or username"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="password">Passcode</label><a class="link link-primary link-sm" tabindex="-1" href="auth-reset.html">Forgot Code?</a></div>
                                        <div class="form-control-wrap"><a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password"><em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em></a><input autocomplete="new-password" type="password" name="password" class="form-control form-control-lg" required="" id="password" placeholder="Enter your passcode"></div>
                                    </div>
                                    <div class="form-group"><button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button></div>
                                </form>
                                <div class="form-note-s2 pt-4"> New on our platform? <a href="auth-register.html">Create an account</a></div>
                                <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                </div>
                                <ul class="nav justify-center gx-4">
                                    <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3 fs-13px" href="#">Facebook</a></li>
                                    <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3 fs-13px" href="#">Google</a></li>
                                </ul>
                                <div class="text-center mt-5"><span class="fw-500">I don't have an account? <a href="#">Try 15 days free</a></span></div>
                            </div>
                            <div class="nk-block nk-auth-footer">
                                <div class="mt-3">
                                    <p>&copy; 2023 DashLite. All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img"><img class="round" src="{{ asset('admin/images/slides/promo-a.png') }}" srcset="images/slides/promo-a2x.png 2x" alt=""></div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img"><img class="round" src="{{ asset('admin/images/slides/promo-b.png') }}" srcset="../../images/slides/promo-b2x.png 2x" alt=""></div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img"><img class="round" src="{{ asset('admin/images/slides/promo-c.png') }}" srcset="../../images/slides/promo-c2x.png 2x" alt=""></div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/bundle.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/demo-settings.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/charts/chart-lms.js?ver=3.2.3') }}"></script>

    @if (Session::get('logout'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: 'Success'
            , text: 'Logout Successfully'
            , showConfirmButton: false
            , timer: 1500
        });

    </script>
    @endif

    @if (Session::get('error'))
    <script>
        Swal.fire({
            icon: 'error'
            , title: 'Error'
            , text: 'Invalid Email or Password'
            , showConfirmButton: false
            , timer: 1500
        });

    </script>
    @endif
</body>
</html>
