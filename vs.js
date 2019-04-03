$(document).ready(function(){

    robotPlaceholderPath = 'img/robots/robot-placeholder.gif';

    // Failsafe - In case of ERR_FILE_NOT_FOUND, use the placeholder
    $('.gifRobot').on('error', function(){
        $(this).attr('src', '../' + robotPlaceholderPath);
    });

    getPage();
});

$(window).keypress(function(e) {
    if (e.which === 32) {
		getPage();
		var leftRobot = $("#leftRobot");
		var rightRobot = $("#rightRobot");
		var versus = $("#versus");
		
        rightRobot.animate({right:'120px'},{duration: 400});
		leftRobot.animate({left:'120px'},{duration: 400});
		
		$( "body" ).delay(400).effect( "shake", {direction:"up", distance: 8, times:8} );
		
		rightRobot.animate({right:'-20px'},{duration: 1000});
		leftRobot.animate({left:'-20px'},{duration: 1000});
		versus.delay(1000).fadeIn(1000);
    }
});

function getPage(){
	$.ajax({
        type: "POST",
        url: "../getActive.php",
        dataType: 'json'
    }).done(function(data){
        if(data == null) {}
		else {
            $.each(data,function(i,echipa) {
				numeEtapaActiv = echipa[11];
                numeEchipa1Activ = echipa[4];
                imgEchipa1Activ = echipa[5];
				scorEchipa1Activ = echipa[6];
				
                numeEchipa2Activ = echipa[8];
                imgEchipa2Activ = echipa[9];
				scorEchipa2Activ = echipa[10];
				
            });
			
			var scor = scorEchipa1Activ + " : " + scorEchipa2Activ;
				
            $("#gifEchipa1").attr('src', '../img/robots/' + (imgEchipa1Activ || robotPlaceholderPath)).show();
            $("#gifEchipa2").attr('src', '../img/robots/' + (imgEchipa2Activ || robotPlaceholderPath)).show();
			$("#gifEchipa2").attr('class', 'mirror').show();

            $("#numeEchipa1").text(numeEchipa1Activ);
            $("#numeEchipa2").text(numeEchipa2Activ);
			
			$("#scor").text(scor);
			$("#etapa").text(numeEtapaActiv);
        }
    });
	
}
