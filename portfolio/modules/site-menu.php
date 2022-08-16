<nav>
	<ul>
   	<li><a class="<?php if (currentPage() == 'home') { echo 'active';}?>" href="?page=home">Home</a></li>
   	<li><a class="<?php if (currentPage() == 'projects') { echo 'active';}?>" href="?page=projects">Projects</a></li>
   	<li><a class="<?php if (currentPage() == 'about') { echo 'active';}?>" href="?page=about">About Me</a></li>
      <li><a class="<?php if (currentPage() == 'contact') { echo 'active';}?>" href="?page=contact">Contact Me</a></li>
   	<li><a class="<?php if (currentPage() == 'home') { echo 'active';}?>" href="?">Nothing, default home</a></li>
	</ul>
</nav>
