// - - - - - - - - - - 
// VENDORS CALL OUT
// - - - - - - - - - - 

$( function() {
    $( "#tabs" ).tabs();
} );



$( ".has-dropdown" ).click(function() {
	$(this).find('.is-dropdown').toggleClass("is-show");
	$(this).find('.fa').toggleClass("fa-angle-up");
});

$view = $('.view');

function switchView($param) {
	if ($param == 'box') {

		$view.removeClass('view-list');
		$view.addClass('view-'+$param);

		$view.parent().removeClass('col-12');
		$view.parent().addClass('col-4');

	} else if ($param == 'list') {

		$view.removeClass('view-box');
		$view.addClass('view-'+$param);

		$view.parent().removeClass('col-4');
		$view.parent().addClass('col-12');
	}
	console.log($param);
}

	$('contextmenu').hide();
        $('.view-item').contextmenu(function(e) {
          e.stopPropagation();
          $('#click-menu-content').addClass('item-click');
          $('#click-menu-content').slideDown(150);
          $('#click-menu-content').css('display','block');
          $('#click-menu-content').offset({left:e.pageX, top:e.pageY});
          if ($('#click-menu-content').css('display','block')) {
              $('#click-menu-global').css('display','none');
          }
          console.log(e)
        });

        $('#content').contextmenu(function(e) {
          e.stopPropagation();
          $('#click-menu-global').addClass('global');
          $('#click-menu-global').slideDown(150);
          $('#click-menu-global').css('display','block');
          $('#click-menu-global').offset({left:e.pageX, top:e.pageY});
          if ($('#click-menu-global').css('display','block')) {
            $('#click-menu-content').css('display','none');
          }
          console.log(e)
        });
        
        $(window).click(function(e) {
          e.stopPropagation();
          $('#click-menu-content').css('display','none');
          $('#click-menu-global').css('display','none');
        });


$( ".has-sidebar" ).click(function() {
	$('.sidenav').toggleClass('sidenav-mini');
});



