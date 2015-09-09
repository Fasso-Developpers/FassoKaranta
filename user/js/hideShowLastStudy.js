$(document).ready(function etatChexbox(){
    if($("#checkbox").checked){
        $("#checkbox").value='true';
    	$("#LastStudy").css({"display":"none"});
    	}
   else 
   		{
		$("#checkbox").value='false';
   		$("#LastStudy").css({"display":"visible"});
   		}
});