<?
require_once("header.php");

//a ghetto hack that is hopefully temporary
if($set == "wwk")
{ 
   echo "<h3>Worldwake</h3>"; 
}
else 
{ 
   echo "<h3>$set</h3>"; 
}
$count=0;

echo "<form action='save.php'>";
echo "<input type='hidden' name='set' value='$set'>";
//something else that is ghetto
echo "<table cellspacing=0 cellpadding=0><tr><td><td><u><b>Card<td><u><b>Rarity</u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <td><u><b>Owned";

$sth = $dbHandle->query("SELECT * FROM $set");

foreach($sth as $row) 
{
   $count++;
   echo "<tr><td>$count<td><a href='http://magiccards.info/query?q=" . $row['card_name'] . "'>" . $row['card_name'] . "</a><td>" . $row['rarity'] . "<td>";
   echo "<input type='text' name='" . $row['id'] . "' value='" . $row['owned'] . "'>";
}

echo "</table>";

echo "<input type='submit'>";

echo "</form";


				?>
				</div>
			</div>

		</div>
		<!-- end #content -->
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	<!-- end #page -->
	<div id="footer-bgcontent">
	<div id="footer">
		<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>
