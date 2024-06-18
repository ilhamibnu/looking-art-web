@extends('user.layout.main')
@section('content')
<!-- Wishlist section -->
<section class="gi-faq py-[40px] max-[767px]:py-[30px] gi-wishlist">
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
            <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Product <span class="text-[#5caf90]">Wishlist</span></h2>
            <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Your product wish is our first priority.</p>
        </div>
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="gi-vendor-dashboard-card border-[1px] border-solid border-[#eee] rounded-[5px] overflow-y-auto">
                    <div class="gi-vendor-card-header min-w-[700px] p-[30px] border-b-[1px] border-solid border-[#eee] flex justify-between items-center">
                        <h5 class="m-[0] text-[18px] uppercase font-bold text-[#777] tracking-[0.01rem] leading-[1.2]">Penyewaan</h5>
                        <div class="gi-header-btn">
                            <a class="gi-btn-2 transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" href="/">Back To Home</a>
                        </div>
                    </div>
                    <div class="gi-vendor-card-body min-w-[700px] p-[30px]">
                        <div class="gi-vendor-card-table">
                            <table class="table gi-table w-full mb-[1rem]">
                                <thead>
                                    <tr>
                                        <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">No</th>
                                        <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Foto</th>
                                        <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Nama Art</th>
                                        <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Nama Penyewa</th>
                                        <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Status</th>
                                        <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Keterangan</th>
                                        <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Tanggal</th>
                                        <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="wish-empt border-t-[3px] border-solid border-[#eee] border-solid border-[#dee2e6]">
                                    @foreach ($penyewaan as $item )
                                    <tr class="pro-gl-content">
                                        <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">{{ $loop->iteration }}</span></td>
                                        <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><img class="prod-img h-[58px] w-[58px]" src="{{ asset('art/'.$item->art->foto) }}" alt="product image"></td>
                                        <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">{{ $item->art->name }}</span></td>
                                        <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">{{ $item->user->name }}</span></td>
                                        <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">{{ $item->status }}</span></td>
                                        <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#5caf90] tracking-[0.02rem]">{{ $item->keterangan }}</span></td>
                                        <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">{{ $item->tanggal }}</span></td>
                                        <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]">
                                            <form action="/user/tidakjadisewa/{{ $item->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <span class="tbl-btn py-[14px] flex text-[#777]">
                                                    <button class="gi-btn-1 gi-remove-wish btn mx-[3px] text-[20px] font-normal w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#4b5966] text-[#fff] text-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]" type="submit" title="Remove From List">
                                                        ×
                                                    </button>
                                                </span>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Wishlist section End -->
@endsection
