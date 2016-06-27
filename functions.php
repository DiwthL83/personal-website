<?php function style_link_func() {
		if ($thisSection=="Games" {
		(echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../style.css\">";
	} 
		if ($thisSection=="Articles") {
		(echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../style.css\">";
	} 
	else{ (echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";}
} ?>


<?php function Navigation_Choice() { 
	if ($thisSection=="Articles") { 
		echo "<?php include (\"Articles/Articles-Navigation.php\") ?>"; 
	}
	if ($thisSection=="Games") { 
		echo "<?php include (\"Games/Games-Navigation.php\") ?>"; 
	} 	
	else { echo "<?php include (\"Navigation.php\") ?>"; } 
}
?>
