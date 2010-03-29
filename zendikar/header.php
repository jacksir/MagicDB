<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Customary 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20100103

-->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MagicDB</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<?
   require_once("db/db_connect.inc");
   if(isset($_GET['set']))
   {
     $set = $_GET['set'];
   }
   else
   {
     $set = "wwk";
   }
?>

<body>
<div id="wrapper">
	<div id="logo">
		<h1><a href="index.php">MagicDB</a></h1>
		<!-- <p><em> template design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></em></p> -->
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="index.php" class="first">Home</a></li>
				<li><a href="#">Cards</a></li>
				<li><a href="#">Search</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Links</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		<div id="search">
                        <form action="http://magiccards.info/query" method="get">
				<fieldset>
			<input type="text" name="q" id="search-text" size="15" />
			<input type="submit" id="search-submit" value="Search" />
				</fieldset>
			</form>

		</div>
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
	<div id="page-bgtop">
		<div id="sidebar">
			<ul>

  <li>Zendikar<ul>
  <li><a href="index.php?set=English Worldwake">Worldwake</a></li>
  <li><a href="index.php?set=English Zendikar">Zendikar</a></li>
  </ul>
  </li>
  <br>
  <li>Shards of Alara<ul>
  <li><a href="index.php?set=alara_reborn">Alara Reborn</a></li> 
  <li><a href="index.php?set=conflux">Conflux</a></li> 
  <li><a href="index.php?set=shards_of_alara">Shards of Alara</a></li> 
  </ul>
  </li>
  <br>
  <li>Shadowmoor <ul>
  <li><a href="index.php?set=eventide">Eventide</a></li> 
  <li><a href="index.php?set=shadowmoor">Shadowmoor</a></li> 
  </ul>
  </li>
  <br>
  <li>Lorywn <ul>
  <li><a href="index.php?set=morningtide">Morningtide</a></li> 
  <li><a href="index.php?set=lorwyn">Lorwyn</a></li> 
  </ul>
  </li>
  <br>
  <li>Time Spiral <ul>
  <li><a href="index.php?set=future_sight">Future Sight</a></li> 
  <li><a href="index.php?set=planar_chaos">Planar Chaos</a></li> 
  <li><a href="index.php?set=time_spiral">Time Spiral</a></li> 
  <li><a href="index.php?set=timeshifted">Time Spiral "Timeshifted"</a></li> 
  </ul>
  </li>
  <br>
  <li>Ice Age <ul>
  <li><a href="index.php?set=coldsnap">Coldsnap</a></li> 
  </ul></li>
  <br>
  <li>Ravnica <ul>
  <li><a href="index.php?set=dissension">Dissension</a></li> 
  <li><a href="index.php?set=guildpact">Guildpact</a></li> 
  <li><a href="index.php?set=ravnica">Ravnica: City of Guilds</a></li> 
  </ul></li>
  <br>
  <li>Kamigawa <ul>
  <li><a href="index.php?set=saviors">Saviors of Kamigawa</a></li> 
  <li><a href="index.php?set=betrayers">Betrayers of Kamigawa</a></li> 
  <li><a href="index.php?set=champions">Champions of Kamigawa</a></li> 
  </ul></li>
  <br>
  <li>Mirrodin <ul>
  <li><a href="index.php?set=fifth_dawn">Fifth Dawn</a></li> 
  <li><a href="index.php?set=darksteel">Darksteel</a></li> 
  <li><a href="index.php?set=mirrodin">Mirrodin</a></li> 
  </ul></li>
  <br>
  <li>Onslaught <ul>
  <li><a href="index.php?set=scourge">Scourge</a></li> 
  <li><a href="index.php?set=legions">Legions</a></li> 
  <li><a href="index.php?set=onslaught">Onslaught</a></li> 
  </ul></li>
  <br>
  <li>Odyssey <ul>
  <li><a href="index.php?set=judgment">Judgment</a></li> 
  <li><a href="index.php?set=torment">Torment</a></li> 
  <li><a href="index.php?set=odyssey">Odyssey</a></li> 
  </ul></li>
  <br>
  <li>Invasion <ul>
  <li><a href="index.php?set=apocalypse">Apocalypse</a></li> 
  <li><a href="index.php?set=planeshift">Planeshift</a></li> 
   <li><a href="index.php?set=invasion">Invasion</a></li> 
  </ul></li>
  <br>
  <li>Masquerade <ul>
  <li><a href="index.php?set=prophecy">Prophecy</a></li> 
  <li><a href="index.php?set=nemesis">Nemesis</a></li> 
  <li><a href="index.php?set=mercadian_masques">Mercadian Masques</a></li> 
  </ul></li>
  <br>
  <li>Artifacts <ul>
  <li><a href="index.php?set=urzas_destiny">Urza's Destiny</a></li> 
  <li><a href="index.php?set=urzas_legacy">Urza's Legacy</a></li> 
  <li><a href="index.php?set=urzas_saga">Urza's Saga</a></li> 
  </ul></li>
  <br>
  <li>Rath <ul>
  <li><a href="index.php?set=exodus">Exodus</a></li> 
  <li><a href="index.php?set=stronghold">Stronghold</a></li> 
  <li><a href="index.php?set=tempest">Tempest</a></li> 
  </ul></li>
  <br>
  <li>Mirage <ul>
  <li><a href="index.php?set=weatherlight">Weatherlight</a></li> 
  <li><a href="index.php?set=visions">Visions</a></li> 
  <li><a href="index.php?set=mirage">Mirage</a></li> 
  </ul></li>
  <br>
  <li>Ice Age <ul>
  <li><a href="index.php?set=ice_age">Ice Age</a></li> 
  <li><a href="index.php?set=homelands">Homelands</a></li> 
  <li><a href="index.php?set=alliances">Alliances</a></li> 
  </ul></li>
  <br>
  <li>Early Sets<ul>
  <li><a href="index.php?set=fallen_empires">Fallen Empires</a></li> 
  <li><a href="index.php?set=the_dark">The Dark</a></li> 
  <li><a href="index.php?set=legends">Legends</a></li> 
  <li><a href="index.php?set=antiquities">Antiquities</a></li> 
  <li><a href="index.php?set=an">Arabian Nights</a></li> 
  </ul></li>
  <br>
  <li>Core Set Editions<ul>
  <li><a href="index.php?set=magic_2010">Magic 2010</a></li> 
  <li><a href="index.php?set=tenth">Tenth Edition</a></li> 
  <li><a href="index.php?set=ninth">Ninth Edition</a></li> 
  <li><a href="index.php?set=eighth">Eighth Edition</a></li> 
  <li><a href="index.php?set=seventh">Seventh Edition</a></li> 
  <li><a href="index.php?set=sixth">Classic Sixth Edition</a></li> 
  <li><a href="index.php?set=fifth">Fifth Edition</a></li> 
  <li><a href="index.php?set=fourth">Fourth Edition</a></li> 
  <li><a href="index.php?set=revised">Revised Edition</a></li> 
  <li><a href="index.php?set=unlimited">Unlimited Edition</a></li> 
  <li><a href="index.php?set=beta">Limited Edition Beta</a></li> 
  <li><a href="index.php?set=alpha">Limited Edition Alpha</a></li> 
  </ul></li>
  <br>
