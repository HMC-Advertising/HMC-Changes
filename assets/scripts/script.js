(function($){
	$('#purchase1').on('click', function() {
		ga('send', 'event', 'button', 'click', 'purchase button one');
	});
	$('#purchase2').on('click', function() {
		ga('send', 'event', 'button', 'click', 'purchase button two');
	});
}(jQuery))