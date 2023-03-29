$(document).ready(function() {
        $('.saring').keyup(function(){
          var text = $(this).val();

          if (text != '') $('.view-item').parent().hide();
          else $('.view-item').parent().show();

          $('.view-item').filter(function(){
            return $(this).text().indexOf(text) !== -1;
          }) .parent().show();
        });

        $( function() {
          $( "#tabs" ).tabs();
        } );

        $('.side-nav li:not(#not)').click(function() {
          $('.side-nav li').removeClass('active');
          $(this).addClass("active");
        });

        $('.dropbtn').click(function(e) {
					e.stopPropagation();
					$('#myDropdown').addClass('show');
				});

				$('html').click(function(){
					if ($('#myDropdown').hasClass('show')) {
						$('#myDropdown').removeClass('show');
					};
				});

        $('contextmenu').hide();
        $('.view').contextmenu(function(e) {
          e.stopPropagation();
          $('#click-menu-content').addClass('item-click');
          $('#click-menu-content').slideDown(150);
          $('#click-menu-content').css('display','block');
          $('#click-menu-content').offset({left:e.pageX, top:e.pageY});
          if ($('#click-menu-content').css('display','block')) {
             $('#click-menu-global').css('display','none');
          }
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
        });
        
        $(window).click(function(e) {
          e.stopPropagation();
          $('#click-menu-content').css('display','none');
          $('#click-menu-global').css('display','none');
        });

        

        $(window).scroll(function(e) {
          e.stopPropagation();
          $('#click-menu-content').css('display','none');
          $('#click-menu-global').css('display','none');
        });

        $('#list-view').click(function() {
          $(this).addClass('on');
          $("#box-view").removeClass('on');
          $('.view').removeClass('box-view');
          $('.view').addClass('list-view');
          $('.js-is-hide').show();
        });

        $('#box-view').click(function() {
          $(this).addClass('on');
          $("#list-view").removeClass('on');
          $('.view').removeClass('list-view');
          $('.view').addClass('box-view'); 
          $('.js-is-hide').hide();
        });

        $('.view-item').dblclick(function(e) {
          if ($(this).hasClass('on')) {
            $(this).removeClass('on');
          } else {
            $(this).addClass('on');
          }
          e.stopPropagation();
        });

        

         

        


      });