<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
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


        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        Stripe.setPublishableKey("{{ env('STRIPE_KEY') }}");
    </script>
    <script src="js/all.js"></script>
    </body>
</html>
