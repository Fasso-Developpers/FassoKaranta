<div id="menuContenu" class="ombre">
	<nav>
		<ul dir="auto" id="subMenu">
			<li <?php if(CHAPITRE == "profile") echo' class="active"'; ?>><a href="user/profile.php">Profile</a>
			<li <?php if(CHAPITRE == "recent") echo' class="active"'; ?>><a href="recent.php">Recent</a>
			<li <?php if(CHAPITRE == "manden") echo' class="active"'; ?>><a href="manden.php">Manden karanta</a>
			<li <?php if(CHAPITRE == "grammar") echo' class="active"'; ?>><a href="#">Students</a>
			<!--
			<li <?php if(CHAPITRE == "accents") echo' class="active"'; ?>><a href="translate.php">Translate</a>
			-->
		</ul>
	</nav>
</div>
</header>