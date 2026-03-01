<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-mdb-theme="{{ config('app.theme') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ config('app.description') }}">

    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:description" content="{{ config('app.description') }}">
    <meta property="og:type" content="webite">
    @if(Route::currentRouteName() != null)
        <meta property="og:title" content="@yield('title', ucfirst(Route::currentRouteName()))">
    @endif
    @if(file_exists(public_path('images/banner.png')))
        <meta property="og:image" content="{{ asset('images/banner.png') }}">
    @endif
    <meta property="og:url" content="{{ Request::url() }}">
    <meta name="twitter:card" content="summary_large_image">

    <title>
        TorchCraft Spelers
    </title>

    <link rel="apple-touch-icon" sizes="180x180" href="https://www.torchcraft.nl/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://www.torchcraft.nl/icons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="48x48" href="https://www.torchcraft.nl/icons/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.torchcraft.nl/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.torchcraft.nl/icons/favicon-16x16.png">
    <link rel="mask-icon" href="https://www.torchcraft.nl/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">

    <!-- Google Fonts Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"/>

    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/labels.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>

    <!-- Tippy -->
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />

<link href="https://fonts.cdnfonts.com/css/hobo-bt" rel="stylesheet">

<link href="https://www.torchcraft.nl/style.css" rel="stylesheet">

<!-- Deze twee scripts moeten bovenaan blijven staan -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>

    @stack('styles')

</head>

<body background="" id="changebg">

<button onclick="topFunction()" id="floatingbutton" title="Back To Top"><i class="fa fa-chevron-circle-up"></i></button>

        @livewire('show-navbar')

<div class="clearboth"></div>

    <div class="spelersblok blokborder tekstopmaak">

      <div class="votesitesboven">

        @yield('content')

      </div>

    </div>

    <div class="spelersblokonder blokborder tekstopmaak">

        <div align="center">
        Spelergegevens via NetworkManager by ChimpGamer. All rights reserved.<br>
        </div>

    </div>

</div>

<div class="footerblok">
<br>
</div>

<div align="center">

<div class="copyright"><?php echo date("Y"); ?> © P2Paul/TorchCraft</div>

<div class="hidedesktop">
<a href="https://www.torchcraft.nl/ticket.php" class="header footertekst" title="Contact">Contact</a><br>
</div>

</div>

<div style="display:none">
<a href="#" class="simple-back-to-top txt">.</a>
</div>

<br>

</div>


<!-- Wisselende achtergrondafbeelding -->
<script>
 var day = new Date();
 var monthday = parseInt(day.getDate()); // is 1 to 31
 var month = parseInt(day.getMonth()); // Jan to Dec is 0 to 11
 var imgElem=document.getElementById('changebg');

(function(){
	if (window.innerWidth > 640) {
		if (month >= 2 && month < 11) {
			imgElem.background='https://www.torchcraft.nl/images/achtergrond.avif';
		} else {
			imgElem.background='https://www.torchcraft.nl/images/achtergrond-winter.avif';
		}
	}

	if (window.innerWidth < 640) {
		if (month >= 2 && month < 11) {
			imgElem.background='https://www.torchcraft.nl/images/achtergrond-klein.avif';
		} else {
			imgElem.background='https://www.torchcraft.nl/images/achtergrond-klein-winter.avif';
		}
	}
}());
</script>


<!-- Aantal spelers online -->
<script>
    $(document).ready(function () {
        getPlayers();
        setInterval(function () {
            getPlayers();
        }, 60 * 1000);
    });

    function getPlayers() {
        const serverStatusIp = "server.torchcraft.nl";
        const serverStatusPort = 25565;

        $.ajax({
            url: 'https://api.mcsrvstat.us/2/' + serverStatusIp + ':' + serverStatusPort,
            success: function (data) {
                $("#players").html(data.players?.online);
            },
            error: function () {
                $.ajax({
                    url: 'https://mcapi.us/server/status?ip=' + serverStatusIp + '&port=' + serverStatusPort,
                    success: function (data) {
                        $("#players").html(data.players?.now);
                    }
                });
            },
            timeout: 1000 //in milliseconds
        });
    }
</script>


<!-- Kopieerfunctie -->
<script>var clipboard = new ClipboardJS('.ipCopy');</script>

    <script> 
        function copyText() { 
            navigator.clipboard.writeText("server.torchcraft.nl").then(
  () => {
    /* clipboard successfully set */
  },
  () => {
    /* clipboard write failed */
  },
); 
        } 
    </script> 

    <script> 
        function toggler(divId) { 
            $("#" + divId).toggle(); 
        } 
          
        function serverjoin() { 
            toggler("gekopieerd"); 
        } 
    </script>


<!-- Back to top button -->
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("floatingbutton").style.display = "block";
    } else {
        document.getElementById("floatingbutton").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

<!-- AUTOCOMPLETE -->
<script type="text/javascript" src='//cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js'></script>

<!-- MDB -->
<script src="{{ asset('js/mdb.umd.min.js') }}"></script>

<!-- Alpine Tooltip -->
<script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-tooltip@1.x.x/dist/cdn.min.js" defer></script>

</body>
</html>
