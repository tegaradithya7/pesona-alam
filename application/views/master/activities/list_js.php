<script type="text/javascript">
$(function(){

	dataPost = {
		order: 'a.id',
		sort: 'desc'
	};

	var table = $('#tableGenerator').tableGenerator({
		url: '<?php echo site_url('master/activities/getData/'.$id); ?>',
		data: dataPost,
		headers: [
			{
				"key"	: "name",
				"value"	: "Name"
			},
			{
				"key"	: "release_on",
				"value"	: "Publish On"
			},
			{
				"key"	: "symbol",
				"value"	: "Description"
			},
			{
				"key"	: "action",
				"value"	: "Action",
				"sort"	: false
			}],
		columnDefs : [
		{
			renderCell: function(data, row, key, el){
				var html = '';
				$publish = (data[1].value == 1)? 'Pesona Alam' : ((data[1].value == 2)? 'Botanica' : 'Semua Web');
				html += ($publish);
				return html;
			},
			target : [1]

		},
		{
			renderCell: function(data, row, key, el){
				var html = '';
				html +=editButton(site_url+"master/activities/form/edit/"+data[3].value, data[3].value);
				html +=deleteButton(site_url+"master/activities/remove/"+data[3].value, data[3].value);
				return html;
			},
			target : [3]

		}],
		additionFeature: function(el){
			el.append(insertButton(site_url+"master/activities/form/add/<?php echo $id;?>"));
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