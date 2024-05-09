<form action="" method="post">
    <input type="text" name="content">
    <textarea name="feedback" id="" cols="30" rows="10"></textarea>
    <input type="text" name="email">
    <input type="submit">
  </form>
  <?php
$to_email = 'youremail@example.com';
$subject = 'Feedback';
$message = $_POST['feedback'];
$from_email = $_POST['email'];
$headers[] = 'From: ' . $from_email;
$headers[] = 'Reply-To: ' . $from_email;
$headers[] = 'X-Mailer: PHP/' . phpversion();

if (mail($to_email, $subject, $message, implode("\r\n", $headers))) {
  http_response_code(200);
} else {
  http_response_code(500);
}
?>