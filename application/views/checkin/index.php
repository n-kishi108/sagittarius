<!-- <h1 style="color: red; font-size: 80px;">ここがメインです。</h1> -->
<?php while($row = $menu->fetch_assoc()): ?>
	<h2 class="menu_list"><?= $row['menu'] ?></h2>
<?php endwhile; ?>
