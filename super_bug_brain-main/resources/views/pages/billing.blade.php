<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="Quản lý"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Quản lý"></x-navbars.navs.auth>
        
        @yield('content-question')
        @yield('content-fieldquestion')
        @yield('content-account')
        @yield('content-users')
        @yield('content-card')

    </main>
    <x-plugins></x-plugins>

</x-layout>
