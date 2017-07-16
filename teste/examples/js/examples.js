$(document).ready(function(){  

	$("#navigation1").navigation();
	
	$("#navigation2").navigation({
		effect: "slide"
	});
	
	$("#navigation3").navigation({
		animationOnShow: "zoom-in",
		animationOnHide: "zoom-out"
	});
	
	$("#navigation4").navigation({
		overlayColor: "rgba(140,193,82,0.8)"
	});
	
	$("#navigation5").navigation({
		hidden: true
	});
	$(".btn-show").click(function(){ 
		$("#navigation5").data("navigation").toggleOffcanvas();
	});
	
	$("#navigation6").navigation({
		offCanvasSide: "right"
	});
	
	$("#navigation7").navigation();
	
	
	$("html").on("contextmenu",function(e){
        return false;
    });
	$('html').on('cut copy paste', function (e) {
        e.preventDefault();
    });
	$('html').on("keypress keydown mousedown", function(event){
		event = (event || window.event); 
		if (event.keyCode == 123 || (event.ctrlKey && event.which == 85) || event.which == 3) {  
			return false;  
		} 
	});
	

	
});