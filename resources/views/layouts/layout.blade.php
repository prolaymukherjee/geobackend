@include('partials.header')
@include('partials.sidenav')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
            	@yield('content')

            </div>
            <div id="styleSelector"></div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@include('partials.footer')