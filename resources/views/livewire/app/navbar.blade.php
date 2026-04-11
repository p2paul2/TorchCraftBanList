
<div>

<div class="headerblok">

<img src="https://www.torchcraft.nl/images/happyghast.gif" title="Heb jij al een Happy Ghast?" alt="Heb jij al een Happy Ghast?" class="happyghast">

    <div class="headerlinks">

        <div class="headerstijl"><span class="fa-solid fa-user"></span> Er zijn <span id="players"></span> spelers online<br></div>

        <div class="headerstijl hidemobile"><b>IP</b><button class="copybutton ipCopy" data-clipboard-text="server.torchcraft.nl" title="Klik om ons IP te kopiëren" onclick="serverjoin()">server.torchcraft.nl</button><button class="far fa-copy ipCopy copybutton" data-clipboard-text="server.torchcraft.nl" title="Klik om ons IP te kopiëren" onclick="serverjoin()"></button> </div>

        <div id="gekopieerd">Het IP is gekopieerd</div>

        <div class="headerstijl hidedesktop"><b>IP</b> server.torchcraft.nl</div>

    </div>
   
    <div class="headermidden">
       <div id="logo">
            <a href="https://www.torchcraft.nl" title="Terug naar de homepage">

<?php

 $pic = "https://www.torchcraft.nl/images/tclogo-standaard.png";
 $MM = date("m");
 $DD = date("d");

if( $MM == 1 ){
   if( $DD == 29){
  $pic = "https://www.torchcraft.nl/images/tclogo-verjaardag.png";
 }
   else  {
  $pic = "https://www.torchcraft.nl/images/tclogo-winter.png";
}
}

if( $MM == 2 ){
   if( $DD == 14 ){
  $pic = "https://www.torchcraft.nl/images/tclogo-valentijn.png";
 }
   else  {
  $pic = "https://www.torchcraft.nl/images/tclogo-winter.png";
}
}
 
if( $MM == 3 ){
   if( $DD >= 21 and $DD <= 31){
  $pic = "https://www.torchcraft.nl/images/tclogo-lente.png";
 }else  {
  $pic = "https://www.torchcraft.nl/images/tclogo-standaard.png";
}
}

if( $MM == 6 ){
   if( $DD >= 21 and $DD <= 30){
  $pic = "https://www.torchcraft.nl/images/tclogo-zomer.png";
 }else  {
  $pic = "https://www.torchcraft.nl/images/tclogo-standaard.png";
}
}

if( $MM == 9 ){
   if( $DD >= 21 and $DD <= 30){
  $pic = "https://www.torchcraft.nl/images/tclogo-herfst.png";
 }else  {
  $pic = "https://www.torchcraft.nl/images/tclogo-standaard.png";
}
}

if( $MM == 11 ){
   if( $DD == 31 ){
  $pic = "https://www.torchcraft.nl/images/tclogo-halloween.png";
 }else  {
  $pic = "https://www.torchcraft.nl/images/tclogo-standaard.png";
}
}

if( $MM == 12 ){
   if( $DD >= 1 and $DD <= 31){
  $pic = "https://www.torchcraft.nl/images/tclogo-kerst.png";
 }else  {
  $pic = "https://www.torchcraft.nl/images/tclogo-standaard.png";
}
}
 
echo "<img src=\"{$pic}\" title=\"Terug naar de homepage\" alt=\"TorchCraft logo\">";
 
?>


</a>
       </div>
    </div>

<div class="clearboth"></div>

    <div class="headerrechts">

<div class="headerstijl hidemobile">
<a href="https://www.torchcraft.nl/ticket.php" title="Klik hier om een ticket te maken">Ticket maken</a> <a href="https://www.torchcraft.nl/ticket.php" title="Klik hier om een ticket te maken"><span class="fa-solid fa-envelope"></span></a><br>
</div>

    </div>

<span class="hidedesktop"><a href="javascript:void(0);" class="menuicon header" onclick="menutoggle()"><i class="fa-solid fa-bars"></i></a></span>

  </div>


<div class="navmenu" id="topnav">

  <span class="hidedesktop"><a href="javascript:void(0);" class="menuclose" onclick="menutoggle()"><font size="18px"><i class="fa-solid fa-xmark"></i></font></a></span>

  <a href="https://www.torchcraft.nl/index.php" title="Home" class="menuhome">Home</a><br>

  <a href="https://www.torchcraft.nl/nieuws.php" title="Nieuws">Nieuws</a><br>
 
  <a href="https://www.torchcraft.nl/historie.php" title="Historie">Historie</a><br>

  <a href="https://www.torchcraft.nl/dynmap.php" title="Servermaps">Dynmap</a><br>

  <a href="https://winkel.torchcraft.nl/" class="menuopvallend" title="Winkel">Winkel</a><br>
 
  <a href="https://www.torchcraft.nl/voten.php" class="menuopvallend" title="Voten voor TorchCraft">Voten</a><br>

  <a href="https://discordapp.com/invite/w3hxqT5" class="menuopvallend" target="_blank" title="Discordserver">Discord</a><br>
 
  <a href="https://help.torchcraft.nl/" title="Hulppagina's">Hulp</a><br>

  <a href="https://help.torchcraft.nl/algemene-informatie/regels" title="Regels">Regels</a><br>

  <a href="https://www.torchcraft.nl/spelers.php" title="Spelers">Spelers</a><br>

  <span class="hidedesktop"><a href="https://www.torchcraft.nl/ticket.php">Ticket</a><br></span>

