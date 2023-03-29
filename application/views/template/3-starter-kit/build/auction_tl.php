<!DOCTYPE html>
<html lang="en">
<head>
    <title>Starter Kit</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo base_url('assets/styles/scss/main.min.css'); ?>" type="text/css" media="screen"/>
    <!-- <link rel="stylesheet" href="assets/css/vendors/jquery-ui.css" /> -->
    <link rel="stylesheet" href="../source/vendors/font-awesome/css/all.css" />
</head>

<body>

	<div class="auction-timeline">
		<table class="auction-table">
			<tr class="header">
				<th>No.</th>
				<th>Nama Barang</th>
				<th>Volume</th>
				<th>Satuan</th>
				<th>Kurs</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Komputer</td>
				<td>1</td>
				<td>Satuan</td>
				<td>USD</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Laptop</td>
				<td>2</td>
				<td>Satuan</td>
				<td>IDR</td>
			</tr>
		</table>

		<table class="auction-form">
			<tr class="header">
				<th>Nama Barang</th>
				<th>Kurs</th>
				<th>Harga Satuan</th>
				<th>Volume</th>
				<th>Harga Total</th>
			</tr>
			<tr>
				<td>Komputer</td>
				<td>
					<select name="" id="">
						<option value="">USD</option>
						<option value="">IDR</option>
					</select>
				</td>
				<td>
					<input type="text" class="input">
				</td>
				<td>1</td>
				<td>
					<input type="text" class="input">
				</td>
			</tr>
			<tr>
				<td>Laptop</td>
				<td>
					<select name="" id="">
						<option value="">IDR</option>
						<option value="">USD</option>
					</select>
				</td>
				<td>
					<input type="text" class="input">
				</td>
				<td>2</td>
				<td>
					<input type="text" class="input">
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<button class="submit is-primary" style="float: right">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	<ul class="auction-timeline" style="background-color: #f3f3f3">
		<li class="timeline-item">
			<span class="icon-line">
				
			</span>
			<div class="timeline-content">
				<ul class="tl">
					<li class="bid-name">Pengadaan Komputer</li>
					<table>
						<tr class="bid-price">
							<td>300.000.000,00</td>
							<td class="center">x3</td>
							<td>900.000.000,00</td>
						</tr>
						<tr class="bid-kurs">
							<td>
								<span>USD</span>
								900.000.000,00
							</td>
							<td class="center">
								<span class="icon">
									<i class="fa fa-angle-right"></i>
								</span>
							</td>
							<td>
								<span>IDR</span>
								900.000.000,00
							</td>
						</tr>
					</table>
				</ul>
				<div class="tl-after">
					<div class="decline">
						<span class="icon">
							<i class="fas fa-arrow-down"></i>
						</span>
						50%
					</div>
					<div class="ranking">
						<span class="icon">
							<i class="fas fa-hashtag"></i>
						</span>
						1
					</div>
				</div>
			</div>
			<div class="timeline-content">
				<ul class="tl">
					<li class="bid-name">Pengadaan Komputer</li>
					<table>
						<tr class="bid-price">
							<td>300.000.000,00</td>
							<td class="center">x3</td>
							<td>900.000.000,00</td>
						</tr>
						<tr class="bid-kurs">
							<td>
								<span>USD</span>
								900.000.000,00
							</td>
							<td class="center">
								<span class="icon">
									<i class="fa fa-angle-right"></i>
								</span>
							</td>
							<td>
								<span>IDR</span>
								900.000.000,00
							</td>
						</tr>
					</table>
				</ul>
				<div class="tl-after">
					<div class="decline">
						<span class="icon">
							<i class="fas fa-arrow-down"></i>
						</span>
						50%
					</div>
					<div class="ranking">
						<span class="icon">
							<i class="fas fa-hashtag"></i>
						</span>
						1
					</div>
				</div>
			</div>
			<div class="timeline-content">
				<ul class="tl">
					<li class="bid-name">Pengadaan Laptop</li>
					<table>
						<tr class="bid-price">
							<td>300.000.000,00</td>
							<td class="center">x3</td>
							<td>900.000.000,00</td>
						</tr>
						<tr class="bid-kurs">
							<td>
								<span>USD</span>
								900.000.000,00
							</td>
							<td class="center">
								<span class="icon">
									<i class="fa fa-angle-right"></i>
								</span>
							</td>
							<td>
								<span>IDR</span>
								900.000.000,00
							</td>
						</tr>
					</table>
				</ul>
				<div class="tl-after">
					<div class="decline">
						<span class="icon">
							<i class="fas fa-arrow-down"></i>
						</span>
						50%
					</div>
					<div class="ranking">
						<span class="icon">
							<i class="fas fa-hashtag"></i>
						</span>
						1
					</div>
				</div>
			</div>
		</li>
		<li class="timeline-item success">
			<span class="icon-line">
				<i class="fas fa-award"></i>
			</span>
			<div class="timeline-content">
				<ul class="tl">
					<li class="bid-name">Pengadaan Komputer</li>
					<table>
						<tr class="bid-price">
							<td>300.000.000,00</td>
							<td class="center">x3</td>
							<td>900.000.000,00</td>
						</tr>
						<tr class="bid-kurs">
							<td>
								<span>USD</span>
								900.000.000,00
							</td>
							<td class="center">
								<span class="icon">
									<i class="fa fa-angle-right"></i>
								</span>
							</td>
							<td>
								<span>IDR</span>
								900.000.000,00
							</td>
						</tr>
					</table>
				</ul>
				<div class="tl-after">
					<div class="decline">
						<span class="icon">
							<i class="fas fa-arrow-down"></i>
						</span>
						50%
					</div>
					<div class="ranking">
						<span class="icon">
							<i class="fas fa-hashtag"></i>
						</span>
						1
					</div>
				</div>
			</div>
			<div class="timeline-content">
				<ul class="tl">
					<li class="bid-name">Pengadaan Laptop</li>
					<table>
						<tr class="bid-price">
							<td>300.000.000,00</td>
							<td class="center">x3</td>
							<td>900.000.000,00</td>
						</tr>
						<tr class="bid-kurs">
							<td>
								<span>USD</span>
								900.000.000,00
							</td>
							<td class="center">
								<span class="icon">
									<i class="fa fa-angle-right"></i>
								</span>
							</td>
							<td>
								<span>IDR</span>
								900.000.000,00
							</td>
						</tr>
					</table>
				</ul>
				<div class="tl-after">
					<div class="decline">
						<span class="icon">
							<i class="fas fa-arrow-down"></i>
						</span>
						50%
					</div>
					<div class="ranking">
						<span class="icon">
							<i class="fas fa-hashtag"></i>
						</span>
						1
					</div>
				</div>
			</div>
		</li>
		<li class="timeline-item danger">
			<span class="icon-line">
				<i class="fas fa-exclamation-triangle"></i>
			</span>
			<div class="timeline-content">
				<ul class="tl">
					<li class="bid-name">Pengadaan Komputer</li>
					<table>
						<tr class="bid-price">
							<td>300.000.000,00</td>
							<td class="center">x3</td>
							<td>900.000.000,00</td>
						</tr>
						<tr class="bid-kurs">
							<td>
								<span>USD</span>
								900.000.000,00
							</td>
							<td class="center">
								<span class="icon">
									<i class="fa fa-angle-right"></i>
								</span>
							</td>
							<td>
								<span>IDR</span>
								900.000.000,00
							</td>
						</tr>
					</table>
				</ul>
				<div class="tl-after">
					<div class="decline">
						<span class="icon">
							<i class="fas fa-arrow-down"></i>
						</span>
						50%
					</div>
					<div class="ranking">
						<span class="icon">
							<i class="fas fa-hashtag"></i>
						</span>
						1
					</div>
				</div>
			</div>
			<div class="timeline-content">
				<ul class="tl">
					<li class="bid-name">Pengadaan Laptop</li>
					<table>
						<tr class="bid-price">
							<td>300.000.000,00</td>
							<td class="center">x3</td>
							<td>900.000.000,00</td>
						</tr>
						<tr class="bid-kurs">
							<td>
								<span>USD</span>
								900.000.000,00
							</td>
							<td class="center">
								<span class="icon">
									<i class="fa fa-angle-right"></i>
								</span>
							</td>
							<td>
								<span>IDR</span>
								900.000.000,00
							</td>
						</tr>
					</table>
				</ul>
				<div class="tl-after">
					<div class="decline">
						<span class="icon">
							<i class="fas fa-arrow-down"></i>
						</span>
						50%
					</div>
					<div class="ranking">
						<span class="icon">
							<i class="fas fa-hashtag"></i>
						</span>
						<p id="updated-row-lowest"></p>
					</div>
				</div>
			</div>
		</li>
	</ul>
	
</body>

</html>