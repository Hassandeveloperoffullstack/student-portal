{{-- <x-app-layout> --}}

@include('header')
    <div class="wrapper">
       {{-- @include('dashboard_layout') --}}
        <div class="main">
           @include('logout_latout')
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                           
                
                            {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg"> --}}
                                {{-- <div class="max-w-xl"> --}}
                                    @include('profile.partials.update-password-form')
                                {{-- </div> --}}
                            {{-- </div> --}}
                
                            
                        </div>
                    </div>
                   
                </div>
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
          
        </div>
    </div>
    @include('footer')


{{-- </x-app-layout> --}}
