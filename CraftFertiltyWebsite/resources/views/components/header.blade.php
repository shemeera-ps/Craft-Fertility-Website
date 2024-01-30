<header id="main-header" class="fixed top-0  w-full bg-white   transition-all duration-300 ease-in-out z-50 h-40 ">
    <div class="w-full flex justify-between items-center px-4 py-2 lg:z-10    transition-all duration-300 ease-in-out">
        <div class="lg:-mt-32">
            <img src="{{asset('icons/logo.png')}}" alt="" class="lg:w-28 md:w-20 w-16">
        </div>
        <div class="lg:z-10 relative  transition-opacity duration-300 ease-in-out ">
            <a href="#" id="menu-icon" class="lg:hidden  text-2xl cursor-pointer p-4 z-10 transition-opacity duration-300 ease-in-out">
                <i class="ri-menu-4-line"></i>
            </a>
            <div class="flex flex-col z-40 h-full lg:relative fixed rtl:left-0 rtl:top-0  lg:right-0 lg:top-0 lg:pl-0 w-full  top-0 ltr:lg:right-0 ltr:-right-[26rem] ltr:md:-right-[63rem] ltr:sm:-right-[50rem] lg:bg-opacity-0 bg-gray-200 pl-20  lg:text-gray-800   transition-all duration-300 ease-in-out" id="nav-items">
                <a href="#" id="close-icon" class="lg:hidden  lg:relative  cursor-pointer text-2xl ltr:ml-56 rtl:ml-0 rtl:mr-56 transition-opacity duration-300 ease-in-out">
                    <i class="ri-close-line"></i>
                </a>
                <ul class="lg:justify-end items-center lg:mt-[-50px] rtl:lg:mt-0 ltr:lg:mt-2  lg:pt-0  rtl:ml-0 rtl:mr-20   text-xs text-gray-800 flex  nav-links justify-start lg:pr-10 ">
                    <li class="hover:text-pink-400   transition-all duration-300 ease-in-out lg:mr-10 ltr:pr-4 rtl:mr-10 "><i class="fa-solid fa-phone-volume rtl:mr-2"></i> <span class="ltr:ml-2 rtl:mr-2">+91 8590462565</span></li>
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out rtl:mr-12 ltr:mr-2"><i class="fa-solid fa-globe"></i><span class="ltr:ml-2 rtl:mr-2">International Patients</span></li>
                </ul>
                <ul class="rtl:mr-20 justify-start flex lg:justify-end   flex-col lg:flex-row items-start lg:mt-10 text-gray-800 pt-10 mb-48 lg:pt-0 nav-links lg:pb-0 ltr:pr-16 rtl:pl-20">
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out  lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="{{ route('home') }}" class=""><span class="mr-1">Home</span></a></li>
                    <li class=" lg:mr-10 text-sm font-semibold pb-4 lg:pb-0 relative group">
                        <a href="#" class=""><span class="mr-1">About Us</span><i class="fa-solid fa-caret-down"></i></a>
                        <ul class="group-hover:flex hidden flex-col justify-center items-center w-56 py-4 bg-white shadow-xl absolute  z-10">
                            <li class=" text-sm font-semibold pb-4 "><a href="{{ route('about') }}" class="hover:text-pink-400  transition-all duration-300 ease-in-out">About CRAFT</a></li>
                            <li class=" text-sm font-semibold pb-4 "><a href="{{ route('chairman') }}" class="hover:text-pink-400  transition-all duration-300 ease-in-out">Message from Chairman</a></li>
                            <li class="text-sm font-semibold pb-4 "><a href="{{ route('international-patients') }}" class="hover:text-pink-400  transition-all duration-300 ease-in-out">International Patients</a></li>
                            <li class=" text-sm font-semibold pb-4 "><a href="{{ route('achivements') }}" class="hover:text-pink-400  transition-all duration-300 ease-in-out">Our Achievments</a></li>
                        </ul>
                    </li>
                    <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0 relative group ">
                        <a href="#" class=""><span class="mr-1">I'm Looking For</span><i class="fa-solid fa-caret-down"></i></a>
                        <ul class="group-hover:grid lg:grid-cols-3 grid-cols-2 w-80 md:w-[40rem] sm:w-[40rem] sm:px-8 md:px-8 px-2  lg:gap-4 lg:w-[44rem] py-4 bg-white shadow-xl absolute hidden z-10 lg:p-8">
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4"><a href="{{ route('female-fertility') }}">Female Fertility</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4"><a href="{{ route('male-fertility') }}">Male Fertility</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4"><a href="">IVF Lab and Embriology</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4"><a href="{{ route('sperm-embrio-freezing') }}">Sperm and Embrio Freezing</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4"><a href="{{ route('medical-genetics') }}">Medical Genetics</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4"><a href="">Reproduction Surgery</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4"><a href="{{ route('antenatal-care') }}">Antenatal Care</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4"><a href="{{ route('foetal-medicine') }}">Foetal Medicine</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4"><a href="">Painless Labour</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4 "><a href="{{ route('neonate-and-pediatric-care') }}">Neonate and Pediatric care</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4 "><a href="{{ route('assisting-departments') }}">Assisting Departments</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4 "><a href="">Accormation at CRAFT</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4 "><a href="{{ route('medical-insurance') }}">Medical Insurance</a></li>
                        </ul>
                    </li>
                    <li class="lg:mr-10 text-sm font-semibold pb-4 lg:pb-0 relative group">
                        <a href="" class=""><span class="mr-1">Patient Guide</span><i class="fa-solid fa-caret-down"></i></a>
                        <ul class="group-hover:flex flex-col justify-center items-center w-56 py-4 bg-white shadow-xl absolute hidden z-10">
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4 "><a href="">About CRAFT</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4 "><a href="">Message from Chairman</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4 "><a href="">International Patients</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-semibold pb-4 "><a href="">Our Achievments</a></li>
                        </ul>
                    </li>
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">Training Courses</a></li>
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">Conatct Us</a></li>
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">EBooks</a></li>
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out lg:mr-10 text-sm font-semibold pb-4 lg:pb-0"><a href="">Blogs</a></li>
                </ul>
            </div>


        </div>
    </div>
</header>