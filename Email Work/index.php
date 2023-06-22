<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        <center>
            <h1>CONTACT US :</h1>
        </center>
        <form action="" method="POST">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input type="text" required name="txtemail" class="form-control"></td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td><input type="text" required name="txtsub" class="form-control"></td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td><textarea name="txtmsg" id="" cols="30" rows="10" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="sent" class="form-control btn btn-primary"></td>
                </tr>
            </table>
        </form>

    </div>
</body>
</html>
        <?php

        if(isset($_POST["sent"])){
            $to = "umerwahiid48@gmail.com";
            $from = $_POST["txtemail"];
            $sub = $_POST["txtsub"];
            $msg = $_POST["txtmsg"];
            
            if (mail($to,$sub,$msg,$from)) {
               echo "<h1>Email Sent Successfully</h1>";
            }
            else{
               echo "<h1>Email Not Sent Successfully</h1>";
            }
        }
        
        ?>