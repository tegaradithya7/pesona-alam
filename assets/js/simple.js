// - - - - - - - - - - - -
// - - - SIMPLE JS - - - -
// - - - - - - - - - - - -

// $().css('background','#000');

$('.has-dropdown').on('click',function() {
	console.log($(this))
	$(this).find('.is-dropdown').toggleClass("is-show");
	$(this).find('.spin').toggleClass("spin-effect");
});

$('.has-child').on('click',function() {
	$(this).find('.is-dropdown').toggleClass("is-show");
	$(this).find('.spin').toggleClass("spin-effect");
});
