<?php
if(isset($_POST["email"])&&isset($_POST["name"])&&isset($_POST["phone"])){
  
  $email = $_POST['email'];  
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  $tovar = $_POST['tovar'];
  $v_tovar = $_POST['v_tovar'];
  $name = htmlspecialchars($name);
  $name = urldecode($name);
  $name = trim($name);


  $wrng = "Компания Импорт-люкс НСК приветствует Вас!
В ближайшее время наши сотрудники свяжутся с Вами и ответят на все интересующие вопросы, или Вы можете связаться с нами по нашим контактным телефонам.
Ознакомитесь с прайсом!
        
630001, Новосибирская область, г.Новосибирск ул.
Сухарная 35 корпус 4 офис 319 тел. 8-929-304-5553, 8-999-452-2090

С Уважением команда Импорт Люкс НСК!";


  if (mail("import_luxnsk@mail.ru", "Клиент запросил прайс лист на сайте importluxnsk.ru", "Имя:".$name." Почта:".$email." Телефон:".$phone." Название товара:".$tovar." Объём товара:".$v_tovar." Город:".$city."\r\n")){
    $valid = true;
    $filename = "PriceList.pdf"; //Имя файла для прикрепления
    $to = $email; //Кому
    $from = "importluxnsk"; //От кого
    $subject = "Вы запросили прайс лист на сайте importluxnsk.ru"; //Тема
    $message = $wrng; //Текст письма
    $boundary = "---"; //Разделитель
    /* Заголовки */
    $headers = "From: $from\nReply-To: $from\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";
    $body = "--$boundary\n";
    /* Присоединяем текстовое сообщение */
    $body .= "Content-type: text/html; charset='utf-8'\n";
    $body .= "Content-Transfer-Encoding: quoted-printablenn";
    $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
    $body .= $message."\n";
    $body .= "--$boundary\n";
    $file = fopen($filename, "r"); //Открываем файл
    $text = fread($file, filesize($filename)); //Считываем весь файл
    fclose($file); //Закрываем файл
    /* Добавляем тип содержимого, кодируем текст файла и добавляем в тело письма */
    $body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($filename)."?=\n";
    $body .= "Content-Transfer-Encoding: base64\n";
    $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
    $body .= chunk_split(base64_encode($text))."\n";
    $body .= "--".$boundary ."--\n";
    mail($to, $subject, $body, $headers); //Отправляем письмо
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