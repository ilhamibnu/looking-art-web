@extends('user.layout.main')

@section('content')
<!-- Hero Slider Start -->
<section class="section gi-hero h-full w-full mb-[40px] max-[575px]:mb-[30px] max-[1199px]:relative">
    <div class="flex flex-wrap justify-between items-center mx-auto w-full">
        <div class="gi-main-content w-full">
            <!-- Hero Slider Start -->
            <div class="gi-slider-content h-full">
                <div class="gi-main-slider">
                    <div class="gi-slider swiper-container main-slider-nav main-slider-dot">
                        <!-- Main slider  -->
                        <div class="swiper-wrapper">
                            <div class="gi-slide-item swiper-slide h-[800px] max-[1399px]:h-[500px] max-[991px]:h-[400px] max-[767px]:h-[300px] max-[575px]:h-[290px] max-[420px]:h-[230px] max-[420px]:bg-center bg-cover flex slide-1">
                                <div class="flex flex-wrap justify-between items-center w-[100%] mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                                    <div class="gi-slide-content px-[12px] max-w-[33rem] max-[1399px]:max-w-[24rem] max-[1199px]:max-w-[20rem] max-[991px]:max-w-[17rem] max-[767px]:max-w-[14rem] max-[420px]:max-w-[12rem] max-[360px]:max-w-[10rem] flex flex-col justify-center relative z-[9] slider-animation">
                                        <p class="mb-[20px] text-[20px] text-[#5caf90] leading-[1] tracking-[0] font-medium max-[767px]:text-[16px] max-[767px]:mb-[10px] max-[360px]:text-[13px]">
                                            Starting at $ <b>20.00</b></p>
                                        <h1 class="gi-slide-title mb-[30px] text-[55px] leading-[68px] text-[#fff] tracking-[0.05rem] font-bold relative max-[1399px]:text-[40px] max-[1399px]:leading-[50px] max-[1199px]:text-[32px] max-[1199px]:leading-[42px] max-[991px]:text-[26px] max-[991px]:leading-[36px] max-[767px]:text-[22px] max-[767px]:leading-[32px] max-[767px]:mb-[20px] max-[420px]:text-[18px] max-[420px]:leading-[28px] max-[360px]:text-[17px] max-[360px]:leading-[27px]">
                                            Fashion sale for women's</h1>
                                        <div class="gi-slide-btn block">
                                            <a href="#" class="gi-btn-1 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#4b5966] text-[#fff] border-[0] text-[15px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#5caf90] hover:text-[#fff]">Shop
                                                Now
                                                <i class="fi-rr-angle-double-small-right ml-[5px] text-[#fff] flex" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-slide-item swiper-slide h-[800px] max-[1399px]:h-[500px] max-[991px]:h-[400px] max-[767px]:h-[300px] max-[575px]:h-[290px] max-[420px]:h-[230px] max-[420px]:bg-center bg-cover flex slide-2">
                                <div class="flex flex-wrap justify-between items-center w-[100%] mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                                    <div class="gi-slide-content px-[12px] max-w-[33rem] max-[1399px]:max-w-[24rem] max-[1199px]:max-w-[20rem] max-[991px]:max-w-[17rem] max-[767px]:max-w-[14rem] max-[420px]:max-w-[12rem] max-[360px]:max-w-[10rem] flex flex-col justify-center relative z-[9] slider-animation">
                                        <p class="mb-[20px] text-[20px] text-[#5caf90] leading-[1] tracking-[0] font-medium max-[767px]:text-[16px] max-[767px]:mb-[10px] max-[360px]:text-[13px]">
                                            Starting at $ <b>29.99</b></p>
                                        <h1 class="gi-slide-title mb-[30px] text-[55px] leading-[68px] text-[#fff] tracking-[0.05rem] font-bold relative max-[1399px]:text-[40px] max-[1399px]:leading-[50px] max-[1199px]:text-[32px] max-[1199px]:leading-[42px] max-[991px]:text-[26px] max-[991px]:leading-[36px] max-[767px]:text-[22px] max-[767px]:leading-[32px] max-[767px]:mb-[20px] max-[420px]:text-[18px] max-[420px]:leading-[28px] max-[360px]:text-[17px] max-[360px]:leading-[27px]">
                                            Explore glasses sale for Women's</h1>
                                        <div class="gi-slide-btn block">
                                            <a href="#" class="gi-btn-1 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#4b5966] text-[#fff] border-[0] text-[15px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#5caf90] hover:text-[#fff]">Shop
                                                Now
                                                <i class="fi-rr-angle-double-small-right ml-[5px] text-[#fff] flex" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-white"></div>
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- New Product tab Area Start -->
<section class="gi-product-tab gi-products py-[40px] max-[767px]:py-[30px] wow fadeInUp" data-wow-duration="2s">
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="gi-tab-title w-full inline-flex justify-between px-[12px] max-[991px]:flex-col">
            <div class="gi-main-title">
                <div class="section-title mb-[20px] pb-[20px] flex flex-start">
                    <div class="section-detail">
                        <h2 class="gi-title mb-[0] text-[25px] max-[991px]:text-[24px] max-[767px]:text-[22px] max-[575px]:text-[20px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1] font-manrope tracking-[0.01rem]">
                            New <span class="text-[#5caf90]">Arrivals</span></h2>
                        <p class="max-w-[400px] mt-[10px] text-[14px] text-[#777] leading-[18px] font-light">Shop
                            online for new arrivals and get free shipping!</p>
                    </div>
                </div>
            </div>
            <!-- Tab Start -->

            <!-- Tab End -->
        </div>
        <!-- New Product -->
        <div class="w-full flex flex-wrap mb-[-24px]">
            <div class="w-full">
                <div class="tab-content">

                    <div class="w-full flex flex-wrap">
                        @foreach ($art as $item )
                        <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                            <div class="gi-product-content h-full pb-[24px] flex">
                                <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                    <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                        <div class="gi-pro-image overflow-hidden">
                                            <a href="product-left-sidebar.html" class="image relative block overflow-hidden pointer-events-none">
                                                <span class="label veg max-[991px]:hidden">
                                                    <span class="dot"></span>
                                                </span>
                                                <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" width="214px" src="{{ asset('art/'.$item->foto) }}" alt="Product">
                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="{{ asset('art/'.$item->foto) }}" alt="Product">
                                            </a>
                                            {{-- <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                    <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                    <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]" title="Compare">
                                                    <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" title="Add To Cart" class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                    <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                            </div>
                                            <div class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                <ul class="flex">
                                                    <li class="bg-[#008000] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                        <a href="javascript:void(0)" class="bg-[#008000]"></a>
                                                    </li>
                                                    <li class="bg-[#8118d5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                        <a href="javascript:void(0)" class="bg-[#8118d5]"></a>
                                                    </li>
                                                    <li class="bg-[#e8c2ff] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                        <a href="javascript:void(0)" class="bg-[#e8c2ff]"></a>
                                                    </li>
                                                </ul>
                                                <ul class="flex">
                                                    <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                        <a href="javascript:void(0)" class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                    </li>
                                                    <li class="inline-block float-left cursor-pointer">
                                                        <a href="javascript:void(0)" class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                        <a href="/user/detail/{{ $item->id }}">
                                            <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                {{ $item->status }}</h6>
                                        </a>
                                        <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                            <a href="/user/detail/{{ $item->id }}" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">{{ $item->name }}</a>
                                        </h5>
                                        <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                            <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                <p>Alamat : {{ $item->alamat }}</p>
                                                <p>
                                                    {{-- // cari umur dari tgl lahir --}}
                                                    @php
                                                    $tgl_lahir = $item->tgl_lahir;
                                                    $tgl_lahir = date('Y-m-d', strtotime($tgl_lahir));
                                                    $tgl_lahir = new DateTime($tgl_lahir);
                                                    $today = new DateTime('today');
                                                    $umur = $today->diff($tgl_lahir);
                                                    echo $umur->y . " Tahun";
                                                    @endphp
                                                </p>
                                            </span>
                                        </div>


                                        <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                            {{-- // btn detail --}}
                                            {{-- <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                            </span>
                                            <span class="gi-price">
                                                <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$59.00</span>
                                                <span class="old-price text-[14px] text-[#777] line-through">$87.00</span>
                                            </span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>

                    <!-- 4th Product tab end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product tab Area End -->
@endsection
