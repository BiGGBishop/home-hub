<header id="sticky-header" class="fixed left-0 top-[15px] lg:top-[30px] xl:top-[45px] w-full z-10">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="flex flex-wrap items-center justify-between">
                    <a href="{{route('frontend')}}" class="block">
                        <img class="w-full h-full mb-2" src="{{asset('frontend/assets/images/logo/logo.png')}}" loading="lazy" width="70" height="30" alt="brand logo">
                    </a>
                    <nav class="flex flex-wrap items-center">
                        <ul class="hidden lg:flex flex-wrap items-center font-recoleta text-[16px] xl:text-[18px] leading-none text-black">
                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                <a href="{{route('frontend')}}" class="transition-all hover:text-secondary">Home</a>

                               
                            </li>
                            {{-- <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                <a href="about.html" class="transition-all hover:text-secondary">About</a>

                            </li> --}}
                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                <a href="{{route('view.property')}}" class="transition-all hover:text-secondary">Properties</a>
                                
                            </li>
                           
                            {{-- <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                <a href="{{route('agencys')}}" class="transition-all hover:text-secondary">Agency</a>
                              
                            </li> --}}
                            {{-- <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                <a href="{{route('blog')}}" class="transition-all hover:text-secondary">Blog</a>
                                
                            </li> --}}
                            {{-- <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                <a href="#" class="transition-all hover:text-secondary">Contact</a>

                            </li> --}}
                        </ul>

                        <ul class="flex flex-wrap items-center space-x-10">
                            <li class="ml-4">
                                <a href="{{route('agent.register')}}" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Become Agency</a>
                            </li>
                            <li>
                                {{-- <a href="{{route('login')}}" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Login</a> --}}
                            </li>
                            <li class="ml-2 sm:ml-5 lg:hidden">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle flex text-[#016450] hover:text-secondary">
                                    <svg width="24" height="24" class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


 <!-- offcanvas-overlay start -->
 <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
 <!-- offcanvas-overlay end -->
 <!-- offcanvas-mobile-menu start -->
 <div id="offcanvas-mobile-menu" class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 bg-white">

     <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
         <!-- close button start -->
         <button class="offcanvas-close text-primary text-[25px] w-10 h-10 absolute right-0 top-0" aria-label="offcanvas">x</button>
         <!-- close button end -->

         <!-- offcanvas-menu start -->

         <nav class="offcanvas-menu">
             <ul>
                 <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                     <a href="{{route('frontend')}}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a>
                    
                 </li>
                 {{-- <li class="relative block border-b-primary border-b">
                     <a href="about.html" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">About</a>
                     <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                         <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="about.html">About</a></li>

                         <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="about-v2.html">About v2</a></li>
                     </ul>

                 </li> --}}
                 <li class="relative block border-b-primary border-b">
                     <a href="{{route('view.property')}}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Properties</a>
                     
                 </li>
                

                 <li class="relative block border-b-primary border-b"><a href="{{route('agencys')}}" class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">agency</a>

                

                 </li>

                 {{-- <li class="relative block border-b-primary border-b"><a href="{{route('blog')}}" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Blog</a></li> --}}
                 {{-- <li class="relative block border-b-primary border-b"><a href="contact.html" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Contact</a></li> --}}
             </ul>
         </nav>
         <!-- offcanvas-menu end -->

         <div class="px-5 flex flex-wrap mt-3 sm:hidden">
             <a href="#" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add
                 Property</a>
         </div>



     </div>
 </div>
 <!-- offcanvas-mobile-menu end -->
 <!-- Header end -->