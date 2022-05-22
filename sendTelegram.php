<? 
/*получаем значения полей из формы*/
$email = $_POST['email'];

/*функция для создания запроса на сервер Telegram */
function parser($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    if($result == false){     
      echo "Ошибка отправки запроса: " . curl_error($curl);
      return false;
    }
    else{
      return true;
    }
}

/*собираем сообщение*/
$message .= "Новое сообщение с сайта `Энциклопедия чешуекрылых`";
$message .= "с адресом электронной почты: ".$email;

/*токен который выдаётся при регистрации бота */
$token = "5387840449:AAGv-Rwd8--5KBPt5vGwRqyvrS3kwBxt6Ms";
/*идентификатор группы*/
$chat_id = "-788270262";
/*делаем запрос и отправляем сообщение*/
parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}");

