$(document).ready(function(){
	chargePage("page.php");

	$('#trad_link a').click(function(e){
		page=$(this).attr('href');

		e.preventDefault();
		chargePage(page);
	});

	function chargePage(page){
		$.ajax({
			url: page,
			cache: true,
			success : function(html){
				affiche(html);
			},
			error:function(){}
		});
	}
	function affiche(data){
		$('#translate_area').fadeOut(500, function(){
			$('#translate_area').empty().append(data).fadeIn(500);
		});
	}
});