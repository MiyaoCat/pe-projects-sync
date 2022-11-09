
	<div class="logo">
		<a href='https://peprojects.dev/alpha-4/john/?page=home'>
			<?php include('images/logo.svg') ?>
		</a>
	</div>

	<nav>
		<ul>
			<li>
				<a href="https://peprojects.dev/alpha-4/john/?page=contact" 
					class="<?php if ($page == 'contact') { echo 'active'; } ?>">Contact Me
				</a>
			</li>

			<li>
				<a href="https://peprojects.dev/alpha-4/john/?page=about"
					class="<?php if ($page == 'about') { echo 'active'; } ?>">About Me
				</a>
			</li>
			
			<li>
				<a href="https://peprojects.dev/alpha-4/john/?page=projects"
					class="<?php if ($page == 'projects') { echo 'active'; } ?>">Projects
				</a>
			</li>
		</ul>
	</nav>