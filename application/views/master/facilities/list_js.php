<script type="text/javascript">
	$(function() {

		dataPost = {
			order: 'a.id',
			sort: 'desc'
		};

		var table = $('#tableGenerator').tableGenerator({
			url: '<?php echo site_url('master/facilities/getData/' . $id); ?>',
			data: dataPost,
			headers: [{
					"key": "name",
					"value": "Name"
				},
				{
					"key": "image",
					"value": "Image"
				},
				{
					"key": "action",
					"value": "Action",
					"sort": false
				}
			],
			columnDefs: [{
					renderCell: function(data, row, key, el) {
						var link = '';
						return link += '<a href=http://localhost/pesona-alam/assets/lampiran/facilities_file/' + data[4].value + ' target="blank">Open Image</a>'
					},
					target: [1]

				},
				{
					renderCell: function(data, row, key, el) {
						var html = '';
						html += editButton(site_url + "master/facilities/form/edit/" + data[2].value, data[2].value);
						html += deleteButton(site_url + "master/facilities/remove/" + data[2].value, data[2].value);
						return html;
					},
					target: [2]

				}
			],
			additionFeature: function(el) {
				el.append(insertButton(site_url + "master/facilities/form/add/<?php echo $id; ?>"));
			},
			finish: function() {
				var edit = $('.buttonEdit_').modal({
					render: function(el, data) {

						data.onSuccess = function() {
							$(edit).data('modal').close();
							table.data('plugin_tableGenerator').fetchData();

						};
						data.isReset = false;

						$(el).form(data).data('form');

					}
				});
				var del = $('.buttonDelete').modal({
					header: 'Hapus Data',
					render: function(el, data) {
						el.html('<div class="blockWrapper"><span>Are you sure want to delete this data?<span><div class="form"></div><div>');
						data.onSuccess = function() {
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
			render: function(el, data) {
				data.onSuccess = function() {
					$(add).data('modal').close();
					table.data('plugin_tableGenerator').fetchData();
				}
				$(el).form(data);
			}
		});
	});
</script>