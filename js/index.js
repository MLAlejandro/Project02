 $("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
	 	setTimeout(function() {
        $(".wrapper").fadeOut(1000);
    },500);
	 $(document).ready(function() {   
    	setTimeout(function() {
        $(".fondo").fadeIn(1000);
    },500);
});
	  $(document).ready(function() {   
    	setTimeout(function() {
        	$(".formulario").fadeIn(1000);
    	},500);
});
	  $(document).ready(function() {   
    	setTimeout(function() {
        $("#formul").fadeIn(1000);
    },500);
});
});