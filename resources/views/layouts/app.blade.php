<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="css/app.css" rel="stylesheet" type="text/css">

    </head>
    <body>
         <!-- Header -->
         <div id="site-header">
            @include("partials.header")
         </div>
         
        <!-- Main -->
        <main id="site-main">
             @yield('content')
        </main>
               
         <!-- Footer -->
         <div id="site-footer">
           @include('partials.footer')
         </div>
        <script type="js/all.js"></script>
    </body>
</html>
