$(document).ready(function(){
	//chargePage("_kogbei_/page.php");

	$('.lesLiens a').click(function(e){
		page=$(this).attr('href');

		e.preventDefault();
		chargePage(page);
	});

	function chargePage(page){
		$.ajax({
			url: page,
			cache: false,
			success : function(html){
				affiche(html);
			},
			error:function(){}
		});
	}
	function affiche(data){
		$('#videoPlace').fadeOut(500, function(){
			$('#videoPlace').empty().append(data).fadeIn(500);
		});
	}
});