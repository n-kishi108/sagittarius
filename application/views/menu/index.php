<?php while($row = $menu->fetch_assoc()): ?>
	<h2 class="row menu_list">
		<div class="prodoct_name col-8"><?= $row['menu'] ?></div>
		<div class="prodoct_price col-4" style="text-align: right;"><?= $row['price'] ?>円</div>
	</h2>
<?php endwhile; ?>
