$(document).ready(function(){
	chargePage("dohfoh/01.html")

	$('.lesLiens a').click(function(e){
		page=$(this).attr('href');

		e.preventDefault();
		chargePage(page);
	})

	function chargePage(page){
		$.ajax({
			url: page,
			cache: false,
			success : function(html){
				affiche(html)
			},
			error:function(){}
		})
	}
	function affiche(data){
		$('#paraTexte').fadeOut(500, function(){
			$('#paraTexte').empty().append(data).fadeIn(500)
		})
	}
})