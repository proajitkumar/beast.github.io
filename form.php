<html>
    <body>
        <form method="post" action="<?php echo $SERVER['PHP_SELF']; ?>">
            Email: <input name="email" type="text"><br><br>
            Subject: <input name="subject" type="text"><br><br>
            Message: <br><textarea name="message" id="" cols="40" rows="15"></textarea>
            <input name="esubmit" type="submit">
        </form>
    </body>
</html>

<?php
    if(isset($_POST['esubmit'])){
        $to = "programmerjeetkumar@gmail.com";
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $from = "raramkumar001@gmail.com";
        $headers = "From: $from";
        
        if(mail($to ,$subject,$message,$headers)){
            echo "Email Sent.";
        }else{
            echo "Email Failed.";
        }
    }
?>