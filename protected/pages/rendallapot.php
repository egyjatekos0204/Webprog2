<?php
	$query = "SELECT * FROM rendelesek INNER JOIN users ON users.id = rendelesek.userid WHERE rendelesek.userid = :id";
    $params = [':id' => $_SESSION['userid']];
    $datas = getList($query,$params);
?>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Rendelés</th>
      <th scope="col">Rendelés leadása</th>
      <th scope="col">Státusz</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$i = 1;
  	foreach ($datas as $d):
  		?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$d['rendelesek']?></td>
      <td><?=$d['rendelesLeadas']?></td>
      <td><?= $d['status'] == 0 ? 'Kiszállítás alatt' : 'Teljesítve'?></td>
    </tr>
<?php $i++;endforeach;?>
  </tbody>
</table>