@extends('user.layout.main')

@section('content')
<!-- Login section -->
<section class="gi-login py-[40px] max-[767px]:py-[30px]">
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
            <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Login</h2>
            <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Get access to your Orders, Wishlist and Recommendations.</p>
        </div>
        <div class="gi-login-content max-w-[1000px] m-auto flex flex-row max-[991px]:flex-col max-[1199px]:px-[12px] max-[991px]:w-full">
            <div class="gi-login-box w-[50%] px-[15px] max-[991px]:w-full max-[991px]:p-[0]">
                <div class="gi-login-wrapper max-w-[530px] my-[0] mx-auto">
                    <div class="gi-login-container p-[30px] max-[575px]:p-[15px] border-[1px] border-solid border-[#eee] rounded-[5px] text-left bg-[#fff]">
                        <div class="gi-login-form">
                            @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mt-2">



                                <?php

            $nomer = 1;

            ?>

                                @foreach($errors->all() as $error)
                                <li>{{ $nomer++ }}. {{ $error }}</li>
                                @endforeach
                            </div>
                            @endif
                            <form action="/user/login" method="post" class="flex flex-col">
                                @csrf
                                <span class="gi-login-wrap flex flex-col">
                                    <label class="mb-[10px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Email Address*</label>
                                    <input type="text" name="email" placeholder="Enter your email add..." class="mb-[27px] px-[15px] bg-transparent border-[1px] border-solid border-[#eee] rounded-[5px] text-[#777] text-[14px] outline-[0] h-[50px]" required>
                                </span>
                                <span class="gi-login-wrap flex flex-col">
                                    <label class="mb-[10px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Password*</label>
                                    <input type="password" name="password" placeholder="Enter your password" class="mb-[15px] px-[15px] bg-transparent border-[1px] border-solid border-[#eee] rounded-[5px] text-[#777] text-[14px] outline-[0] h-[50px]" required>
                                </span>
                                <span class="gi-login-wrap flex flex-col gi-login-fp">
                                    <label class="mb-[0] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">
                                        <a href="/user/reset-password" class="mt-[10px] text-[#777] text-[14px] font-normal tracking-[0] flex justify-end">Forgot Password?</a>
                                    </label>
                                </span>
                                <span class="gi-login-wrap gi-login-btn mt-[30px] flex flex-row justify-between items-center">
                                    <span class="text-[#777] text-[14px]">
                                        <a href="/user/register" class="text-[#4b5966] hover:text-[#5caf90]">Create Account?</a>
                                    </span>
                                    <button type="submit" class="gi-btn-1 btn py-[8px] px-[15px] bg-[#4b5966] text-[#fff] border-[0] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center text-[14px] font-semibold relative rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]">Login</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gi-login-box w-[50%] px-[15px] max-[991px]:w-full max-[991px]:p-[0] max-[991px]:hidden">
                <div class="gi-login-img">
                    <img src="assets/img/common/login.png" alt="login" class="w-full rounded-[5px]">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login section End -->
@endsection
