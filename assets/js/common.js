$(document).ready(function() {
	if($('.blockMenuWrapper').find('.mg-sm-6').length > 2) {
	    $('.row').addClass('collapse');
	} else {
	    $('.row').removeClass('collapse');
	};
})


moment.locale("id");
Date.parseDate = function( input, format ){
  return moment(input,format).toDate();
};
Date.prototype.dateFormat = function( format ){
  return moment(this).format(format);
};
function editButton(url, id, value){

	if(value==null) value = "Edit";

	html = "<a href='"+url+"' class='button is-success tableButton buttonEdit' data-role='modal' data-header='Ubah Data'><span class='icon'><i class='fa fa-edit'></i></span>"+value+"</a>";

	return html;

}
function rupiah(data){
	return 'Rp.'+numeral(data).format('0,0.00');
}
function setSelectionRange(input, selectionStart, selectionEnd) {
  if (input.setSelectionRange) {
    input.focus();
    input.setSelectionRange(selectionStart, selectionEnd);
     console.log(input);
  } else if (input.createTextRange) {
    var range = input.createTextRange();
    range.collapse(true);
    range.moveEnd('character', selectionEnd);
    range.moveStart('character', selectionStart);
    range.select();
     console.log(range);
  }

}
function setCaretToPos(input, pos) {
  setSelectionRange(input, pos, pos);
}
function changeDropdown(objSource, objTarget, url){
  var data;
  $.ajax({
    url: url,
    dataType: 'json',
    async: false,
    success: function(xhr) {
      data = xhr;
    }
  });

  function reset(){
    objTarget.html('');
    $.each(data, function(key,value){
      objTarget.append('<option value="'+key+'">'+value+'</option>')
    })
  }
  reset();

}

function deleteButton(url, id, value){
	if(value==null) value = "Delete";
	html = "<a href='"+url+"' class='button is-danger buttonDelete' data-role='modal' data-header='Ubah Data'><span class='icon'><i class='fa fa-trash-alt'></i></span> Delete</a>";
	return html;
}

function insertButton(url, id, value){
	if(value==null) value = "Add";
	html = "<a href='"+url+"' class='button is-primary tableButton buttonAdd' data-role='modal' data-header='Tambah Data'><i class='fa fa-plus'></i>&nbsp;<span class='icon-text'> "+value+"</span></a>";
	return html;
}
function is_empty(data){

	if(data == null || data == '' || typeof data == 'undefined') {
		return true;
	}else{
		return false;
	}
}
function uniqId() {
  	return Math.round(new Date().getTime() + (Math.random() * 100));
}
function generateDropdown(el, data){

	var html = '<select name="'+data.name+'" class="form-control dropdownSmall">';
		$.each(data.option, function(key, value){
			var _select = '';
			if(parseInt(data.value) == key) _select = 'selected';

			html += '<option value="'+key+'" '+_select+'>'+value+'</option>';
		})
		html += '</select>'
	$(el).html(html);
}

