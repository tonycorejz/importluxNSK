<?php
if(isset($_POST["email"])&&isset($_POST["name"])&&isset($_POST["phone"])){
  
  $email = $_POST['email'];  
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $name = htmlspecialchars($name);
  $name = urldecode($name);
  $name = trim($name);

  $wrng = "Компания Импорт-люкс НСК приветствует Вас!
В ближайшее время наши сотрудники свяжутся с Вами и ответят на все интересующие вопросы, или Вы можете связаться с нами по нашим контактным телефонам.
Ознакомитесь с прайсом!
        
630001, Новосибирская область, г.Новосибирск ул.
Сухарная 35 корпус 4 офис 319 тел. 8-929-304-5553, 8-999-452-2090

С Уважением команда Импорт Люкс НСК!";
$headers = array(
    'From' => 'import_luxnsk@mail.ru',
    'Reply-To' => 'import_luxnsk@mail.ru',
    'X-Mailer' => 'PHP/' . phpversion()
);

  if (mail("import_luxnsk@mail.ru", "Заявка с сайта importluxnsk.ru", "Имя:".$name." Почта:".$email." Телефон:".$phone."\r\n")){
    $valid = true;
    mail($email, "Сообщение от importluxnsk.ru", $wrng."\r\n");
  } else {
    $wrng =  "при отправке сообщения возникли ошибки";
    $valid = false;
  }
}else{
  $wrng = "не заполнен номер телефона, имя или почта";
  $valid = false;
}
echo $wrng;
?>