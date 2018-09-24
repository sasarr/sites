<?php foreach ($ligne as $key => $value): ?>
	<?php 
	if ($key == "ordernumber") : ?>

		<td>
		<a href="http://localhost/PHP/bon%20de%20commande/order.php?valeur=<?=orderNumber ?>"><?=  $value ?></a>
		</td>
		
	<?php else: ?>
	
		<td> <?=  $value ?> </td>
	<?php endif; ?>

<?php endforeach;?>

		</tr>
	<?php endforeach; ?>	

			<!--<?php foreach ($ligne as $key => $value): ?>
						<td> <?=  $value ?> </td>
					<?php endforeach;?>-->
