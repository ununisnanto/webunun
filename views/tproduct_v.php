<!-- Tabel untuk menampilkan data produk -->
<div class="table">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<th>No</th>
			<th>ProductName</th>
			<th>SupplierID</th>
			<th>CategoryID</th>
			<th>QuantityPerUnit</th>
			<th>UnitPrice</th>
			<th>UnitsInStock</th>
			<th>UnitsOnOrder</th>
			<th>ReorderLevel</th>
			<th>Discontinued</th>
			<th width="110" class="ac">Aksi</th>
		</tr>
		<?php
		$no=0;
		foreach($browse_product as $ba){
		$no++;
		?>
		<tr>
			<td><h3><?php echo $no; ?>.</h3></td>
			<td><?php echo $ba->ProductName?></td>
			<td><?php echo $ba->SupplierID ?></td>
			<td><?php echo $ba->CategoryID?></td>
			<td><?php echo $ba->QuantityPerUnit?></td>
			<td><?php echo $ba->UnitPrice?></td>
			<td><?php echo $ba->UnitsInStock?></td>
			<td><?php echo $ba->UnitsOnOrder?></td>
			<td><?php echo $ba->ReorderLevel?></td>
			<td><?php echo $ba->Discontinued?></td>
			<td>
			<a href="#">Edit</a>|<a href="#">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>