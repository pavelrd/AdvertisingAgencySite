$(function(){
	
	var url="http://vendo-vita.ru/";
	
	$("#imgOutdoor").click( function(){	
		$(location).attr( 'href', url + "outdoor.php" );	
	});
	
	$("#imgTransport").click( function(){	
		$(location).attr( 'href', url + "transport.php" );	
	});	
	
	$("#imgIndoor").click( function(){	
		$(location).attr( 'href', url + "indoor.php" );	
	});
	
	$("#imgGift").click( function(){	
		$(location).attr( 'href', url + "presents.php" );	
	});
	
	console.log("started!")
	
});