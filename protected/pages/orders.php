
<!--

Aktuális-Rendelések:
    id
    userid
    restaurantid
    rendelesek
    status



-->

<?php
require_once DATABASE_CONTROLLER;

if (getConnection()):
    if($_SESSION['flags'] > 5){
      //$query = "SELECT * FROM rendelesek WHERE status = 0";
      $query = "SELECT restaurants.name, rendelesek.rendelesLeadas, rendelesek.rendelesek, rendelesek.userid, rendelesek.id FROM rendelesek INNER JOIN restaurants ON rendelesek.restaurantid = restaurants.id WHERE rendelesek.status = 0";
      $params = [];
    }
    else {
      $query = "SELECT rendelesek.* FROM rendelesek INNER JOIN restaurants ON restaurants.id = rendelesek.restaurantid WHERE status = 0 and restaurants.userid = :userid";
      $params = [ ':userid' => $_SESSION['userid']];
    }
    
    $rendelesek = getList($query,$params);

    $usernames = [];

    for ($i=0; $i < count($rendelesek); $i++) { 
      $query = "SELECT username FROM users WHERE id = :id";
      $params1 = [':id' => $rendelesek[$i]['userid']];
      $username = getField($query, $params1) ? getField($query, $params1) : null;
      $usernames[] = $username;
    }
    

    //print_r($rendelesek);
    //var_dump($usernames);

  if($_SESSION['flags'] > 5):
?>
<div class="container mt-3">
  <table class="table table-dark">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Étterem</th>
        <th scope="col">Időpont</th>
        <th scope="col">Ügyfél</th>
        <th scope="col">Rendelés(ek)</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
    <?php for ($i=0; $i < count($rendelesek); $i++):?>
      <tr>
        <th scope="row"><?=$i+1?></th>
        <td scope="row"><?=$rendelesek[$i]['name']?></td>
        <td><?=$rendelesek[$i]['rendelesLeadas']?></td>
        <td>
        <?php
        if($usernames[$i] != ""){
          printf($usernames[$i]);
        }
        else {
          printf('<span style="color: red;">Törölt felhasználó</span>');
        }
        ?>
        
        </td>
        <td><?=$rendelesek[$i]['rendelesek']?></td>
        <td><a class="btn btn-success" href="index.php?P=orderReady&id=<?=$rendelesek[$i]['id']?>" >Elkészült</a></td>
        <td><a class="btn btn-danger" href="index.php?P=orderDelete&id=<?=$rendelesek[$i]['id']?>" >Rendelés törlése</a></td>
      </tr>
      <?php endfor;?>
    </tbody>
  </table>
</div>


<?php elseif ($_SESSION['flags'] == 3): ?>

<div class="container mt-3">
  <table class="table table-dark">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Időpont</th>
        <th scope="col">Ügyfél</th>
        <th scope="col">Rendelés(ek)</th>
        <th scope="col">&nbsp; </th>
        <th scope="col">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
    <?php for ($i=0; $i < count($rendelesek); $i++):?>
      <tr>
        <th scope="row"><?=$i+1?></th>
        <td><?=$rendelesek[$i]['rendelesLeadas']?></td>
        <td>
        <?php
        if($usernames[$i] != ""){
          printf($usernames[$i]);
        }
        else {
          printf('<span style="color: red;">Törölt felhasználó</span>');
        }
        ?>
        
        </td>
        <td><?=$rendelesek[$i]['rendelesek']?></td>
        <td><a class="btn btn-success" href="index.php?P=orderReady&id=<?=$rendelesek[$i]['id']?>" >Elkészült</a></td>
        <td><a class="btn btn-danger" href="index.php?P=orderDelete&id=<?=$rendelesek[$i]['id']?>" >Rendelés törlése</a></td>
      </tr>
      <?php endfor;?>
    </tbody>
  </table>
</div>

      <?php endif;
endif;?>

