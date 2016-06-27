<!doctype html>

<div id="Navigation"> 
 
		<ul style = "list-style: none;">
			<li class="<?php if ($thisPage=="Index") {echo "active"; } else  {echo "noactive";}?>">
			<a href="../Index.php">Home</a></li>

			<li class="<?php if ($thisPage=="Articles") {echo "active"; } else  {echo "noactive";}?>">
			<a href="../Articles/articlesIndex.php">Articles</a></li>

			<li class="<?php if ($thisPage=="Profiles-and-Contact") {echo "active"; } else  {echo "noactive";}?>">
			<a href="../Profiles-and-Contact.php">Profiles | Contact</a></li>

			<li class="<?php if ($thisPage=="Goals") {echo "active"; } else  {echo "noactive";}?>">
			<a href="../Goals.php">Personal Goals</a></li>

			<li class="<?php if ($thisPage=="Fav-Quotes") {echo "active"; } else  {echo "noactive";}?>">
			<a href="../Fav-Quotes.php">Quotable Quotes</a></li>

			<li class="<?php if ($thisPage=="rpsIndex") {echo "active"; } else  {echo "noactive";}?>">
			<a href="./Games/gamesIndex.php">Awesome Games!!</a></li>			
		</ul>

</div>
