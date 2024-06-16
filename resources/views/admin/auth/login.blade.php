<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}">
    <title>Dashboard | LMS | DashLite Admin Template</title>
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
                                <div class="brand-logo pb-5"><a href="../../index.html" class="logo-link"><img class="logo-light logo-img logo-img-lg" src="../../images/logo.png" srcset="../../images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img logo-img-lg" src="../../images/logo-dark.png" srcset="../../images/logo-dark2x.png 2x" alt="logo-dark"></a></div>
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
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3 fs-13px" href="#">Terms & Condition</a></li>
                                        <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3 fs-13px" href="#">Privacy Policy</a></li>
                                        <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3 fs-13px" href="#">Help</a></li>
                                        <li class="nav-item dropup"><a class="dropdown-toggle dropdown-indicator has-indicator link link-primary fw-normal py-2 px-3 fs-13px" data-bs-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <ul class="language-list">
                                                    <li><a href="#" class="language-item"><img src="../../images/flags/english.png" alt="" class="language-flag"><span class="language-name">English</span></a></li>
                                                    <li><a href="#" class="language-item"><img src="../../images/flags/spanish.png" alt="" class="language-flag"><span class="language-name">Español</span></a></li>
                                                    <li><a href="#" class="language-item"><img src="../../images/flags/french.png" alt="" class="language-flag"><span class="language-name">Français</span></a></li>
                                                    <li><a href="#" class="language-item"><img src="../../images/flags/turkey.png" alt="" class="language-flag"><span class="language-name">Türkçe</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
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
                                            <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-a.png" srcset="../../images/slides/promo-a2x.png 2x" alt=""></div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-b.png" srcset="../../images/slides/promo-b2x.png 2x" alt=""></div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-c.png" srcset="../../images/slides/promo-c2x.png 2x" alt=""></div>
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
    <ul class="nk-sticky-toolbar">
        <li class="demo-layout"><a class="toggle tipinfo" data-target="demoML" href="#" title="Main Demo Preview"><em class="icon ni ni-dashlite"></em></a></li>
        <li class="demo-thumb"><a class="toggle tipinfo" data-target="demoUC" href="#" title="Use Case Concept"><em class="icon ni ni-menu-squared"></em></a></li>
        <li class="demo-settings"><a class="toggle tipinfo" data-target="settingPanel" href="#" title="Demo Settings"><em class="icon ni ni-setting-alt"></em></a></li>
        <li class="demo-purchase"><a class="tipinfo" target="_blank" href="https://1.envato.market/e0y3g" title="Purchase"><em class="icon ni ni-cart"></em></a></li>
    </ul>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoML" data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Switch Demo Layout</h6><a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoML" href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar="">
            <div class="nk-demo-item"><a href="https://dashlite.net/demo1/index.html">
                    <div class="nk-demo-image bg-blue"><img class="bg-purple" src="../../../images/landing/layout-1d.jpg" srcset="../../../images/landing/layout-1d2x.jpg 2x" alt="Demo Layout 1"></div><span class="nk-demo-title"><strong>Demo Layout 1</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="../../index.html">
                    <div class="nk-demo-image bg-purple"><img src="../../../images/landing/layout-2d.jpg" srcset="../../../images/landing/layout-2d2x.jpg 2x" alt="Demo Layout 2"></div><span class="nk-demo-title"><strong>Demo Layout 2</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/index.html">
                    <div class="nk-demo-image bg-success"><img src="../../../images/landing/layout-3d.jpg" srcset="../../../images/landing/layout-3d2x.jpg 2x" alt="Demo Layout 3"></div><span class="nk-demo-title"><strong>Demo Layout 3</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo4/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../../../images/landing/layout-4d.jpg" srcset="../../../images/landing/layout-4d2x.jpg 2x" alt="Demo Layout 4"></div><span class="nk-demo-title"><strong>Demo Layout 4</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo5/index.html">
                    <div class="nk-demo-image bg-orange"><img src="../../../images/landing/layout-5d.jpg" srcset="../../../images/landing/layout-5d2x.jpg 2x" alt="Demo Layout 5"></div><span class="nk-demo-title"><strong>Demo Layout 5</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo6/index.html">
                    <div class="nk-demo-image bg-purple"><img src="../../../images/landing/layout-6d.jpg" srcset="../../../images/landing/layout-6d2x.jpg 2x" alt="Demo Layout 6"></div><span class="nk-demo-title"><strong>Demo Layout 6</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo7/index.html">
                    <div class="nk-demo-image bg-teal"><img src="../../../images/landing/layout-7d.jpg" srcset="../../../images/landing/layout-7d2x.jpg 2x" alt="Demo Layout 7"></div><span class="nk-demo-title"><strong>Demo Layout 7</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo8/index.html">
                    <div class="nk-demo-image bg-azure"><img src="../../../images/landing/layout-8d.jpg" srcset="../../../images/landing/layout-8d2x.jpg 2x" alt="Demo Layout 8"></div><span class="nk-demo-title"><strong>Demo Layout 8</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo9/index.html">
                    <div class="nk-demo-image bg-pink"><img src="../../../images/landing/layout-9d.jpg" srcset="../../../images/landing/layout-9d2x.jpg 2x" alt="Demo Layout 9"></div><span class="nk-demo-title"><strong>Demo Layout 9</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/landing/index.html">
                    <div class="nk-demo-image bg-red"><img src="../../../images/landing/main-landing.jpg" srcset="../../../images/landing/main-landing2x.jpg 2x" alt="Landing Page"></div><span class="nk-demo-title"><strong>Landing Page</strong> <span class="badge badge-danger ml-1">Free</span></span>
                </a></div>
        </div>
    </div>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoUC" data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Use Case Concept</h6><a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoUC" href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar="">
            <div class="nk-demo-item"><a href="https://dashlite.net/demo9/copywriter/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../../../images/landing/demo-ai-copywriter.jpg" srcset="../../../images/landing/demo-ai-copywriter2x.jpg 2x" alt="ai-copywriter"></div><span class="nk-demo-title"><em class="text-primary">Demo9</em><br><strong>Ai Copywriter Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo7/pharmacy/index.html">
                    <div class="nk-demo-image bg-warning"><img src="../../../images/landing/demo-pharmacy.jpg" srcset="../../../images/landing/demo-pharmacy2x.jpg 2x" alt="pharmacy"></div><span class="nk-demo-title"><em class="text-primary">Demo7</em><br><strong>Pharmacy Management Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo5/loan/index.html">
                    <div class="nk-demo-image bg-purple"><img src="../../../images/landing/demo-loan.jpg" srcset="../../../images/landing/demo-loan2x.jpg 2x" alt="loan"></div><span class="nk-demo-title"><em class="text-primary">Demo5</em><br><strong>Loan Management Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="../../ecommerce/index.html">
                    <div class="nk-demo-image bg-dark"><img src="../../../images/landing/demo-ecommerce.jpg" srcset="../../../images/landing/demo-ecommerce2x.jpg 2x" alt="Ecommerce"></div><span class="nk-demo-title"><em class="text-primary">Demo2</em><br><strong>E-Commerce Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="../../lms/index.html">
                    <div class="nk-demo-image bg-danger"><img src="../../../images/landing/demo-lms.jpg" srcset="../../../images/landing/demo-lms2x.jpg 2x" alt="LMS"></div><span class="nk-demo-title"><em class="text-primary">Demo2</em><br><strong>LMS / Learning Management System</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo1/crm/index.html">
                    <div class="nk-demo-image bg-info"><img src="../../../images/landing/demo-crm.jpg" srcset="../../../images/landing/demo-crm2x.jpg 2x" alt="CRM / Customer Relationship"></div><span class="nk-demo-title"><em class="text-primary">Demo1</em><br><strong>CRM / Customer Relationship Management</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo7/hospital/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../../../images/landing/demo-hospital.jpg" srcset="../../../images/landing/demo-hospital2x.jpg 2x" alt="Hospital Managemen"></div><span class="nk-demo-title"><em class="text-primary">Demo7</em><br><strong>Hospital Management</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo1/hotel/index.html">
                    <div class="nk-demo-image bg-pink"><img src="../../../images/landing/demo-hotel.jpg" srcset="../../../images/landing/demo-hotel2x.jpg 2x" alt="Hotel Managemen"></div><span class="nk-demo-title"><em class="text-primary">Demo1</em><br><strong>Hotel Management</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/cms/index.html">
                    <div class="nk-demo-image bg-dark"><img src="../../../images/landing/demo-cms.jpg" srcset="../../../images/landing/demo-cms2x.jpg 2x" alt="cms"></div><span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>CMS Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo5/crypto/index.html">
                    <div class="nk-demo-image bg-warning"><img src="../../../images/landing/demo-buysell.jpg" srcset="../../../images/landing/demo-buysell2x.jpg 2x" alt="Crypto BuySell / Wallet"></div><span class="nk-demo-title"><em class="text-primary">Demo5</em><br><strong>Crypto BuySell Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo6/invest/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../../../images/landing/demo-invest.jpg" srcset="../../../images/landing/demo-invest2x.jpg 2x" alt="HYIP / Investment"></div><span class="nk-demo-title"><em class="text-primary">Demo6</em><br><strong>HYIP / Investment Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/file-manager.html">
                    <div class="nk-demo-image bg-purple"><img src="../../../images/landing/demo-file-manager.jpg" srcset="../../../images/landing/demo-file-manager2x.jpg 2x" alt="File Manager"></div><span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps - File Manager</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo4/subscription/index.html">
                    <div class="nk-demo-image bg-primary"><img src="../../../images/landing/demo-subscription.jpg" srcset="../../../images/landing/demo-subscription2x.jpg 2x" alt="SAAS / Subscription"></div><span class="nk-demo-title"><em class="text-primary">Demo4</em><br><strong>SAAS / Subscription Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/covid/index.html">
                    <div class="nk-demo-image bg-danger"><img src="../../../images/landing/demo-covid19.jpg" srcset="../../../images/landing/demo-covid192x.jpg 2x" alt="Covid Situation"></div><span class="nk-demo-title"><em class="text-primary">Covid</em><br><strong>Coronavirus Situation</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/messages.html">
                    <div class="nk-demo-image bg-success"><img src="../../../images/landing/demo-messages.jpg" srcset="../../../images/landing/demo-messages2x.jpg 2x" alt="Messages"></div><span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps - Messages</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/mailbox.html">
                    <div class="nk-demo-image bg-purple"><img src="../../../images/landing/demo-inbox.jpg" srcset="../../../images/landing/demo-inbox2x.jpg 2x" alt="Inbox"></div><span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps - Mailbox</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/chats.html">
                    <div class="nk-demo-image bg-purple"><img src="../../../images/landing/demo-chats.jpg" srcset="../../../images/landing/demo-chats2x.jpg 2x" alt="Chats / Messenger"></div><span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps - Chats</strong></span>
                </a></div>
        </div>
    </div>
    <div class="nk-demo-panel toggle-slide toggle-slide-right" data-content="settingPanel" data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Preview Settings</h6><a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="settingPanel" href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-opt-panel" data-simplebar="">
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Direction Change</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="dir" data-update="ltr"><span class="nk-opt-item-bg"><span class="nk-opt-item-name">LTR Mode</span></span></div>
                    <div class="nk-opt-item only-text" data-key="dir" data-update="rtl"><span class="nk-opt-item-bg"><span class="nk-opt-item-name">RTL Mode</span></span></div>
                </div>
            </div>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Main UI Style</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="style" data-update="ui-default"><span class="nk-opt-item-bg"><span class="nk-opt-item-name">Default</span></span></div>
                    <div class="nk-opt-item only-text" data-key="style" data-update="ui-bordered"><span class="nk-opt-item-bg"><span class="nk-opt-item-name">Bordered</span></span></div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-aside">
                <div class="nk-opt-set-title">Sidebar Style</div>
                <div class="nk-opt-list col-4x">
                    <div class="nk-opt-item" data-key="aside" data-update="is-light"><span class="nk-opt-item-bg is-light"><span class="bg-lighter"></span></span><span class="nk-opt-item-name">White</span></div>
                    <div class="nk-opt-item" data-key="aside" data-update="is-default"><span class="nk-opt-item-bg is-light"><span class="bg-light"></span></span><span class="nk-opt-item-name">Light</span></div>
                    <div class="nk-opt-item active" data-key="aside" data-update="is-dark"><span class="nk-opt-item-bg"><span class="bg-dark"></span></span><span class="nk-opt-item-name">Dark</span></div>
                    <div class="nk-opt-item" data-key="aside" data-update="is-theme"><span class="nk-opt-item-bg"><span class="bg-theme"></span></span><span class="nk-opt-item-name">Theme</span></div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-header">
                <div class="nk-opt-set-title">Header Style</div>
                <div class="nk-opt-list col-4x">
                    <div class="nk-opt-item active" data-key="header" data-update="is-light"><span class="nk-opt-item-bg is-light"><span class="bg-lighter"></span></span><span class="nk-opt-item-name">White</span></div>
                    <div class="nk-opt-item" data-key="header" data-update="is-default"><span class="nk-opt-item-bg is-light"><span class="bg-light"></span></span><span class="nk-opt-item-name">Light</span></div>
                    <div class="nk-opt-item" data-key="header" data-update="is-dark"><span class="nk-opt-item-bg"><span class="bg-dark"></span></span><span class="nk-opt-item-name">Dark</span></div>
                    <div class="nk-opt-item" data-key="header" data-update="is-theme"><span class="nk-opt-item-bg"><span class="bg-theme"></span></span><span class="nk-opt-item-name">Theme</span></div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-skin">
                <div class="nk-opt-set-title">Primary Skin</div>
                <div class="nk-opt-list">
                    <div class="nk-opt-item active" data-key="skin" data-update="default"><span class="nk-opt-item-bg"><span class="skin-default"></span></span><span class="nk-opt-item-name">Default</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="blue"><span class="nk-opt-item-bg"><span class="skin-blue"></span></span><span class="nk-opt-item-name">Blue</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="egyptian"><span class="nk-opt-item-bg"><span class="skin-egyptian"></span></span><span class="nk-opt-item-name">Egyptian</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="bluelite"><span class="nk-opt-item-bg"><span class="skin-bluelite"></span></span><span class="nk-opt-item-name">Blue Light</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="green"><span class="nk-opt-item-bg"><span class="skin-green"></span></span><span class="nk-opt-item-name">Green</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="red"><span class="nk-opt-item-bg"><span class="skin-red"></span></span><span class="nk-opt-item-name">Red</span></div>
                </div>
            </div>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Skin Mode</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item active" data-key="mode" data-update="light-mode"><span class="nk-opt-item-bg is-light"><span class="theme-light"></span></span><span class="nk-opt-item-name">Light Skin</span></div>
                    <div class="nk-opt-item" data-key="mode" data-update="dark-mode"><span class="nk-opt-item-bg"><span class="theme-dark"></span></span><span class="nk-opt-item-name">Dark Skin</span></div>
                </div>
            </div>
            <div class="nk-opt-reset"><a href="#" class="reset-opt-setting">Reset Setting</a></div>
        </div>
    </div>
    <div class="pmo-lv pmo-dark"><a class="pmo-close" href="#"><em class="ni ni-cross"></em></a><a class="pmo-wrap" target="_blank" href="https://softnio.com/get-early-access/">
            <div class="pmo-text text-white">Looking for functional script for Investment Platform? Check out <em class="ni ni-arrow-long-right"></em></div>
        </a></div><a class="pmo-st pmo-dark" target="_blank" href="https://softnio.com/get-early-access/">
        <div class="pmo-st-img"><img src="../../../images/landing/promo-investorm.png" alt="Investorm"></div>
        <div class="pmo-st-text">Looking for Advanced <br> Investment Platform?</div>
    </a>
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
