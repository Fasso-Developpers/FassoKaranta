$(function(){
	// Vide les champs automatiquement */
						   
	$(".autoEmpty").each(function(){
        var defaultText = $(this).val();
        $(this).focus(function(){
            if($(this).val()==defaultText){
                $(this).val("");
            }
        });
        $(this).blur(function(){
            if($(this).val()==""){
                $(this).val(defaultText);
            }
        });
    });

});