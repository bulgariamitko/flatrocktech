$( document ).ready(function() {
    $('input[name=answer]').click(function() {
	    $(this).attr('selected', true);
	    $('input[name=submitanswer]').click();
	  });
    $('input[name=setting]').click(function() {
    	// remove style from current input
    	$('.bg-success').removeClass('bg-success');
    	$('.text-white').removeClass('text-white');
    	// add style to the new input
    	$(this).parent().addClass('text-white').parent().addClass('bg-success');
    });
});