<?php
if(isset($_POST["email"]) && isset($_POST["name"])){
    $gmailAdmin = "ps2210002@gmail.com";
    $site_name = "【買取ブラザーズ】";
    $tobuy = $_POST["tobuy"];
    $howbuy = $_POST["howbuy"];
    $name = $_POST["name"];
    $furi = $_POST["furi"];
    $gender = $_POST["gender"];
    $ybirth = $_POST["ybirth"];
    $mbirth = $_POST["mbirth"];
    $dbirth = $_POST["dbirth"];
    $marriage = $_POST["marriage"];
    $address = $_POST["address"];
    $residence = $_POST["residence"];
    $mrent = $_POST["mrent"];
    $insu = $_POST["insu"];
    $numhome = $_POST["numhome"];
    $numphone = $_POST["numphone"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $relation = $_POST["relation"];
    $emer = $_POST["emer"];
    $emernum = $_POST["emernum"];
    $office = $_POST["office"];
    $head = $_POST["head"];
    $resiname = $_POST["resiname"];
    $resiadd = $_POST["resiadd"];
    $resinum = $_POST["resinum"];
    $takehome = $_POST["takehome"];
    $payday = $_POST["payday"];
    $bonus = $_POST["bonus"];
    $holiday = $_POST["holiday"];
    $numemp = $_POST["numemp"];
    $fromemp = $_POST["fromemp"];
    $service = $_POST["service"];
    $hours = $_POST["hours"];
    $goodnight = $_POST["goodnight"];

    $customer_title  = <<<CONTENT
    ${site_name}お問い合わせありがとうございました。
    CONTENT;
    $admin_title  = <<<CONTENT
    ${site_name}お客様よりお問い合わせがありました
    CONTENT;

    $mailCustomer = <<<CONTENT
    ${name} 様<br><br>

    この度は弊社ホームページへのお問い合わせいただき誠にありがとうございました。
    フォームより以下の内容で送信いたしました。<br><br>

    送信内容確認後、改めて担当者よりご連絡いたしますので今しばらくお待ちください。<br><br>

    ▼送信内容▼<br>
    ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>
    買取希望商品 ： {$tobuy}<br>
    買取方法 ： {$howbuy}<br>
    お名前 ： {$name}<br>
    フリガナ ： {$furi}<br>
    性別 ： {$gender}<br>
    生年月日 ： {$mbirth}/{$dbirth}/{$ybirth}<br>
    婚姻状況 ： {$marriage }<br>
    ご住所 ： {$address}<br>
    居住種類 ： {$residence}<br>
    毎月の家賃・ローン金額 ： {$mrent}<br>
    健康保険 :{$insu}<br>
    自宅固定電話番号 ： {$numhome}<br>
    携帯電話番号  ： {$numphone}<br>
    メールアドレス ： {$email}<br>
    緊急連絡先氏名 ： {$contact}<br>
    続柄  ： {$relation}<br>
    緊急連絡先ご住所 ： {$emer}<br>
    緊急連絡先携帯 ： {$emernum}<br>
    勤務先本社名 ： {$office}<br>
    勤務先本社HP ： {$head}<br>
    常駐先名 ： {$resiname}<br>
    常駐先住所 ： {$resiadd}<br>
    常駐先固定電話番号 ： {$resinum}<br>
    月額給料の手取り金額 ： {$takehome}<br>
    給料日 ： {$payday}<br>
    賞与 :{$bonus}<br>
    給料日が休日の場合 ： {$holiday}<br>
    勤務先の従業員数 ： {$numemp}<br>
    雇用形態 ： {$fromemp}<br>
    現職での勤続年数 ： {$service}<br>
    勤務時間帯 ： {$hours}<br>
    休日 ： {$goodnight}<br>
    ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>
    ※本メールはサーバーからの自動返信メールとなっております。<br>
    本メールに返信いただいてもご連絡いたしかねますのでご了承ください。<br>
    CONTENT;

    $mailAdmin = <<<CONTENT

    ホームページのフォームより以下の内容でお問い合わせありました。<br><br>


    ▼送信内容▼
    ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>
    買取希望商品 ： {$tobuy}<br>
    買取方法 ： {$howbuy}<br>
    お名前 ： {$name}<br>
    フリガナ ： {$furi}<br>
    性別 ： {$gender}<br>
    生年月日 ： {$mbirth}/{$dbirth}/{$ybirth}<br>
    婚姻状況 ： {$marriage }<br>
    ご住所 ： {$address}<br>
    居住種類 ： {$residence}<br>
    毎月の家賃・ローン金額 ： {$mrent}<br>
    健康保険 :{$insu}<br>
    自宅固定電話番号 ： {$numhome}<br>
    携帯電話番号  ： {$numphone}<br>
    メールアドレス ： {$email}<br>
    緊急連絡先氏名 ： {$contact}<br>
    続柄  ： {$relation}<br>
    緊急連絡先ご住所 ： {$emer}<br>
    緊急連絡先携帯 ： {$emernum}<br>
    勤務先本社名 ： {$office}<br>
    勤務先本社HP ： {$head}<br>
    常駐先名 ： {$resiname}<br>
    常駐先住所 ： {$resiadd}<br>
    常駐先固定電話番号 ： {$resinum}<br>
    月額給料の手取り金額 ： {$takehome}<br>
    給料日 ： {$payday}<br>
    賞与 :{$bonus}<br>
    給料日が休日の場合 ： {$holiday}<br>
    勤務先の従業員数 ： {$numemp}<br>
    雇用形態 ： {$fromemp}<br>
    現職での勤続年数 ： {$service}<br>
    勤務時間帯 ： {$hours}<br>
    休日 ： {$goodnight}<br>
    ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>
    ※本メールはサーバーからの自動返信メールとなっております。<br>
    CONTENT;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/web1_kien/assets/php/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/web1_kien/assets/php/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/web1_kien/assets/php/PHPMailer/src/SMTP.php';
require 'C:/xampp/htdocs/web1_kien/assets/php/PHPMailer/src/POP3.php';

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

try {
    //Server settings
    $mail->SMTPDebug = 0;                          
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'ps2210002@gmail.com';                     
    $mail->Password   = 'ffljkgxegpcsydbf';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                   

    //Recipients
    $mail->setFrom('ps2210002@gmail.com', '【買取ブラザーズ】');
    $mail->addAddress($email);    
    // $mail->addCC('ps2210002@gmail.com');

    //Content
    $mail->isHTML(true);                                 
    $mail->Subject = $customer_title;
    $mail->Body    =  $mailCustomer;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    // mail for admin
    $mail->ClearAllRecipients();    
    $mail->addAddress($gmailAdmin);                               
    $mail->Subject = $admin_title;
    $mail->Body    = $mailAdmin;
    header("Location: thanks.html");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
