<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/grabit-tailwind/grabit-tailwind/demo-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 15:40:34 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>@yield('title') Sistem Informasi Pencari Art</title>
    <meta name="keywords" content="tailwindcss, ecommerce, farming, food market, grocery market, grocery shop, grocery store, grocery supper market, multi vendor, organic food, supermarket, supermarket grocery">
    <meta name="description" content="Multipurpose eCommerce Tailwind CSS Template">
    <meta name="author" content="Maraviya Infotech">

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('user/assets/img/favicon/favicon.png') }}" sizes="32x32">

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/vendor/gicons.css') }}">

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/nouislider.css') }}">

    <!-- Tailwindcss -->
    <script src="{{ asset('user/assets/js/plugins/tailwindcss3.4.1') }}"></script>

    <!-- Main Style -->
    <link rel="stylesheet" id="main_style" href="{{ asset('user/assets/css/demo-3.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}">
</head>

<body class="w-full h-full relative font-Poppins font-normal overflow-x-hidden home-3">

    <!-- Loader -->
    <div id="gi-overlay" class="w-full h-full fixed top-0 right-0 left-0 bottom-0 bg-[#fff] z-[99] flex items-center justify-center overflow-hidden">
        <div class="loader"></div>
    </div>

    <!-- Header start  -->
    @include('user.partials.header')
    <!-- Header End  -->




    <!-- New Product tab Area Start -->
    @yield('content')
    <!-- Product tab Area End -->

    <!-- Footer Start -->
    @include('user.partials.footer')
    <!-- Footer Area End -->


    <!-- Back to top  -->
    <a class="gi-back-to-top inline-block bg-[#4b5966] w-[40px] h-[40px] text-center fixed bottom-[30px] right-[30px] opacity-[0] invisible z-[16] border-[1px] border-solid border-[#fff] hover:cursor-pointer hover:bg-[#383838] hover:opacity-[1] max-[767px]:bottom-[15px] max-[767px]:right-[15px]"></a>


    <!-- Plugins JS -->
    <script src="{{ asset('user/assets/js/plugins/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/countdownTimer.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/infiniteslidev2.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/nouislider.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/wow.js') }}"></script>

    <!-- Main Js -->
    <script src="{{ asset('user/assets/js/main.js') }}"></script>
    <script src="{{ asset('user/assets/js/demo-3.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(Session::get('login'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Berhasil!'
            , text: 'Login Berhasil'
            , icon: 'success'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('error'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Gagal!'
            , text: 'Login Gagal'
            , icon: 'error'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('register'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Berhasil!'
            , text: 'Register Berhasil'
            , icon: 'success'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('logout'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Berhasil!'
            , text: 'Logout Berhasil'
            , icon: 'success'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('updateprofil'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Berhasil!'
            , text: 'Update Profil Berhasil'
            , icon: 'success'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('linkkadaluarsa'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Gagal!'
            , text: 'Link Kadaluarsa'
            , icon: 'error'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('resetpasswordberhasil'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Berhasil!'
            , text: 'Reset Password Berhasil'
            , icon: 'success'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif


    @if(Session::get('linkresetpassword'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Berhasil!'
            , text: 'Link Reset Password Berhasil Dikirim'
            , icon: 'success'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('emailtidakditemukan'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Gagal!'
            , text: 'Email Tidak Ditemukan'
            , icon: 'error'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('sewa-proses'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Gagal!'
            , text: 'Penyewaan sedang diproses, silahkan tunggu konfirmasi dari admin'
            , icon: 'error'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('sewa-berhasil'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Gagal!'
            , text: 'Anda sedang menyewa art ini'
            , icon: 'error'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('status-art'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Gagal!'
            , text: 'Art tidak tersedia'
            , icon: 'error'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('sewa'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Berhasil!'
            , text: 'Sewa berhasil, silahkan tunggu konfirmasi dari admin'
            , icon: 'success'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif

    @if(Session::get('tidak-jadi-sewa'))
    <script>
        // tidak usah tombol oke, berikan waktu 1 detik
        Swal.fire({
            title: 'Berhasil!'
            , text: 'Sewa dibatalkan'
            , icon: 'success'
            , timer: 1000
            , showConfirmButton: false
        });

    </script>
    @endif
</body>


<!-- Mirrored from maraviyainfotech.com/projects/grabit-tailwind/grabit-tailwind/demo-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 15:40:36 GMT -->
</html>
