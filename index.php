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
echo "<table cellspacing=3 cellpadding=3><tr><td><td><u><b>Card<td><u><b>Rarity</u><td><u><b>Color</u><td><u><b>Set</u><td><u><b>Type</u><td><u><b>Owned";

$pos = strpos($set, "Type");
if($pos !== false)
{
$color = explode(" ", $set);
$color = $color[1];
$sql = "SELECT * FROM cards where color='$color'";
}
else
{
if($set == "English Urzas Legacy") $set = "English Urza''s Legacy";
if($set == "English Urzas Destiny") $set = "English Urza''s Destiny";
if($set == "English Urzas Saga") $set = "English Urza''s Saga";
if($set == "Timeshifted") $set = "English Time Spiral \"Timeshifted\"";
$sql = "SELECT * FROM cards where set_name='$set'";
}
if(isset($_GET['owned']))
{
   $sql .= " and owned" . $_GET['owned'] . "";
}
$sql .= " order by card_name";
$sth = $dbHandle->query($sql);
foreach($sth as $row) 
{
   $count++;

   $set = $row['set_name'];
   $set = explode(" ", $set, 2);
   $set = $set[1];
   $type = $row['card_type'];
   $type = explode(" ", $type, 3);
   $type = $type[0];
   echo "<tr><td>$count<td><a href='http://magiccards.info/query?q=" . $row['card_name'] . "'>" . $row['card_name'] . "</a><td>" . $row['rarity'] . "<td>" . $row['color'] . "<td>" . $set . "<td>" . $type . "<td>";
   echo "<input type='text' size='5' name='" . $row['id'] . "' value='" . $row['owned'] . "'>";
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
