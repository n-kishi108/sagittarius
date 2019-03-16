<form action="<?= base_url() ?>setting/" method="post">
	<div class="row">
		<div class="col-4">
			<input type="text" name="shop_id" placeholder="shop id">
		</div>
		<div class="col-4">
			<input type="text" name="menu" placeholder="menu">
		</div>
		<div class="col-4">
			<input type="text" name="price" placeholder="price">
		</div>
		<input type="submit" value="送信！">
	</div>
</form>
<style media="screen">
	.col-4 {
		text-align: center;
	}
</style>
