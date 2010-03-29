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

//for each value in the previous form
foreach($_GET as $GetName => $GetAmount)
{ 
   //get all cards
   $sth = $dbHandle->query("SELECT * FROM cards where set_name='$set'");

   foreach($sth as $row) 
   {
       //find the card in the db that has id equal to GetName
       if($row['id'] == $GetName)
       { 
         if($row['owned'] != $GetAmount)
         {
            //echo "Changing " . $row['card_name'] . "from " . $row['owned'] . " to $GetAmount <br>"; 

	    $sql = "update cards set owned='$GetAmount' where id='$GetName'";


            $sth2 = $dbHandle->prepare($sql);

            $sth2->execute();

            echo "<p>Database updated successfully";;
         }
       }
   }
}


//print_r($_GET);




				?>
				</div>
			</div>

		</div>
		<!-- end #content -->
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
