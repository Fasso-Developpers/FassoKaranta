<!-- The language to tranlate the page-->
<div id="lang_show">
		<p<?php 
			if (LABEL_LANG == 'en'){
				echo 'style="float:left";'; 
			}elseif (LABEL_LANG == 'fr') {
				echo 'style="float:left";'; 
			}elseif (LABEL_LANG == 'nko') {
				echo 'style="float:right";'; 
			}
			?>
			style="font-size:16px;">
			<?php 
			if (LABEL_LANG == 'en'){
				echo $en['language'].': '; 
			}elseif (LABEL_LANG == 'fr') {
				echo $fr['language'].': '; 
			}elseif (LABEL_LANG == 'nko') {
				echo $nko['language'].': '; 
			}
			foreach ($langues as $key => $value) {
				echo '<a title="'.$key.'" href="./'.THIS_PAGE.'.php?lang='.$key.'" >'.$value.'</a>';
			}
			?>
		</p>
	</div>