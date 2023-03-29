;(function($, window, document, undefined){

	var pluginName 	= 'form';

	function Plugin(element, options){

		defaults 	= {
			url : null,
			wrapper : null,
			formTags : function(el, id_element){
				console.log(el)
				return el;
			},
			onsubmit: function(){

			},
			beforeSubmit:function(self, el, data){
				return true;
			},
			generateSuccess: function(data){

			},
			onError: function(data){

			},
			onSuccess: function(data){

			},
			processBeforeSend:function(data){
				return data;
			},
			formWrap: true,
			isReset: true,
			successMessage : '<strong>Sukses!</strong> Berhasil menyimpan data',
			errorMessage : '<strong>Gagal menyimpan data!</strong> Terjadi kesalahan'
		};
		self = this;

		this.element = element;

		this.options = $.extend( {}, defaults, options) ;

		this._defaults = defaults;
		this._name = pluginName;
		this.input = {};
		this.init();

		$('form',this.element).on('submit', function(e){
			e.preventDefault();
			self.send($(this));
		});

	}

	Plugin.prototype = {
		init : function(){
			$(self.element).empty();
			function caseForm(key, value){
				_count = (typeof self.input.length == 'undefined') ? 0 : self.input.length;
				
				if(value.readonly == true){
					var input = self.generateReadonly(key, value, value.type);
					self.input[_count] = input;
				}else{
					
					switch(value.type){
						case 'text' :
						case 'password' :
						case 'hidden' :
						case 'npwp' :
						case 'number' :
						case 'currency' :
						case 'money' :
						case 'money_asing' :
						case 'decimal' :
							var input = self.generateText(key, value, value.type);
							self.input[_count] = input;
						break;
						case 'google_captcha':
							var input = self.generateCaptcha(key, value, value.type);
							self.input[_count] = input;
						break
						case 'multiple_text' :
							var input = self.generateMultipleText(key, value, value.type);
							self.input[_count] = input;
						break;
						case 'file' :
							var input = self.generateFile(key, value);
							self.input[_count] = input;
						break;
						case 'multiple_file' :
							var input = self.generateMultipleFile(key, value);
							self.input[_count] = input;
						break;
						case 'textarea' :
							var input = self.generateTextarea(key, value);
							self.input[_count] = input;
						break;
						case 'custom_text' :
							var input = self.generateCustomtext(key, value);
							self.input[_count] = input;
						break;
						case 'search' :
							var input = self.generateSearch(key, value);
							self.input[_count] = input;
						break;
						case 'dropdown' :
							var input = self.generateDropdown(key, value);
							self.input[_count] = input;
						break;
						case 'multiple' :
							var input = self.generateMultiple(key, value);
							self.input[_count] = input;
						break;
						case 'radio' :
						case 'radioList' :
							var input = self.generateRadio(key, value);
							self.input[_count] = input;
						break;
						case 'checkbox' :
						case 'checkboxList' :
							var input = self.generateCheckbox(key, value);
							self.input[_count] = input;
						break;
						case 'time' :
							var input = self.generateTimePicker(key, value);
							self.input[_count] = input;
						break;
						case 'date' :
							var input = self.generateDate(key, value);
							self.input[_count] = input;
						break;
						case 'dateTime' :
							var input = self.generateDateTime(key, value);
							self.input[_count] = input;
						break;
						case 'lifetimeDate' :
							var input = self.generateLifetimeDate(key, value);
							self.input[_count] = input;
						break;
						case 'date_range' :
							var input = self.generateDateRange(key, value);
							self.input[_count] = input;
						break;
						case 'date_range_lifetime' :
							var input = self.generateDateRangeLifetime(key, value);
							self.input[_count] = input;
						break;
						case 'dateperiod' :
							var input = self.generateDatePeriod(key, value);
							self.input[_count] = input;
						break;
					}
				}
			}
			
			if(typeof this.options.form!='undefined' &&  this.options.form != null){
				
				if(typeof this.options.form[0] == 'undefined' ){

					
					self.generateFormTags(self.formTags);

					
					__tags = self.formTags;
					var key = 0;
					$.each(this.options.form, function(keys, values){
						
						$(__tags).append('<div id="'+keys+'" class="col col-6"></div>');

						$.each(values, function(__key, value){

							self.formTags = $('#'+keys,__tags);

							caseForm(key, value);

							key++;
							
						});

					});
				}else{
					self.generateFormTags(self.formTags);
					var key = 0;
					$.each(this.options.form, function(keys, value){
						caseForm(key, value);
						key++;
					});
					
				}
				
			}else{
				self.generateFormTags(self.formTags);

			}

			this.generateButton(this.formTags, this.options.button);

			$('.npwp').iMask({
				type : 'fixed',
				mask : '99.999.999.9-999.999',
			});
			$('.decimal').iMask({
				type : 'number',
				
			});

			$('.money').iMask({
				type : 'number'
			});

		},

		/**
		Generate HTML table
		**/
		button : {

			buttonWrapper : function(element){
				$(element).append('<div class="form-group btn-group"></div>');

				return $('.form-group.btn-group', element);
			},

			submit : function(element, key, value){
				$(element).append('<button type="submit" class="button is-primary btn-submit '+value.class+'" >'+value.label+'</button>');
			},
			delete : function(element, key, value){
				$(element).append('<button type="submit" class="button is-danger btn-submit '+value.class+'" >'+value.label+'</button>');
			},
			reset : function(element, key, value){
				$(element).append('<button type="button" class="button is-danger btn-reset '+value.class+'" >'+value.label+'</button>');
				$('.btn-reset', element).on('click', function(e){
					var parent = $(this).closest('.form');
					$('.form-control', parent).val('');
				})
			},
			cancel : function(element, key, value){
				$(element).append('<button class="button btn-cancel '+value.class+'" >'+value.label+'</button>');
				$('.btn-cancel', element).on('click', function(e){
					e.preventDefault();
					var _parent = $(this).parents('.modal');
					$('.close', _parent).trigger('click');
				})
			},
			yes :function(element, key, value){
				$(element).append('<button type="button" class="button is-success btn-yes '+value.class+'" >'+value.label+'</button>');
			},
			no : function(element, key, value){
				$(element).append('<button type="button" class="button is-danger btn-no '+value.class+'" >'+value.label+'</button>');
			},
			button : function(element, key, value){
				$(element).append('<button type="button" class="button is-primary '+value.class+'" >'+value.label+'</button>');
			}

		},
		send : function(el){
			self.removeError(el);
			if(self.options.beforeSubmit){
				form = $(el);
				formData = new FormData($(el)[0]);
				formData = self.options.processBeforeSend(formData);
				$.ajax({
					async: false,
					url : $(form).attr('action'),
					method : 'POST',
					data: formData,
					processData: false,
					contentType: false,
					dataType: 'json',
	   				beforeSend: function(xhr){
						$('.btn-submit',form).attr('disabled', 'disabled').addClass('btn-loader');
					},
					success: function(xhr){
						if(xhr.status=='success'){
							self.generateSuccess(xhr);
						}else{
							self.options.onError(xhr);
							self.generateError(xhr.form);
						}
					},
					error: function(xhr){

					},
					complete: function(xhr){
						form = $('.btn-submit',form);

						setTimeout(function(){
							form.attr('disabled', false);
							form.removeClass('btn-loader');
						}, 1000);
					}
				})
			}
			
		},
		generateButton: function (wrapper, button){
			var _wrapper = this.button.buttonWrapper(wrapper);

			$.each(button, function(key, value){
				switch(value.type){
					case 'submit' :
						self.button.submit(_wrapper, key, value);
					break;
					case 'yes' :
						self.button.yes(_wrapper, key, value);
					break;
					case 'no' :
						self.button.no(_wrapper, key, value);
					break;
					case 'reset' :
						self.button.reset(_wrapper, key, value);
					break;
					case 'delete' :
						self.button.delete(_wrapper, key, value);
					break;
					case 'cancel' :
						self.button.cancel(_wrapper, key, value);
					break;
					default:
						self.button.button(_wrapper, key, value);
				}
			})
		},
		generateWrapper : function(key, data, element, read_only=false, is_half=false, is_full=false){
			var _read_only = (read_only==false) ? '' : 'read_only';
			var _half = (is_half==false) ? '' : 'half';
			var _full = (is_full==false) ? '' : 'full';
			
			$(element).append('<fieldset class="form-group '+_read_only+' '+_half+' '+_full+' form'+key+' " for="'+data.field+'"></fieldset>');
			return $('fieldset.form-group.form'+key, element);
		},
		generateFile: function(key, data, type){

			_this = this;
			var _closeTags;
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			var wrapper = this.generateWrapper(key,data,  self.formTags, data.read_only, data.half);
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
				__label = data.label.split('|');
				if(__label.length > 1){
					$(wrapper).append('<label for="'+data.id+'">'+__label[0]+is_required+'<span class="english-caption">('+__label[1]+')</span></label>');
				}else{
					$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
				}
			$(wrapper).append('<input type="file" class="form-control" id="'+data.id+'"  name="'+data.field+'" class="'+data.class+'"/><input type="hidden" name="'+data.field+'" value="'+data.value+'">');
			if(data.value!=''){
				file = btoa(data.upload_path+'/'+data.value);
				$(wrapper).append('<div class="fileUploadBlock"><i class="fa fa-upload"></i>&nbsp;<a href="'+base_url+'open/file/'+file+'" target="_blank">'+data.value+'</a><div class="deleteFile"><i class="fa fa-trash"></i></div></div>');
				$('.deleteFile', wrapper).on('click',function(e){
					$('.form-control',wrapper).show();
					$('input[type=hidden]',wrapper).val('');
					$('.fileUploadBlock', wrapper).remove();
				});
				$('.form-control',wrapper).hide();
				$('.error-help',wrapper).hide();
			}


			$('input.form-control ',wrapper).on('change', function(e){
				_this.removeError(wrapper);

				var _files = $(this);
				var myFormData  = new FormData();
				myFormData .append(data.field, $('.form-control', wrapper).prop('files')[0]);
				myFormData .append('allowed_types', data.allowed_types);

				$.ajax({
					url: data.upload_url,
					type: 'POST',
					processData: false,
					contentType: false,
					dataType: 'json',
					data: myFormData,
					beforeSend: function(){
						_files.addClass('sending');
					},
					success: function(xhr){
						_files.val('');
						if(xhr.status=='success'){
							file = btoa(xhr.upload_path);
							$('[type="hidden"]',wrapper).after('<div class="fileUploadBlock"><i class="fa fa-upload"></i>&nbsp;<a href="'+base_url+'open/file/'+file+'" target="blank">'+xhr.file_name+'</a><div class="deleteFile"><i class="fa fa-trash"></i></div></div>');
							$('.deleteFile', wrapper).on('click',function(e){
								$('.form-control',wrapper).show();
								$('input[type=hidden]',wrapper).val('');
								$('.fileUploadBlock', wrapper).remove();
							});
							$('input[type=hidden]',wrapper).val(xhr.file_name);
							$('.form-control',wrapper).hide();
							$('.error-help',wrapper).hide();
							_files.removeClass('sending');

						}else{
							$(wrapper).addClass('form-error');
							$(wrapper).append('<small class="error-help">'+xhr.message+'</small>');
							_files.removeClass('sending');
						}

					}
				});
			});
			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateMultipleFile: function(key, data, type){

			_this = this;
			var _closeTags;
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			var wrapper = this.generateWrapper(key,data,  self.formTags, data.read_only, data.half);
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
			var no = 1;
			
			if(data.value!=''){
				var content = data.value.split(',');
				$.each(content, function(key, value){
					no++;
					var input = $('<input type="file" class="form-control " id="'+data.id+'" data-no="'+(key+1)+'" name="'+data.field+'['+(key+1)+']" class="'+data.class+'"/><input type="hidden" name="'+data.field+'['+(key+1)+']" value="'+value+'">')
					$(wrapper).append(input);
					file = btoa(data.upload_path+'/'+value);
					$(wrapper).append('<div class="fileUploadBlock" id="'+data.field+'['+(key+1)+']"><i class="fa fa-upload"></i>&nbsp;<a href="'+base_url+'open/file/'+file+'" target="_blank">'+value+'</a><div class="deleteFile"><i class="fa fa-trash"></i></div></div>');
					$('.deleteFile', wrapper).on('click',function(e){
						$('.form-control',wrapper).show();
						$('input[type=hidden]',wrapper).val('');
						$('.fileUploadBlock', wrapper).remove();
					});
					$('.form-control',wrapper).hide();
					$('.error-help',wrapper).hide();
				});				
				$(wrapper).append('<a class="tambahLampiran" href="#"> + Tambah Lampiran</a>')
			}else{
				var input = $('<input type="file" class="form-control " id="'+data.id+'" data-no="'+no+'" name="'+data.field+'['+no+']" class="'+data.class+'"/><input type="hidden" name="'+data.field+'['+no+']" value="'+data.value+'">')
				$(wrapper).append(input);
				$(wrapper).append('<a class="tambahLampiran" href="#"> + Tambah Lampiran</a>')
			}
			
			function process(obj){

				_this.removeError(wrapper);
				no = obj.data("no");
				var _files = obj;
				var myFormData  = new FormData();
				myFormData .append(data.field+'['+no+']', $(obj).prop('files')[0]);
				myFormData .append('allowed_types', data.allowed_types);

				$.ajax({
					url: data.upload_url,
					type: 'POST',
					processData: false,
					contentType: false,
					dataType: 'json',
					data: myFormData,
					beforeSend: function(){
						_files.addClass('sending');
					},
					success: function(xhr){
						_files.val('');
						if(xhr.status=='success'){
							file = btoa(xhr.upload_path);
							$(_files).after('<div class="fileUploadBlock" id="'+data.field+'_'+no+'" no="'+no+'"><i class="fa fa-upload"></i>&nbsp;<a href="'+base_url+'open/file/'+file+'" target="blank">'+xhr.file_name+'</a><div class="deleteFile" ><i class="fa fa-trash"></i></div></div>');
							$('.deleteFile', wrapper).on('click',function(e){
								$('.form-control[name="'+data.field+'['+no+']"]',wrapper).show();
								$('input[type=hidden][name="'+data.field+'['+no+']"]',wrapper).val('');
								$(this).parent().remove();
							});
							$('input[type=hidden][name="'+data.field+'['+no+']"]').val(xhr.file_name);
							$(_files).hide();
							$('.error-help',wrapper).hide();
							_files.removeClass('sending');

						}else{
							$(wrapper).addClass('form-error');
							$(wrapper).append('<small class="error-help">'+xhr.message+'</small>');
							_files.removeClass('sending');
						}

					}
				});
			}

			$('.tambahLampiran',wrapper).on('click', function(e){
				e.preventDefault();
				// _input = input.clone();
				__no = no + 1;
				new_input = $('<input type="file" class="form-control " id="'+data.id+'" data-no="'+__no+'" name="'+data.field+'['+__no+']" class="'+data.class+'"/><input type="hidden" name="'+data.field+'['+__no+']" value="">')
				_input = new_input.clone();
				// no = parseInt(_input.data('no')) + __no;

				$(_input).attr('data-no', __no);
				$(_input).data('no', __no);
				$(_input).attr('name', data.field +'['+__no+']');
				$(_input).show();

				no++;

				$(this).before(_input);
				// $(this).before('<div class="fileUploadBlock"><i class="fa fa-upload"></i>&nbsp;<a href="'+data.upload_path+'/'+data.value+'" target="_blank">'+data.value+'</a><div class="deleteFile"><i class="fa fa-trash"></i></div></div>');
				

				$(_input).on('change', function(e){
					console.log($(this));
					process($(this))
					
				});
			});

			$('input.form-control ',wrapper).on('change', function(e){

				process($(this))

				
			});
			
			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}

			return $('.form-control', wrapper);
		},
		generateCaptcha : function(key, data, type){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			var wrapper = this.generateWrapper(key,data,  this.formTags, data.read_only, data.half);
			var input = $('<div class="g-recaptcha" data-sitekey="'+google_captcha_key+'"></div>');
			$(wrapper).append(input);
		},
		generateMultipleText : function(key, data, type){
			var _closeTags;

			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.placeholder = (typeof data.placeholder == "undefined") ? '' : data.placeholder ;

			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			_class = (type == 'npwp') ? 'npwp' : '';
			_class = (type == 'money' || type=='money_asing') ? 'money' : '';
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			is_half = (/half/.test(data.class)) ? 'half' : '';
			no  = 1;
			var opt = data.value.split(',');
			var wrapper = this.generateWrapper(key,data,  self.formTags, data.read_only, data.half);
			if(typeof data.label !='undefined'){
				$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
			}
			if(opt.length>1){


				$.each(opt, function(key, value){
					
					no = key + 1;
					
					
					if(typeof data.icon !='undefined'){
						var input = $('<div class="input-group"><div class="input-group-addon" ><i class="'+data.icon+'"></i></div><input type="'+type+'" class="form-control '+data.class+'" id="'+data.id+'" value="'+value+'" data-no="'+no+'" name="'+data.field +'['+no+']'+'" placeholder="'+data.placeholder+'"/></div>');
						$(wrapper).append(input);
					}else{
						var input = $('<input type="'+type+'" class="form-control '+_class+' '+data.class+'" id="'+data.id+'" value="'+value+'" data-no="'+no+'" name="'+data.field +'['+no+']'+'" placeholder="'+data.placeholder+'"/></div>');
						$(wrapper).append(input);
					}

				
				})
			}else{
				
					if(typeof data.icon !='undefined'){
						var input = $('<div class="input-group"><div class="input-group-addon" ><i class="'+data.icon+'"></i></div><input type="'+type+'" class="form-control '+data.class+'" id="'+data.id+'" value="'+data.value+'" data-no="'+no+'" name="'+data.field +'['+no+']'+'" placeholder="'+data.placeholder+'"/></div>');
						$(wrapper).append(input);
					}else{
						var input = $('<input type="'+type+'" class="form-control '+_class+' '+data.class+'" id="'+data.id+'" value="'+data.value+'" data-no="'+no+'" name="'+data.field +'['+no+']'+'" placeholder="'+data.placeholder+'"/></div>');
						$(wrapper).append(input);
					}

			}
			
			$(wrapper).append('<a class="tambahIsian" href="#"> + Tambah Isian</a>')

			$('.tambahIsian',wrapper).on('click', function(e){
				e.preventDefault();
				_input = input.clone();
				no = parseInt(_input.data('no')) + 1;

				$(_input).attr('data-no', no);
				$(_input).data('no', no);
				$(_input).attr('name', data.field +'['+no+']');
				$(_input).val('');

				$(this).before(_input);
				// $(this).before('<div class="fileUploadBlock"><i class="fa fa-upload"></i>&nbsp;<a href="'+data.upload_path+'/'+data.value+'" target="_blank">'+data.value+'</a><div class="deleteFile"><i class="fa fa-trash"></i></div></div>');
				$('input[type="text"]',_input).show();

			})
			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateText : function(key, data, type){
			var _closeTags;

			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.placeholder = (typeof data.placeholder == "undefined") ? '' : data.placeholder ;

			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			_class = (type == 'npwp') ? 'npwp' : '';
			_class = (type == 'money' || type=='money_asing') ? 'money' : '';
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			is_half = (/half/.test(data.class)) ? 'half' : '';

			if(type!="hidden"){
				var wrapper = this.generateWrapper(key,data,  self.formTags, data.read_only, data.half);
				if(typeof data.label !='undefined'){
					__label = data.label.split('|');
					if(__label.length > 1){
						$(wrapper).append('<label for="'+data.id+'">'+__label[0]+is_required+'<span class="english-caption">('+__label[1]+')</span></label>');
					}else{
						$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
					}
					
				}
				if(typeof data.icon !='undefined'){
					$(wrapper).append('<div class="input-group"><div class="input-group-addon" ><i class="'+data.icon+'"></i></div><input type="'+type+'" class="form-control '+data.class+'" id="'+data.id+'" value="'+data.value+'" name="'+data.field+'" placeholder="'+data.placeholder+'"/></div>');
				}else{

					if(type=='npwp') {
						data.class += ' npwp';
						type='text';
					}
					if(type=='decimal') {
						data.class += ' decimal';
						type='text';
					}
					if(type=='currency') {
						type='text';
						// data.value = $.number(data.value,0, '.');
						data.class += ' money';
					}
					if(type=='money') {
						type='text';
						data.value = numeral(data.value).format('0,0.00');;
						// console.log(wrapper);
						$(wrapper).append('Rp ');
						data.class += ' money';
						if(data.value==''){
							data.value='0.00';
						}
					}
					if(type=='money_asing'){
						console.log(data);
						var _select = "<select name='"+data.field[0	]+"' class='form-control money-asing mg-xs-2' >";
						$.each(data.source, function(keys, value){
							_selected = (data.value[0]==keys) ? 'selected' : '';
							_select += "<option value='"+keys+"' "+_selected+">"+value+"</option>";
						});
						_select += "</select>";
						$(wrapper).append(_select);
						_class += ' money-asing mg-xs-10';
						data.field = data.field[1];
						data.value = $.number(data.value[1],0, '.');
						if(data.value==''){
							data.value='0.00';
						}
					}

					$(wrapper).append('<input type="'+type+'" class="form-control '+_class+' '+data.class+'" id="'+data.id+'" value="'+data.value+'" name="'+data.field+'" placeholder="'+data.placeholder+'"/></div>');
				}

			}else{

				$(self.formTags).append('<input type="'+type+'" class="form-control '+data.class+' " id="'+data.id+'" value="'+data.value+'" name="'+data.field+'"/>');

			}

			if(type=='money') {
				var range = $('.form-control[name="'+data.field+'"]', wrapper);
				var _l = range.val().length;

				var pos = _l - 3;
				setCaretToPos(range[0], pos);
				range.on('click mousedown', function(){
					setCaretToPos(range[0], pos);
				})
			}

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateCustomtext : function(key, data, type){

			var wrapper = this.generateWrapper(key,data,  self.formTags);
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}

			if(typeof data.label !='undefined'){
				$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
			}

			$(wrapper).append('<textarea class="form-control generate-custom-text '+data.class+'" id="'+data.id+'" name="'+data.field+'" >'+data.value+'</textarea>');

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateDate: function(key, data){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.placeholder = (typeof data.placeholder == "undefined") ? '' : data.placeholder ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			var wrapper = this.generateWrapper(key,data,  self.formTags);
			__label = data.label.split('|');
					if(__label.length > 1){
						$(wrapper).append('<label for="'+data.id+'">'+__label[0]+is_required+'<span class="english-caption">('+__label[1]+')</span></label><div class="wrapper"></div>');
					}else{
						$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label><div class="wrapper"></div>');
					}
			// $(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');

				$('.wrapper',wrapper).append('<input type="text" class="form-control datePicker '+data.class+'" id="'+data.id+key+'" value="'+data.value+'" name="'+data.field+'" />');

			$('.datePicker', wrapper).datetimepicker({
				timepicker: false,
				format: 'Y-m-d',
				scrollMonth : false,
				scrollInput : false
			});

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateDateTime: function(key, data){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.placeholder = (typeof data.placeholder == "undefined") ? '' : data.placeholder ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			var wrapper = this.generateWrapper(key,data,  self.formTags);

			$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label><div class="wrapper"></div>');

				$('.wrapper',wrapper).append('<input type="text" class="form-control datePicker '+data.class+'" id="'+data.id+key+'" value="'+data.value+'" name="'+data.field+'" />');


			$('.datePicker', wrapper).datetimepicker({
				format: 'Y-m-d H:i',
				scrollMonth : false,
				scrollInput : false
			});
			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateLifetimeDate: function(key, data){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.placeholder = (typeof data.placeholder == "undefined") ? '' : data.placeholder ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			data.sub_caption = (typeof data.sub_caption == "undefined") ? 'Seumur Hidup' : data.sub_caption  ;
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			var wrapper = this.generateWrapper(key,data,  self.formTags);

			$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label><div class="wrapper"></div>');
			var setValue;
			if(data.value=='lifetime'){
				setValue='';
			}else{
				setValue=data.value;
			}
			$('.wrapper',wrapper).append('<input type="text" class="form-control datePicker '+data.class+'" id="'+data.id+key+'" value="'+setValue+'" name="'+data.field+'" />');
			$('.wrapper',wrapper).append('<div class="lifetimeWrapper"><input type="checkbox" class="form-control lifetime" id="'+data.id+key+'" value="lifetime" name="'+data.field+'" />&nbsp;<span>'+data.sub_caption+'</span></div>');
			if(data.value=='lifetime'){
				$('.lifetime.form-control',wrapper).prop('checked','checked');
			}
			$('.datePicker', wrapper).datetimepicker({
				timepicker: false,
				format: 'Y-m-d',
				scrollMonth : false,
				scrollInput : false
			});

				if($('.lifetime.form-control',wrapper).is(':checked')){
					$('.form-control.datePicker',wrapper).hide();
				}

				$('.lifetime.form-control',wrapper).on('change',function(){
					$('.form-control.datePicker',wrapper).toggle();
					$('.form-control.datePicker',wrapper).val('');
				})


			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateDateRangeLifetime: function(key, data){

			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.placeholder = (typeof data.placeholder == "undefined") ? '' : data.placeholder ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			var wrapper = this.generateWrapper(key,data,  self.formTags);

			$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label><div class="rangeWrapper"></div><div class="wrapper"></div>');
			$.each(data.field, function(key, value){
				if(key!=0){
					$('.rangeWrapper',wrapper).append(' - ')
				}
				$('.rangeWrapper',wrapper).append('<input type="text" class="form-control datePicker dateRange '+data.class+'" id="'+data.id+key+'" value="'+data.value+'" name="'+value+'" />');
			});
			$('.wrapper',wrapper).append('<div class="lifetimeWrapper"><input type="checkbox" class="form-control lifetime '+data.class+'" id="'+data.id+key+'" value="lifetime" name="'+data.field+'" />&nbsp;<span>Seumur Hidup</span></div>');

			if(data.value=='lifetime'){
				$('.lifetime.form-control',wrapper).prop('checked','checked');
			}

			$('.datePicker', wrapper).datetimepicker({
				timepicker: false,
				format: 'Y-m-d',
				scrollMonth : false,
				scrollInput : false
			});

			if($('.lifetime.form-control',wrapper).is(':checked')){
				$('.rangeWrapper',wrapper).hide();
			}

			$('.lifetime.form-control',wrapper).on('change',function(){
				$('.rangeWrapper',wrapper).toggle();
				$('.form-control.datePicker.dateRange',wrapper).val('');
			})

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateReadonly: function(key, data, type){
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			var wrapper = this.generateWrapper(key,data,  self.formTags, true);
			if(typeof data.label !='undefined'){
				$(wrapper).append('<label for="'+data.id+'">'+data.label+'</label>');
			}
			if(type=='file'){
				file = btoa('assets/lampiran/'+data.field+'/'+data.value+'');
				$(wrapper).append('<b>:</b><span><a href="'+base_url+'open/file/'+file+'" target="blank">'+data.value+'</a></span>');
			}else if(type=='multiple_file'){
				$(wrapper).append('<b>:</b><span class="multipleLampiran"></span>');
				var content = data.value.split(',');
				file = btoa('assets/lampiran/'+data.field+'/'+data.value+'');
				$.each(content, function(key, value){
					$('.multipleLampiran', wrapper).append('<p><a href="'+base_url+'open/file/'+file+'" target="blank">'+value+'</a></p>')
				});
			}else if(type=='radio'){
				data.value = (typeof data.source[data.value] == "undefined" || data.source[data.value]==null) ? '' : data.source[data.value] ;
				$(wrapper).append('<b>:</b><span>'+data.value+'</span>');
			}else if(type=='dropdown'){
				data.value = (typeof data.source[data.value] == "undefined" || data.source[data.value]==null) ? '' : data.source[data.value] ;
				$(wrapper).append('<b>:</b><span>'+data.value+'</span>');
			}else if(type=='hidden'){
				$(wrapper).append('<div style="display: none"><b>:</b><span>'+data.value+'</span></div>');
			}else if(type=='multiple'){
				var _val = data.value.split(',');
				var _return = '';
				
				$.each(_val,function(key,value){
					_return +=data.source[value]+', ';
				})
				$(wrapper).append('<b>:</b><span>'+_return+'</span>');
			}else if(type=='date'){
				$(wrapper).append('<b>:</b><span>'+defaultDate(data.value)+'</span>');
			}else if(type=='lifetimeDate'){
				if(data.value=='lifetime'){
					$(wrapper).append('<b>:</b><span>Seumur Hidup</span>');
				}else{
					$(wrapper).append('<b>:</b><span>'+defaultDate(data.value)+'</span>');
				}
				
			}else if(type=='dateTime'){
				$(wrapper).append('<b>:</b><span>'+defaultDateTime(data.value)+'</span>');
			}else if(type=='date_range'){
				data.value[0] = (typeof data.value[0] == "undefined" || data.value[0]==null) ? '' : data.value[0] ;
				data.value[1] = (typeof data.value[1] == "undefined" || data.value[1]==null) ? '' : data.value[1] ;
				$(wrapper).append('<b>:</b><span>'+defaultDate(data.value[0])+' sampai '+defaultDate(data.value[1])+'</span>');
			}else if(type=='currency'){
				$(wrapper).append('<b>:</b><span>'+(data.value)+'</i></span>');
			}else if(type=='money'){
				$(wrapper).append('<b>:</b><span>Rp. '+($.number(data.value,0, '.',','))+'</i></span>');
			}else if(type=='money_asing'){
				var __currency;
				__currency = (typeof data.source[data.value[0]]=='undefined') ? '' : data.source[data.value[0]];
				$(wrapper).append('<b>:</b><span>'+__currency+' '+data.value[1]+'</i></span>');
			}
			else{
				console.log(data);
				$(wrapper).append('<b>:</b><span>'+data.value+'</span>');
			}


			return $('.form-control', wrapper);
		},
		generateTextarea : function(key, data, type){

			var wrapper = this.generateWrapper(key,data,  self.formTags);
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}

			if(typeof data.label !='undefined'){
				$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
			}

			$(wrapper).append('<textarea class="form-control '+data.class+'" id="'+data.id+'" name="'+data.field+'" >'+data.value+'</textarea>');

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateDropdown: function(key, data){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			var wrapper = this.generateWrapper(key,data,  self.formTags);
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			if(typeof data.label !='undefined'){
				__label = data.label.split('|');
				if(__label.length > 1){
					$(wrapper).append('<label for="'+data.id+'">'+__label[0]+is_required+'<span class="english-caption">('+__label[1]+')</span></label>');
				}else{
					$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
				}
				
			}

			var _select = "<select name='"+data.field+"' id='"+data.id+"' class='form-control "+data.class+"' >";
			$.each(data.source, function(keys, value){
				_selected = (data.value==keys) ? 'selected' : '';
				_select += "<option value='"+keys+"' "+_selected+">"+value+"</option>";
			})
			_select += "</select>";

			$(wrapper).append(_select);

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateMultiple: function(key, data){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			var wrapper = this.generateWrapper(key,data,  self.formTags);
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			if(typeof data.label !='undefined'){
				$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
			}

			var _select = "<select name='"+data.field+"[]' id='"+data.id+"' class='form-control "+data.class+" formMultiple' multiple>";
			var opt = data.value.split(',');
			$.each(data.source, function(keys, value){

				_selected = ($.inArray(keys, opt)>=0 || keys == opt) ? 'selected' : '';
				_select += "<option value='"+keys+"' "+_selected+">"+value+"</option>";
			})
			_select += "</select>";

			$(wrapper).append(_select);

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateRadio: function(key, data){
			var wrapper = this.generateWrapper(key,data,  self.formTags, false,  false, data.full);
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.full = (typeof data.full == "undefined" || data.full==null) ? '' : data.full ;

			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			if(typeof data.label !='undefined'){
				__label = data.label.split('|');
				if(__label.length > 1){
					$(wrapper).append('<label for="'+data.id+'">'+__label[0]+is_required+'<span class="english-caption">('+__label[1]+')</span></label>');
				}else{
					$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
				}
			}
			var _check = '<div class="radioWrapper">';
			$.each(data.source, function(keys, value){

				_checked = (data.value===keys) ? 'checked' : '';

				if(data.type=='radioList') _check +='<div class="radioList">';
				_check += "<input type='radio'  id='"+keys+"' value='"+keys+"' "+_checked+" name='"+data.field+"' class='form-control "+data.class+"'><label>"+value+"</label> ";
				if(data.type=='radioList') _check +='</div>';
			});
			_check+='</div>';
			$(wrapper).append(_check);
			$('.radioList label',wrapper).on('click', function(){
				$('.radioList input',wrapper).attr('checked',false);
				
				$(this).siblings('input').prop('checked',true);
				$(this).siblings('input').attr('checked','checked');
				$(this).siblings('input').trigger('change');
			})
			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateCheckbox: function(key, data){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			var wrapper = this.generateWrapper(key,data,  self.formTags);
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			if(typeof data.label !='undefined'){
				$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
			}
			var _check = '<div class="checkboxWrapper">';

			if(data.type=='checkboxList'){
				var arr = data.value.split(',');

			}
			$.each(data.source, function(keys, value){

				_checked = (data.value===keys) ? 'checked' : '';

				if(data.type=='checkboxList') {
					_check +='<div class="checkboxList">';
					_checked = ($.inArray(keys, arr) >= 0) ? 'checked' : '';

				}

				_check += "<input type='checkbox' id='"+keys+"' value='"+keys+"' "+_checked+" name='"+data.field+"[]' class='form-control "+data.class+"'><label for='"+keys+"'>"+value+"</label> ";
				if(data.type=='checkboxList') _check +='</div>';
			});
			_check+='</div>';
			$(wrapper).append(_check);

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateTimePicker: function(key, data){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.placeholder = (typeof data.placeholder == "undefined") ? '' : data.placeholder ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			var wrapper = this.generateWrapper(key,data,  self.formTags);
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}


			if(typeof data.label !='undefined'){
				$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
			}
			$(wrapper).append('<div class="input-group timepicker"><input type="text" class="form-control '+data.class+'" id="'+data.id+'" value="'+data.value+'" name="'+data.field+'" placeholder="'+data.placeholder+'"/></div>');

			$('.timepicker', wrapper).clockpicker({autoclose: true});

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateSearch: function(key, data){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.placeholder = (typeof data.placeholder == "undefined") ? '' : data.placeholder ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			var wrapper = this.generateWrapper(key,data,  self.formTags);
			if(typeof data.label !='undefined'){
				$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
			}
			$(wrapper).append('<input type="text" class="form-control searchInput '+data.class+'" autocomplete="off" id="'+data.id+'" value="'+data.value+'" name="'+data.field+'" placeholder="'+data.placeholder+'"/><div class="searchOption"></div>');

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},

		generateDateRange: function(key, data){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;

			data.placeholder = (typeof data.placeholder == "undefined") ? '' : data.placeholder ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			var wrapper = this.generateWrapper(key,data,  self.formTags);

			$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label><div class="rangeWrapper"></div>');

			$.each(data.field, function(key, value){
				var __val = '';
				if(data.value[key]!=''&&data.value[key]!=null){
					__val = data.value[key];
				}

				if(key!=0){
					$('.rangeWrapper',wrapper).append(' - ')
				}
				$('.rangeWrapper',wrapper).append('<input type="text" class="form-control datePicker dateRange '+data.class+'" id="'+data.id+key+'" value="'+__val+'" name="'+value+'" />');
			});

			$('.datePicker', wrapper).datetimepicker({
				timepicker: false,
				format: 'Y-m-d',
				scrollMonth : false,
				scrollInput : false
			});

			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateDatePeriod: function(key, data){
			data.id = (typeof data.id == "undefined") ? '' : 'input'+ key;
			data.value = (typeof data.value == "undefined" || data.value==null) ? '' : data.value ;
			data.placeholder = (typeof data.placeholder == "undefined") ? '' : data.placeholder ;
			data.class = (typeof data.class == "undefined" || data.class==null) ? '' : data.class ;
			data.rules = (typeof data.rules == "undefined") ? '' : data.rules  ;
			is_required = (/required/.test(data.rules)) ? '*' : '';
			if(/required/.test(data.rules)){
				data.class += 'input-mandatory'
			}
			var wrapper = this.generateWrapper(key,data,  self.formTags);
			if(typeof data.label !='undefined'){
				$(wrapper).append('<label for="'+data.id+'">'+data.label+is_required+'</label>');
			}
			$(wrapper).append('<input type="text" class="form-control dateperiod '+data.class+'" id="'+data.id+'" value="'+data.value+'" name="'+data.field+'" />');
			$('.dateperiod', wrapper).daterangepicker({
				datepickerOptions: {
					maxDate: null
				}
			});
			if(data.caption){
				$(wrapper).append('<span class="form-caption">'+data.caption+'</span>');
			}
			return $('.form-control', wrapper);
		},
		generateFormTags: function(formTags){
			var url = (this.options.url==''|| this.options.url==null||typeof this.options.url =='undefined') ? '' :'action="'+this.options.url+'"';
			if(this.options.formWrap){
				$(this.element).append('<div class="form blockWrapper"><form '+url+' method="POST" enctype="multitype/form-data" autocomplete="off"></form></div>');
				this.formTags = $('form',this.element);
			}else{
				$(this.element).append('<div class="form blockWrapper"></div>');
				this.formTags = $('.form',this.element);
			}
			// 
		},

		generateSuccess: function(xhr){
			this.options.onSuccess(xhr);
			this.generateAlert('success');

			if(this.options.isReset){
				this.resetForm();
			}
			this.options.generateSuccess();

		},

		resetForm: function(){
			$('.form-control', this.element).val('');
			$('.form-control',this.element).show();
			$('input[type=hidden]',this.element).val('');
			$('.fileUploadBlock', this.element).remove();
		},

		generateAlert: function(type){
			$('.alert-notif').remove();
			switch(type){
				case 'success' 	: $(self.element).before('<div class="alert alert-success alert-notif">'+this.options.successMessage+'</div>'); break;
				case 'error'	: $(self.element).before('<div class="alert alert-danger alert-notif">'+this.options.errorMessage+'</div>'); break;
			}
			setTimeout(function(){
				$('.alert-notif').fadeOut();
			}, 3000);
		},

		generateError: function(data){
			this.generateAlert('error');
			_this = this;
			$.each(data, function(key, value){
				if(value != '' && value != null && typeof value != 'undefined'){
					wrapper = $('[for="'+key+'"]');

					el = $('[name*="'+key+'"]',wrapper);

					el.addClass('field-error');
					
					wrapper.addClass('form-error');
					wrapper.append('<small class="error-help">'+value+'</small>');
				}
			});

		},
		removeError: function(el){
			$('.field-error',el).removeClass('field-error');
			$('.form-error').removeClass('form-error');
			$('.error-help',el).remove();
		},
		destroy : function(el){
			$(this).empty();

		},
	};

	$.fn[ pluginName ] = function ( options ) {
       	this.each(function() {
                if ( !$.data( this, "plugin_" + pluginName ) ) {
                        $.data( this,pluginName, new Plugin( this, options ) );
                }
        });
        // chain jQuery functions

        return this;

    };



})( jQuery, window, document )
