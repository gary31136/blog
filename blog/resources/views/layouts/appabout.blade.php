<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.abouthead')
</head>

<body>

    @include('layouts.preloader')

    <div class="wrapper">

        @include('layouts.aboutheader')

        <!--page title start-->
        <section class="page-title background-title dark">

            @yield('aboutcontainer')

        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content">

            @yield('content')

        </section>
        <!--body content end-->

        @include('layouts.aboutfooter')

    </div>


    @include('layouts.aboutjs')

</body>

</html>
