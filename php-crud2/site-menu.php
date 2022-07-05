

<nav class="site-menu">
	<a class="<?php if ($page =='pages/home') 
		{ echo 'active'; } ?>" 
		href="?page=home">Home</a>

	<a class="<?php if ($page =='pages/list') { echo 'active'; }?>" 
		href="?page=list">All Athletes</a>
	<a class="<?php if ($page =='pages/basketball') { echo 'active'; }?>" 
		href="?page=list&sport=basketball">Basketball</a>
	<a class="<?php if ($page =='pages/football') { echo 'active'; }?>" 
		href="?page=list&sport=football">Football</a>
	<a class="<?php if ($page =='pages/huskies') { echo 'active'; }?>" 
		href="?page=list&college=University of Washington">Huskies</a>
	<a class="<?php if ($page =='pages/create') { echo 'active'; }?>" 
		href="?page=create">Add an Athlete</a>
</nav>

	