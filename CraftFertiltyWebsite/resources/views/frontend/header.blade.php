@extends('frontend.app')
@section('container')
<header class="w-full flex fixed justify-between items-center px-4 py-2 lg:z-10  transition-opacity duration-300 ease-in-out">
    <div class="ltr:lg:-mt-32">
        <img src="{{asset('icons/logo.png')}}" alt="" class="lg:w-28 md:w-20 w-16">
    </div>
    <div class="lg:z-10 relative  transition-opacity duration-300 ease-in-out " >
        <a href="#" id="menu-icon" class="lg:hidden  text-2xl cursor-pointer p-4 z-10 transition-opacity duration-300 ease-in-out">
            <i class="ri-menu-4-line"></i>
        </a>
        <div class="flex flex-col z-40 lg:relative fixed rtl:left-0 rtl:top-0 rtl:right-20 lg:right-0 lg:top-0 lg:pl-0 right-0 top-0 ltr:left-20 lg:bg-opacity-0 bg-gray-400 pl-20  lg:text-gray-800" id="nav-items">
            <a href="#" id="close-icon" class="hidden  lg:relative mt-32  cursor-pointer text-2xl ltr:ml-56 rtl:ml-0 rtl:mr-56 transition-opacity duration-300 ease-in-out">
                <i class="ri-close-line"></i>
            </a>
            <ul class="lg:justify-end items-center lg:mt-[-50px] ltr:lg:mt-2  lg:pt-0 ltr:mt-20 rtl:ml-0 rtl:mr-20   text-xs text-gray-800 lg:flex hidden nav-links justify-start lg:pr-10 ltr:pr-16 rtl:mt-4 rtl:pl-20">
                <li class="lg:mr-10 ltr:pr-10 rtl:mr-10 "><i class="fa-solid fa-phone-volume rtl:mr-2"></i> <span class="ltr:ml-2 rtl:mr-2">+91 8590462565</span></li>
                <li class="rtl:mr-12 ltr:mr-2"><i class="fa-solid fa-globe"></i><span class="ltr:ml-2 rtl:mr-2">International Patients</span></li>
            </ul>
            <ul class="rtl:mr-20 rtl:justify-start lg:flex hidden lg:justify-end  justify-center flex-col lg:flex-row items-center lg:mt-10 text-gray-800 pt-10 mb-48 lg:pt-0 nav-links lg:pb-0 ltr:pr-16 rtl:pl-20">
                <li class=" lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="" class=""><span class="mr-1">About Us</span><i class="fa-solid fa-caret-down"></i></a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href=""><span class="mr-1">I'm Looking For</span><i class="fa-solid fa-caret-down"></i></a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href=""><span class="mr-1">Patient Guide</span><i class="fa-solid fa-caret-down"></i></a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">Training Courses</a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">Conatct Us</a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">EBooks</a></li>
                <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">Blogs</a></li>
            </ul>
        </div>
        

    </div>
</header>
@endsection