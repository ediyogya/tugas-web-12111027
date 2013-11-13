
<h2><?=$title;?></h2>

<!--Table (TABLE)-->
			
	<br /><br />
	<br /><br />		
 <form action="<?php print site_url();?>/backend/products/cari" method="POST">
<input type=text name=cari> <input type=submit value="cari">
</form>
<a href="<?php print site_url();?>/backend/products"> <b>Tampil Semua Katagori</b></a>

	<table>
		<tr>
			<th>No</th>					    
		    <th>Nama produk</th>
			<th>Kualitas perUnit</th>				   				   
				</tr>
	<?php
				$no=0;
			foreach($array_produk as $row):	
				$no++;	
				$css=($no%2==1)? '' : 'class="bg"';
	?>
		<tr <?=$css;?> >
			<td><?=$no;?>.</td>				    
	        <td><?=$row->;?>Nama produk</td>
		    <td><?=$row->;?>Kualitas perUnit</td>				    
				</tr>
				<?php  endforeach; ?>
	</table>

