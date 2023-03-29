<script type="text/javascript">
$(function(){

	dataPost = {
		order: 'a.id',
		sort: 'desc'
	};

	var table = $('#tableGenerator').tableGenerator({
		url: '<?php echo site_url('master/faq/getData/'.$id); ?>',
		data: dataPost,
		headers: [
			{
				"key"	: "name",
				"value"	: "Name"
			},
			{
				"key"	: "name",
				"value"	: "Email"
			},
			{
				"key"	: "name",
				"value"	: "Phone"
			},
			{
				"key"	: "name",
				"value"	: "Customer Type"
			},
			{
				"key"	: "name",
				"value"	: "Receive From"
			},
			{
				"key"	: "action",
				"value"	: "Action",
				"sort"	: false
			}
			],
		columnDefs : [{
			renderCell: function(data, row, key, el){
				var html = '';
				// html +=editButton(site_url+"master/faq/form/edit/"+data[6].value, data[6].value);
				html +='<a class="button is-primary buttonView" href="'+site_url+'master/faq/lihat_data/'+data[6].value+'"><span class="icon"><i class="fas fa-eye"></i></span> Detail Message</a>';
				return html;
			},
			target : [5]

		}
		],
		additionFeature: function(el){
			// el.append(insertButton(site_url+"master/faq/form/add/<?php echo $id;?>"));
		},
		finish: function(){
      var edit = $('.buttonEdit_').modal({
        render : function(el, data){

          data.onSuccess = function(){
          	$(edit).data('modal').close();
            table.data('plugin_tableGenerator').fetchData();

          };
          data.isReset = false;

          $(el).form(data).data('form');

        }
      });
      var cek = $('.buttonView').modal({
	       header : 'Detail Message',
	       render : function(el, data){

	         data.onSuccess = function(){
	           $(cek).data('modal').close();
	           table.data('plugin_tableGenerator').fetchData();
	         };
	         data.isReset = false;

	         $(el).form(data).data('form');
	       } 
     	});
			var del = $('.buttonDelete').modal({
				header: 'Message',
				render : function(el, data){
					el.html('<div class="blockWrapper"><span>Are you sure want to delete this data?<span><div class="form"></div><div>');
					data.onSuccess = function(){
						$(del).data('modal').close();
						table.data('plugin_tableGenerator').fetchData();
					};
					data.isReset = true;
					$('.form', el).form(data).data('form');
				}
			});

		},
	});
  	var add = $('.buttonAdd_').modal({
		render : function(el, data){
			data.onSuccess = function(){
				$(add).data('modal').close();
				table.data('plugin_tableGenerator').fetchData();
			}
			$(el).form(data);
		}
	});
});
</script>