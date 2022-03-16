<?php
if(isset($_POST["name"])&&isset($_POST["phone"])){
  
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $txt = $_POST['txt'];
  $radio = $_POST['exampleRadios'];
  $name = htmlspecialchars($name);
  $name = urldecode($name);
  $name = trim($name);

  $wrng = "Компания Импорт-люкс НСК приветствует Вас!
В ближайшее время наши сотрудники свяжутся с Вами и ответят на все интересующие вопросы, или Вы можете связаться с нами по нашим контактным телефонам.
Ознакомитесь с прайсом!
        
630001, Новосибирская область, г.Новосибирск ул.
Сухарная 35 корпус 4 офис 319 тел. 8-929-304-5553, 8-999-452-2090

С Уважением команда Импорт Люкс НСК!";

  if (mail("import_luxnsk@mail.ru", "Заявка с сайта importluxnsk.ru", "Имя:".$name." Телефон:".$phone." Сообщеие:".$txt." ".$radio."\r\n")){
    $valid = true;
  } else {
    $wrng =  "при отправке сообщения возникли ошибки";
    $valid = false;
  }
}else{
  $wrng = "не заполнен номер телефона или имя ";
  $valid = false;
}
echo $wrng;
?>