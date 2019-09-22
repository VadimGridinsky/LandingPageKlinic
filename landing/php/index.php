<?
if((isset($_POST['login'])&&$_POST['login']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ 
        $to = 'goldencobra228@yandex.ru'; 
        $subject = 'Обратный звонок'; 
        $message = '
                        <p>Имя: '.$_POST['login'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>                        
               
                '; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Отправитель <from@example.com>\r\n"; 
        mail($to, $subject, $message, $headers);
}
?>