<!--
  <h3>MTGO</h3><ul>
  <li>Magic Online<ul>
  <li><a href="index.php?set=worldwake">MTGO Masters Edition III</a> <small style="color: #aaa;">me3</small></li>
  <li><a href="index.php?set=worldwake">MTGO Masters Edition II</a> <small style="color: #aaa;">me2</small></li>
  <li><a href="index.php?set=worldwake">MTGO Masters Edition</a> <small style="color: #aaa;">med</small></li>
  </ul></li></ul>
  <h3>Special Sets</h3><ul>
  <li>Reprint Sets<ul>
  <li><a href="index.php?set=worldwake">Premium Deck Series: Slivers</a> <small style="color: #aaa;">pds</small></li>
  <li><a href="index.php?set=worldwake">Duel Decks: Garruk vs. Liliana</a> <small style="color: #aaa;">gvl</small></li>
  <li><a href="index.php?set=worldwake">Planechase</a> <small style="color: #aaa;">pch</small></li>
  <li><a href="index.php?set=worldwake">From the Vault: Exiled</a> <small style="color: #aaa;">fve</small></li>
  <li><a href="index.php?set=worldwake">Duel Decks: Divine vs. Demonic</a> <small style="color: #aaa;">dvd</small></li>
  <li><a href="index.php?set=worldwake">Duel Decks: Jace vs. Chandra</a> <small style="color: #aaa;">jvc</small></li>
  <li><a href="index.php?set=worldwake">From the Vault: Dragons</a> <small style="color: #aaa;">fvd</small></li>
  <li><a href="index.php?set=worldwake">Duel Decks: Elves vs. Goblins</a> <small style="color: #aaa;">evg</small></li>
  <li><a href="index.php?set=worldwake">Chronicles</a> <small style="color: #aaa;">ch</small></li>
  </ul></li>
  <li>Theme Decks<ul>
  <li><a href="index.php?set=worldwake">Coldsnap Theme Decks</a> <small style="color: #aaa;">cstd</small></li>
  </ul></li>
  <li>Independent Box Sets<ul>
  <li><a href="index.php?set=worldwake">Ninth Edition Box Set</a> <small style="color: #aaa;">9eb</small></li>
  <li><a href="index.php?set=worldwake">Eighth Edition Box Set</a> <small style="color: #aaa;">8eb</small></li>
  <li><a href="index.php?set=worldwake">Deckmasters</a> <small style="color: #aaa;">dm</small></li>
  <li><a href="index.php?set=worldwake">Beatdown Box Set</a> <small style="color: #aaa;">bd</small></li>
  <li><a href="index.php?set=worldwake">Battle Royale Box Set</a> <small style="color: #aaa;">br</small></li>
  <li><a href="index.php?set=worldwake">Anthologies</a> <small style="color: #aaa;">at</small></li>
  <li><a href="index.php?set=worldwake">Multiverse Gift Box Cards</a> <small style="color: #aaa;">mgbc</small></li>
  </ul></li>
  <li>Un-Serious Sets<ul>
  <li><a href="index.php?set=worldwake">Unhinged</a> <small style="color: #aaa;">uh</small></li>
  <li><a href="index.php?set=worldwake">Unglued</a> <small style="color: #aaa;">ug</small></li>
  </ul></li>
  <li>Alternate Art<ul>
  <li><a href="index.php?set=worldwake">Unhinged Alternate Foils</a> <small style="color: #aaa;">uhaa</small></li>
  </ul></li>
  <li>Beginner Sets<ul>
  <li><a href="index.php?set=worldwake">Starter 2000</a> <small style="color: #aaa;">st2k</small></li>
  <li><a href="index.php?set=worldwake">Starter 1999</a> <small style="color: #aaa;">st</small></li>
  <li><a href="index.php?set=worldwake">Portal Three Kingdoms</a> <small style="color: #aaa;">p3k</small></li>
  <li><a href="index.php?set=worldwake">Portal Second Age</a> <small style="color: #aaa;">po2</small></li>
  <li><a href="index.php?set=worldwake">Portal</a> <small style="color: #aaa;">po</small></li>
  <li><a href="index.php?set=worldwake">Introductory Two-Player Set</a> <small style="color: #aaa;">itp</small></li>
  </ul></li></ul>
  </td>
  <h3>Promo Cards</h3><ul>
  <li>Event Incentives<ul>
  <li><a href="index.php?set=worldwake">15th Anniversary</a> <small style="color: #aaa;">15ann</small></li>
  <li><a href="index.php?set=worldwake">Grand Prix</a> <small style="color: #aaa;">gpx</small></li>
  <li><a href="index.php?set=worldwake">Pro Tour</a> <small style="color: #aaa;">pro</small></li>
  <li><a href="index.php?set=worldwake">Magic Game Day Cards</a> <small style="color: #aaa;">mgdc</small></li>
  <li><a href="index.php?set=worldwake">Worlds</a> <small style="color: #aaa;">wrl</small></li>
  <li><a href="index.php?set=worldwake">Dragon Con</a> <small style="color: #aaa;">drc</small></li>
  </ul></li>
  <li>Tournament Rewards<ul>
  <li><a href="index.php?set=worldwake">Prerelease Events</a> <small style="color: #aaa;">ptc</small></li>
  <li><a href="index.php?set=worldwake">Release Events</a> <small style="color: #aaa;">rep</small></li>
  <li><a href="index.php?set=worldwake">Magic: The Gathering Launch Parties</a> <small style="color: #aaa;">mlp</small></li>
  <li><a href="index.php?set=worldwake">Summer of Magic</a> <small style="color: #aaa;">som</small></li>
  <li><a href="index.php?set=worldwake">Magic Scholarship Series</a> <small style="color: #aaa;">mss</small></li>
  <li><a href="index.php?set=worldwake">Gateway</a> <small style="color: #aaa;">grc</small></li>
  <li><a href="index.php?set=worldwake">Champs</a> <small style="color: #aaa;">cp</small></li>
  <li><a href="index.php?set=worldwake">Two-Headed Giant Tournament</a> <small style="color: #aaa;">thgt</small></li>
  <li><a href="index.php?set=worldwake">Junior Series</a> <small style="color: #aaa;">jsr</small></li>
  <li><a href="index.php?set=worldwake">APAC Junior Series</a> <small style="color: #aaa;">ajs</small></li>
  <li><a href="index.php?set=worldwake">Arena League</a> <small style="color: #aaa;">arena</small></li>
  <li><a href="index.php?set=worldwake">Friday Night Magic</a> <small style="color: #aaa;">fnmp</small></li>
  <li><a href="index.php?set=worldwake">Magic Player Rewards</a> <small style="color: #aaa;">mprp</small></li>
  <li><a href="index.php?set=worldwake">Super Series</a> <small style="color: #aaa;">sus</small></li>
  </ul></li>
  <li>Gifts<ul>
  <li><a href="index.php?set=worldwake">Happy Holidays</a> <small style="color: #aaa;">hho</small></li>
  <li><a href="index.php?set=worldwake">Judge Gift Program</a> <small style="color: #aaa;">jr</small></li>
  <li><a href="index.php?set=worldwake">Portal Demogame</a> <small style="color: #aaa;">pot</small></li>
  </ul></li>
  <li>Redemption Rewards<ul>
  <li><a href="index.php?set=worldwake">European Land Program</a> <small style="color: #aaa;">euro</small></li>
  <li><a href="index.php?set=worldwake">Guru</a> <small style="color: #aaa;">guru</small></li>
  <li><a href="index.php?set=worldwake">Asia Pacific Land Program</a> <small style="color: #aaa;">apac</small></li>
  <li><a href="index.php?set=worldwake">WotC Online Store</a> <small style="color: #aaa;">wotc</small></li>
  </ul></li>
  <li>Celebration Cards<ul>
  <li><a href="index.php?set=worldwake">Celebration Cards</a> <small style="color: #aaa;">uqc</small></li>
  </ul></li>
  <li>Media Inserts<ul>
  <li><a href="index.php?set=worldwake">Media Inserts</a> <small style="color: #aaa;">mbp</small></li>
  </ul></li>
  <li>Membership Incentives<ul>
  <li><a href="index.php?set=worldwake">Legend Membership</a> <small style="color: #aaa;">dcilm</small></li>
  </ul></li></ul>
-->

			</ul>
		</div>
		<!-- end #sidebar -->
		<div id="content">

			<div class="post">
				<!-- <p class="meta">Sunday, April 26, 2009 7:27 AM Posted by <a href="#">Someone</a></p> -->

<div class="entry">
