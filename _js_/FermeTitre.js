$(document).ready(function(){
	$('#titre  .lesTitres2').hide(); 
	$("h1").click(function(){
		$(this).next("ul").slideToggle("slow").siblings("ul:visible").slideUp("slow");
	});
});