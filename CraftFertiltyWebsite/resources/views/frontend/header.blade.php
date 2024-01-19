@extends('frontend.app')
@section('container')
<div class="relative ">
    <div class="absolute top-0 right-0 px-40 py-80 bg-gray-200 bottom-40 lg:py-16 lg:px-56 "></div>
</div>
<header class="flex justify-between items-center px-4 py-4 lg:z-10">
    <div class="">
        <img src="{{asset('icons/logo.png')}}" alt="" class="lg:w-28 md:w-20 w-16">
    </div>
    <div class="lg:bg-white lg:z-10" id="nav-items">
        <a href="#" id="menu-icon" class="lg:hidden md:hidden sm:hidden text-2xl cursor-pointer p-4 z-10">
            <i class="ri-menu-4-line"></i>
        </a>
        <a href="#" id="close-icon" class="hidden cursor-pointer text-2xl pl-56">
                <i class="ri-close-line"></i>
        </a>
        <ul class="justify-end items-center lg:mt-[-70px]  lg:pt-0 pt-2 text-xs text-gray-800 lg:flex hidden nav-links">
                <li class="lg:mr-10 pr-10"><i class="fa-solid fa-phone-volume"></i> <span class="ml-2">+91 8590462565</span></li>
                <li><i class="fa-solid fa-globe"></i><span class="ml-2">International Patients</span></li>
        </ul>
        <ul class="lg:flex hidden lg:justify-end  justify-center flex-col lg:flex-row items-center lg:mt-10 text-gray-800 pt-10 lg:pt-0 nav-links">
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="" class=""><span class="mr-1">About Us</span><i class="fa-solid fa-caret-down"></i></a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href=""><span class="mr-1">I'm Looking For</span><i class="fa-solid fa-caret-down"></i></a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href=""><span class="mr-1">Patient Guide</span><i class="fa-solid fa-caret-down"></i></a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">Training Courses</a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">Conatct Us</a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">EBooks</a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">Blogs</a></li>
        </ul>
       
    </div>
</header>

@endsection