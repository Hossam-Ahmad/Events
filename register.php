
    <?
        if(isset($register)){
            if($password != NULL && $password != "" && strlen($password) >= 8 && $name != NULL && $name != "" && $email != NULL && $email != "" ){
                $result = mysqli_query($conn,"select email from inhouse_humanresources where LOWER(email) = LOWER('$email')");
                if(mysqli_num_rows($result) == 0){
                    $user_uniqueID = date("HYdim").substr(str_shuffle('abcefghijklmnopqrstuvwxyzABCDEFGKLMNOPQRSTYVZ'), 0, 5).RAND(1000,9999);

                    mysqli_query($conn,"INSERT INTO subscription_accounts(uniqueID, name, email) VALUES ('$user_uniqueID', '$name', '$email')");
                    $account_id = mysqli_insert_id($conn);
                    $password = password_hash($password, PASSWORD_BCRYPT);
                    $confirmation_code = md5(uniqid(rand(), true));
                    
                    mysqli_query($conn,"INSERT INTO inhouse_humanresources(uniqueID, Username , email, password, email_confirmed , confirmation_code) VALUES ('$user_uniqueID' , '$name','$email','$password' , '1' , '$confirmation_code')");
                    $user_id = mysqli_insert_id($conn);
                    mysqli_query($conn,"INSERT INTO users_accounts_relation(user_id, account_id) VALUES ('$user_id' , '$account_id')");

                    $emails_types = ["gmail","yahoo","outlook","windowslive","icloud"];
                    $emails_platforms = ["https://gmail.com","https://mail.yahoo.com","https://outlook.live.com","https://outlook.live.com","https://www.icloud.com/mail"];
                    
                    foreach($emails_types as $index=>$email_type){
                        if(strpos($email,$email_type) !== false){
                            $_SESSION["email_signed_type"] = $email_type;
                            $_SESSION["email_signed_platform"] = $emails_platforms[$index];
                            break;
                        }
                    }

                    $result = mysqli_query($conn,"select name , value from application_settings where name in ('Email to send From:','Email Footer','User must confirm his email after signup - only in new accounts')");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $email_settings[$row["name"]] = $row["value"];
                    }
                    if($email_settings["User must confirm his email after signup - only in new accounts"] == 2){                  
                        $msg = "This is confirmation email , powered by HUBB Event".$email_settings["Email Footer"];
                        $msg = wordwrap($msg,70);

                        $headers  = "From: HUBB_Events < ".$email_settings["Email to send From:"]." >\n";
                        $headers .= "X-Sender: HUBB_Events < ".$email_settings["Email to send From:"]." >\n";
                        $headers .= 'X-Mailer: PHP/' . phpversion();
                        $headers .= "X-Priority: 1\n"; // Urgent message!
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=utf-8\n";

                        mail($email, "Activation | HUBB Event", $msg, $headers);

                        redirect('email_confirmation');
                    }else{
                        redirect('login');
                    }

                    
                }
                else{
                    $error_message = "This email is already registered";
                }
            }else{
                $error_message = "There is an error in the data";
            }
            
        }
    ?>
    <!-- App -->
    <main id="app">
    
    <div class="full-screen bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 m-auto pt-50 pb-50 text-center">
                    <h2 class="text-head">Let's get started</h2>
                    <p class="pb-30 text-head">Registration</p>
                    <? if(isset($error_message)){ ?>
                        <p> <? echo $error_message; ?> </p>
                    <?
                    }
                    ?>
                    <form action="./register" method="post" class="event-form">
                        <input type="hidden" name="register" value="1">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email adress" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" minlength="8" required>
                        </div>
                        <small class="text-left mb-3 d-block">If have Account <a href="login" class="text-info">Login</a></small>
                        <button class="btn btn-primary text-center w-100" type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
