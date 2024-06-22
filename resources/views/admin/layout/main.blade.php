<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}">
    <title>@yield('title') Sistem Informasi Pencari Art</title>
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
<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('admin.partials.sidebar')
            <div class="nk-wrap ">
                @include('admin.partials.header')
                <div class="nk-content ">
                    @yield('content')
                </div>
                <div class="nk-footer">
                    @include('admin.partials.footer')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/js/bundle.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/demo-settings.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/charts/chart-lms.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/libs/datatable-btns.js?ver=3.2.3') }}"></script>

    @if (Session::get('login'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: 'Success'
            , text: 'Login successfully'
            , showConfirmButton: false
            , timer: 1500
        });

    </script>
    @endif

    @if (Session::get('updateprofil'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: 'Success'
            , text: 'Profile has been updated successfully'
            , showConfirmButton: false
            , timer: 1500
        });

    </script>
    @endif

    @if (Session::get('store'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: 'Success'
            , text: 'Data has been saved successfully'
            , showConfirmButton: false
            , timer: 1500
        });

    </script>
    @endif

    @if (Session::get('update'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: 'Success'
            , text: 'Data has been updated successfully'
            , showConfirmButton: false
            , timer: 1500
        });

    </script>
    @endif

    @if (Session::get('destroy'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: 'Success'
            , text: 'Data has been deleted successfully'
            , showConfirmButton: false
            , timer: 1500
        });

    </script>
    @endif

</body>
</html>
