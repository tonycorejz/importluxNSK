<?php
  require "db.php";
  
	$data = $_POST;

  //login
  if(isset($data['do_login'])){

    $user = R::findOne('users', 'login = ?', array($data['login']));

    if($user){
        //логин существует
        if(password_verify($data['password'], $user->password)){
            $_SESSION['logged_user'] = $user;
            echo '<script type="text/javascript">location.replace("/app/admin.php")</script>';

        }else{
            $errors[] = 'Неверно введен пароль!';
        }
    }else{
        $errors[] = 'Пользователь с таким логином не найден!';
    }
    if(!empty($errors)){
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }
  }
  //login
	//Add material

  if(isset($data['add_material'])){
    $material = R::findOne('materials', 'id = 1');
    
		$material->suh = $data['suh'];
		$material->oreh = $data['oreh'];
		$material->chai = $data['chai'];
		$material->specii = $data['specii'];
    R::store($material);
	}


    
  //Добавляет нового пользователя
  /*$user = R::dispense('users'); 
  $user->login = "tekstolit_admin";
  $user->password = password_hash("12345678tt", PASSWORD_DEFAULT);
  R::store($user);*/
?>
<?php if( isset($_SESSION['logged_user'])):?>

	<?php require "header.php";?>
	<div class="admin_panel">
		<div style="color:green;">Вы уже авторизованы как <?php echo $_SESSION['logged_user']->login?></div><hr>
		<a href="Logout.php">Выйти</a><br>

		<div class="d-flex flex-column align-items-center">
			<div class="mb-4 w-50">
				<form class="addMaterial d-flex flex-column align-items-center" action="admin.php" method="POST"  enctype="multipart/form-data">
				<label for="suh" class="form-label">Сухофрукты</label>
				<textarea class="form-control mb-2" name="suh" id="suh" rows="3"><?php echo $material->suh;?></textarea>
				<label for="oreh" class="form-label">Орехи</label>
				<textarea class="form-control mb-2" name="oreh" id="oreh" rows="3"><?php echo $material->oreh;?></textarea>
				<label for="chai" class="form-label">Чай и кофе</label>
				<textarea class="form-control mb-2" name="chai" id="chai" rows="3"><?php echo $material->chai;?></textarea>
				<label for="specii" class="form-label">Специи</label>
				<textarea class="form-control mb-2" name="specii" id="specii" rows="3"><?php echo $material->specii;?></textarea>
				<button type="submit" class="btn btn-success" name="add_material">Сохранить</button>
				</form>
			</div>
		</div>


	
	</div>
  <?php require "footer.php";?>
  
  
<?php else : ?>  

<form action="admin.php" method="POST">

  <input type="text" name="login" value="<?php echo @$data['login']; ?>" maxlength="20" placeholder="Логин">
  <input type="password" name="password" value="<?php echo @$data['password'];?>" placeholder="Пароль">

  <button type="submit" name="do_login">Войти</button>
</form>
<?php endif;?>