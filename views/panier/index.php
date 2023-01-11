<?php
require_once(ROOT . 'models/ligne.php');
session_start();
$caddy = $_SESSION["caddy"];
if (isset($_REQUEST['remove'])) {
	remove($_REQUEST['remove']);
}
?>
<!------ Include the above in your HEAD tag ---------->

<div class="container text-center" style="margin-bottom:500px; padding-top:60px;">
	
	<h3>Votre Panier</h3>
	<hr>
	<table class="table">
		<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col"> </th>
				<th scope="col">Article</th>
				<th scope="col">Prix</th>
				<th scope="col">Quantité</th>
				<th scope="col">Total</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($caddy as $key => $value) { ?>
				<tr>
					<th scope="row"><?php echo $key + 1 ?></th>
					<td>
						<img class="card-img-top mb-5 mb-md-0 " src="<?php echo $value->picture ?>" style="width: 45.974262px !important;" alt="...">
					</td>
					<td>
						<?php echo $value->name ?>
					</td>
					<td>
						<?php echo $value->prix ?>
					</td>
					<td>
						<?php echo $value->qte ?>
					</td>
					<td>
						<?php echo $value->qte * $value->prix ?>
					</td>
					<td>
						<form action="" method="POST">
							<button type="submit" class="btn btn-dark" name="remove" value=<?php echo $key ?>>Supprimer</button>
						</form>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>


<?php
function remove($index)
{
	unset($_SESSION['caddy'][$index]);
	header("Refresh:0");
}
?>