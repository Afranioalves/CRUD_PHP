<tbody>
	<td><?=$stmt->Id_P?></td>
	<td><?=$stmt->Nome?></td>
	<td><?=$stmt->Anime?></td>
	<td><a href="index.php?IdUp=<?=$stmt->Id_P?>" class="edit">Editar</a> / <a href="index.php?del&id=<?=$stmt->Id_P?>" class="del">Deletar</a></td>
</tbody>