function round(value, decimals){
	return Number(Math.round(value+'e'+decimals)+'e-'+decimals)
}
var getObjectSize = function(obj) {
    var len = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) len++;
    }
    return len;
};
function randomColor(){
	_color = [	'#C91F37',
				'#DC3023',
				'#9D2933',
				'#CF000F',
				'#E68364',
				'#F22613',
				'#CF3A24',
				'#C3272B',
				'#8F1D21',
				'#D24D57',
				'#F08F07',
				'#F47983',
				'#DB5A6B',
				'#C93756',
				'#FCC9B9',
				'#FFB3A7',
				'#F62459',
				'#F58F84',
				'#875F9A',
				'#5D3F6A',
				'#89729E',
				'#763568',
				'#8D608C',
				'#A87CA0',
				'#5B3256',
				'#BF55EC',
				'#8E44AD',
				'#9B59B6',
				'#BE90D4',
				'#4D8FAC',
				'#5D8CAE',
				'#22A7F0',
				'#19B5FE',
				'#59ABE3',
				'#48929B',
				'#317589',
				'#89C4F4',
				'#4B77BE',
				'#1F4788',
				'#003171',
				'#044F67',
				'#264348',
				'#7A942E',
				'#8DB255',
				'#5B8930',
				'#6B9362',
				'#407A52',
				'#006442',
				'#87D37C',
				'#26A65B',
				'#26C281',
				'#049372',
				'#2ABB9B',
				'#16A085',
				'#36D7B7',
				'#03A678',
				'#4DAF7C',
				'#D9B611',
				'#F3C13A',
				'#F7CA18',
				'#E2B13C',
				'#A17917',
				'#F5D76E',
				'#F4D03F',
				'#FFA400',
				'#E08A1E',
				'#FFB61E',
				'#FAA945',
				'#FFA631',
				'#FFB94E',
				'#E29C45',
				'#F9690E',
				'#CA6924',
				'#F5AB35',
				'#BFBFBF',
				'#BDC3C7',
				'#757D75',
				'#ABB7B7',
				'#6C7A89',
				'#95A5A6'];
	return _color[Math.floor(Math.random()*_color.length)];
}
function LightenDarkenColor(col, amt) {
  
    var usePound = false;
  
    if (col[0] == "#") {
        col = col.slice(1);
        usePound = true;
    }
 
    var num = parseInt(col,16);
 
    var r = (num >> 16) + amt;
 
    if (r > 255) r = 255;
    else if  (r < 0) r = 0;
 
    var b = ((num >> 8) & 0x00FF) + amt;
 
    if (b > 255) b = 255;
    else if  (b < 0) b = 0;
 
    var g = (num & 0x0000FF) + amt;
 
    if (g > 255) g = 255;
    else if (g < 0) g = 0;
 
    return (usePound?"#":"") + (g | (b << 8) | (r << 16)).toString(16);
  
}
function getHourMin(value){

	var _return = '';
	_hour = Math.floor(value / 60);
	_minute = (value % 60);

	if(_hour > 0){
		_return += _hour+' jam ';
	}
	if(_minute > 0){
		_return += _minute+' menit';
	}
	return _return;
}
function defaultDate(date){
	if(date=='lifetime'){
		return 'Seumur Hidup';
	}
	if(date != '' && date != null && typeof date !== 'undefined'){
		date = moment(date).format('DD MMMM YYYY');

	}

	if(date == null || date == ''){
		return '--';
	}
	return date;
}
function defaultDateTime(date){
	if(date=='lifetime'){
		return 'Seumur Hidup';
	}
	if(date != '' && date != null && typeof date !== 'undefined'){
		date = moment(date).format('DD MMMM YYYY HH:MM:SS');
	}

	if(date == null || date == ''){
		return '--';
	}
	return date;
}
$(function(){

	$(document).on('click', function(e){
		e.stopPropagation();
		$('.dropdown.open').removeClass('open');
		$('.searchOption').empty();

	})
	var acc = $(".accordion-header");
	var i;
	$(acc).on('click', function(e){
		var dt = e.target;
		var target = $(dt).attr('for');
		// console.log(target)
		$('#'+target).slideToggle('slow');
		// console.log($('#'+target));
	});

	// $(acc).on('click', function(e){
	// 	var dt = e.target;
	// 	var target = $(dt).attr('for');
		
	// 	$('#'+target).slideToggle('slow');
	// 	// console.log($('#'+target));
	// });
	
	$('.dropdown-toggle').on('click', function(e){
		e.stopPropagation();
		$('.navbar-dropdown').toggleClass('show');
		$('.fa').toggleClass("fa-angle-up");
	})
	// $('.has-dropdown').on('click', function(e){
	// 	e.stopPropagation();
	// })
	$('.npwp').iMask({
		type : 'fixed',
		mask : '99.999.999.9-999.999',
	});
	$('.__dd').on('click', function(){
		$('.sidebar-menu',$(this)).slideToggle();
	})

	
})
$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

function decimalFixed(dec){
	return parseFloat(Math.round(dec * 100) / 100).toFixed(2);
}
function normalize(obj){
	if(obj == null || obj == '' || typeof obj == 'undefined') {
		return '-';
	}else{
		return obj;
	}
}

;(function($){

	
    $.fn.extend({
        donetyping: function(callback,timeout){
            timeout = timeout || 1e3; // 1 second default timeout
            var timeoutReference,
                doneTyping = function(el){
                    if (!timeoutReference) return;
                    timeoutReference = null;
                    callback.call(el);
                };
            return this.each(function(i,el){
                var $el = $(el);
                // Chrome Fix (Use keyup over keypress to detect backspace)
                // thank you @palerdot
                $el.is(':input') && $el.on('keyup keypress paste',function(e){
                    // This catches the backspace button in chrome, but also prevents
                    // the event from triggering too preemptively. Without this line,
                    // using tab/shift+tab will make the focused element fire the callback.
                    if (e.type=='keyup' && e.keyCode!=8) return;
                    
                    // Check if timeout has been set. If it has, "reset" the clock and
                    // start over again.
                    if (timeoutReference) clearTimeout(timeoutReference);
                    timeoutReference = setTimeout(function(){
                        // if we made it here, our timeout has elapsed. Fire the
                        // callback
                        doneTyping(el);
                    }, timeout);
                }).on('blur',function(){
                    // If we can, fire the event since we're leaving the field
                    doneTyping(el);
                });
            });
        }
    });
})(jQuery);