<span class="hidemobile hidetablet">&nbsp;&nbsp;&nbsp;</span>
<span class="showtablet">&nbsp;&nbsp;&nbsp;</span>

  <span class="hidemobile"><a href="https://www.tiktok.com/@torchcraftnl" target="_blank" title="TorchCraft op TikTok" class="menusocials"><span class="fa-brands fa-tiktok"></span></a><br></span>

  <span class="hidemobile"><a href="https://www.instagram.com/torchcraftnl/" target="_blank" title="TorchCraft op Instagram" class="menusocials"><span class="fa-brands fa-instagram"></span></a><br></span>
 
  <span class="hidemobile"><a href="https://www.youtube.com/c/TorchCraftYT" target="_blank" title="TorchCraft op YouTube" class="menusocials"><span class="fa-brands fa-youtube"></span></a><br></span>
  
  <span class="hidemobile"><a href="https://www.facebook.com/TorchCraftNL/" target="_blank" title="TorchCraft op Facebook" class="menusocials"><span class="fa-brands fa-facebook-f"></span></a><br></span>

<div class="hidedesktop"><br>

  <a href="https://www.tiktok.com/@torchcraftnl" target="_blank"><span class="fa-brands fa-tiktok"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <a href="https://www.instagram.com/torchcraftnl/" target="_blank"><span class="fa-brands fa-instagram"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
  <a href="https://www.youtube.com/c/TorchCraftYT" target="_blank"><span class="fa-brands fa-youtube"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <a href="https://www.facebook.com/TorchCraftNL/" target="_blank"><span class="fa-brands fa-facebook-f"></span></a><br>
</div>

<!-- Mobielmenutoggle moet hier blijven staan -->
<script>
function menutoggle() {
  var x = document.getElementById("topnav");
  if (x.className === "navmenu") {
    x.className += "responsive";
  } else {
    x.className = "navmenu";
  }
}
</script>

</div>


<div class="paginacontent blokborder">

  <div class="kolomlinks">

    <div class="paginaintro blokborder tekstopmaak">
      <div class="paginatitel">Spelers</div>
<br>
Hier vind je informatie over alle spelers die sinds mei 2017 op TorchCraft hebben gespeeld, bijvoorbeeld hoe lang iemand online of voor het laatst ingelogd was. Er is nu een aparte pagina met <a href="https://www.torchcraft.nl/eventwinnaars.php" class="tekst">Event-winnaars</a>!<br>
<br>
Ook vind je hier de banlijst met de straffen die zijn uitgedeeld wegens het overtreden van de <a href="https://help.torchcraft.nl/algemene-informatie/regels" class="tekst">regels</a>. <br>
<br>
Wil je een unban of inkorting van je straf aanvragen? Maak dan een <a href="https://www.torchcraft.nl/ticket.php" class="tekst">ticket</a> of stuur een e-mail naar <a href="mailto:&#104;&#117;&#108;&#112;@torchcraft.&#110;&#108;" class="tekst">&#104;&#117;&#108;&#112;@torchcraft.&#110;&#108;</a>.<br>

<a name="anchor" class="anchor"></a>

    </div>

  </div>

  <div class="kolomrechts">

    <div class="paginarechterblok blokborder tekstopmaak">

      <div class="zijbalktitel">Zoek spelers</div>

<br>

            @livewire('player-search-bar')

<table class="banlijstlinks">
<tr>
<td width="20">
<div style="line-height:1.05" align="center">
                    <i class="fa fa-gavel"></i><br>
              <br>
                    <i class="fa fa-comment-slash"></i><br>
             <br>
                    <i class="fa-solid fa-arrow-up-right-from-square"></i><br>
              <br>
                    <i class="fa fa-triangle-exclamation"></i><br>
</div>
</td>
<td width="100">
<div style="line-height:1.05" align="left">

<x-nav-item :href="route('bans')" :active="request()->routeIs('bans')" wire:navigate>
                    @lang('messages.navbar_bans', ['total_bans' => $total_bans])
                </x-nav-item><br>

<x-nav-item :href="route('mutes')" :active="request()->routeIs('mutes')" wire:navigate>
                    @lang('messages.navbar_mutes', ['total_mutes' => $total_mutes])
                </x-nav-item><br>

                <x-nav-item :href="route('kicks')" :active="request()->routeIs('kicks')" wire:navigate>
                    @lang('messages.navbar_kicks', ['total_kicks' => $total_kicks])
                </x-nav-item><br>
                   
                <x-nav-item :href="route('warns')" :active="request()->routeIs('warns')" wire:navigate>
                    @lang('messages.navbar_warns', ['total_warns' => $total_warns])
                </x-nav-item><br>
</div>
</td>
</tr>
</table>

    </div>

  </div>
