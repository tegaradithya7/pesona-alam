<script type="text/javascript">
$(function(){

	dataPost = {
		order: 'a.id',
		sort: 'desc'
	};

	var table = $('#tableGenerator').tableGenerator({
		url: '<?php echo site_url('master/email/getData/'.$id); ?>',
		data: dataPost,
		headers: [
			{
				"key"	: "name",
				"value"	: "Email"
			},
			{
				"key"	: "name",
				"value"	: "Receive From"
			}
			// ,{
			// 	"key"	: "action",
			// 	"value"	: "Action",
			// 	"sort"	: false
			// }
			],
		columnDefs : [{
			renderCell: function(data, row, key, el){
				var html = '';
				// html +=editButton(site_url+"master/email/form/edit/"+data[2].value, data[2].value);
				// html +=deleteButton(site_url+"master/email/remove/"+data[1].value, data[1].value);
				return html;
			},
			target : [10]

		}],
		additionFeature: function(el){
			// el.append(insertButton(site_url+"master/email/form/add/<?php echo $id;?>"));
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
			var del = $('.buttonDelete').modal({
				header: 'Hapus Data',
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