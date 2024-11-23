<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('mmDashboard') }}
        </h2>
    </x-slot> --}}
    <style>
        *{
           margin: 0px;
           padding: 0px;
           font-family: 'poppins',sans-serif;
       }
        @media (min-width: 768px) {
               .searching {
                   display: none;

               }
               .imagesl{
               width:80px;
               height:50px;
              padding: 0;
              margin:0px 0px 0px 125px;
              border:none;
               border-radius: 15px;

           }
           }

       body{
           background-color: #fff;
       }

       .btn{
        position: absolute;
        top: 60px;
        left: 210px;
        height: 30px;
        width: 30px;
        padding: 0px;
        text-align: center;
        background: ##d0d0d0;
        border-radius: 5px;
        cursor: pointer;
        transition: left 0,4s ease;
       }
       .btn:hover{
        background-color: #e8eae8;

       }
       .btn.click{
           left: 0px;
       }
       .btn.click i::before{
           content: "\f0c9";
       }
       .btn i{
        text-align: center;
           color: #1e1c1c;
           font-size: 30px;
           line-height: 40px
       }

       .sidebar{
               /* background-color: rgba(0, 0, 0, 0.2); */
               background-color:#fff;
               text-align: center;
               text-decoration: none;
               font-size: 16px;
               font-family: Arial, Helvetica, sans-serif;
               font-weight: bold;
               transition:left 0,4s ease;
               overflow: hidden;
               /* transform: translateX(-180px); */
       }
       .sidebar.active{
          display: none;
           background-color: #fff;
       }
       .main.active{
           width: 98%;
       }
       .sidebar.show{
       display: block;
       }
       .nav-link{
           color: #31bc18;
           padding: 15px;


       }
       .nav-link:hover{
           border-bottom: 1px solid aquamarine;
           border-radius: 20px;
           color: #0dff00;
         }
       .nav-link:active{
           color: #0dff00;
       }

       a{
           color: #31bc18;
           text-align: center;
           padding: 14px 14px;
           text-decoration: none;
           font-size: 17px;
           font-family: Arial, Helvetica, sans-serif;
           font-weight: bold;
           transition: 0,4s ease-in-out;
       }
       .titles{
           margin: 0px 50px;
           padding: 0px 8px;
         }
       a:hover{
           border-bottom: 1px solid aquamarine;
           border-radius: 20px;
           color: #0dff00;
         }
         .log-out{
               margin-top: 5rem;
               width: 150px
           }
           .log-out button:hover{
               background-color: #2bc42b;
           }
           .imagesl{
               width:80px;
               height:50px;
              padding: 0;
              margin:0px 0px 0px 55px;
              border:none;
               border-radius: 15px;

           }


   </style>

    <div class="container-fluid">
        <div class="btn">
            <i class="fa-sharp fa-solid fa-xmark"></i>
             {{-- <i class="fa-solid fa-bars"></i> --}}
        </div>
        <div class="row">
            <div class="col-md-2  sidebar" >
                <div class=" position-sticky pt-3" id="sidebar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a aria-current="page" href="#">
                                <span data-feather="home"></span>
                                <img src="images/mera.JPG" alt="mera Logo"  class="imagesl navbar-toggler d-block top-me rounded-pill" type="button" data-bs-toggle="offcanvas" aria-controls="sidebar">

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                My Stats
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Reports
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                My Requests
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Help & Support
                            </a>
                        </li>
                    </ul>
                    <form class="searching">
                        <input class="form-control me-1 " type="text" placeholder="Search">
                        <x-primary-button class="my-3">
                            {{ __('Search') }}
                        </x-primary-button></p>
                      </form>
                    <a href="/">
                        <x-primary-button class="my-3">
                            {{ __('log out') }}
                        </x-primary-button></p>
                    </a>
                </div>

            </div>
            <main class="main col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                    </div>
                <div class="mt-4">

                    <h1>Main Area</h1>
                    <p>
                        dhfgsdkfkdfgdfdsdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    sdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsd
                    kfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro,
                    perferendis? Explicabo numquam eum cum facilis aut pariatur quia
                    aliquam accusamus sed, aperiam dolores, ipsa impedit modi ullam esse,
                    blanditiis repudiandae!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                    qui dolores, vitae accusamus autem vero aliquid laudantium enim atque! Soluta, quibusdam nemo.
                    Quas reiciendis repellat minima illum modi minus deserunt.
                    dhfgsdkfkdfgdf
                    fgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsd
                    kfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro,

                    Lorem ips
                    dhfgsdkfkdfgdfdsdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    sdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsd
                    kfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro,
                    perferendis? Explicabo numquam eum cum facilis aut pariatur quia
                    aliquam accusamus sed, aperiam dolores, ipsa impedit modi ullam esse,
                    blanditiis repudiandae!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                    qui dolores, vitae accusamus autem vero aliquid laudantium enim atque! Soluta, quibusdam nemo.
                    Quas reiciendis repellat minima illum modi minus deserunt.
                    dhfgsdkfkdfgdfdsdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    sdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsd
                    kfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro,
                    perferendis? Explicabo numquam eum cum facilis aut pariatur quia
                    aliquam accusamus s
                    </p>
                    <p>
                        dhfgsdkfkdfgdfdsdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    sdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsd
                    kfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro,
                    perferendis? Explicabo numquam eum cum facilis aut pariatur quia
                    aliquam accusamus sed, aperiam dolores, ipsa impedit modi ullam esse,
                    blanditiis repudiandae!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                    qui dolores, vitae accusamus autem vero aliquid laudantium enim atque! Soluta, quibusdam nemo.
                    Quas reiciendis repellat minima illum modi minus deserunt.
                    dhfgsdkfkdfgdfdsdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    sdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsd
                    kfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro,
                    perferendis? Explicabo numquam eum cum facilis aut pariatur quia
                    aliquam accusamus s
                    </p>
                    <p>
                        dhfgsdkfkdfgdfdsdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    sdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsd
                    kfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro,
                    perferendis? Explicabo numquam eum cum facilis aut pariatur quia
                    aliquam accusamus sed, aperiam dolores, ipsa impedit modi ullam esse,
                    blanditiis repudiandae!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                    qui dolores, vitae accusamus autem vero aliquid laudantium enim atque! Soluta, quibusdam nemo.
                    Quas reiciendis repellat minima illum modi minus deserunt.
                    dhfgsdkfkdfgdfdsdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    sdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsd
                    kfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfusdhfgsdkfkdfgdfdfu
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro,
                    perferendis? Explicabo numquam eum cum facilis aut pariatur quia
                    aliquam accusamus s
                    </p>


                </div>
            </main>
    @include ("footer")
<script>
    let sidebar = document.querySelector(".sidebar");
    let main = document.querySelector(".main");
    let toggle = document.querySelector(".btn");
    toggle.onclick = function(){
        sidebar.classList.toggle('active');
        main.classList.toggle('active');
    }
    $('.btn').click(function(){
        $(this).toggleClass('click');

    });
</script>
</x-app-layout>


{{-- <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
</div> --}}

