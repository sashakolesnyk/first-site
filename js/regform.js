$(document).ready(function (){
			$("#reglinkreg").on('click', function(){
				$("#regdisp").css('display', 'block');
				
				$("#reglinkreg").css('display', 'none');
				$("#submitent").css('display', 'none');
				
				$("#submitreg").css('display', 'inline-block');
				$("#reglinkaut").css('display', 'inline-block');
	});
	
	$("#reglinkaut").on('click', function(){
				$("#regdisp").css('display', 'none');
				
				$("#reglinkreg").css('display', 'inline-block');
				$("#submitent").css('display', 'inline-block');
				
				$("#submitreg").css('display', 'none');
				$("#reglinkaut").css('display', 'none');
	});
	
});

