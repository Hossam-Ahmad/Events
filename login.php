<?
        if(isset($login_Action)){
            $result = mysqli_query($conn,"select id , Username , email , account_status , email_confirmed , password from inhouse_humanresources where LOWER(email) = LOWER('$email')");
            if(mysqli_num_rows($result) == 0){
                $error_message = "Email or password is wrong !";
            }
            else{
                list($id , $name , $email , $account_status , $email_confirmed , $password_hashed) = mysqli_fetch_row($result);
                if(!password_verify($password,$password_hashed)){
                    $error_message = "Email or password is wrong !";
                }
                else if($account_status == 1){
                    $error_message = "This account is inactive";
                }else if($email_confirmed == 1){
                    echo "
                        <script>
                            window.location.href = 'email_confirmation';
                        </script>
                    ";
                }else{
                    if($rememberMe){
                        setcookie("login_status",true,2147483647);
                        setcookie("user_name",$name,2147483647);
                        setcookie("user_email",$email,2147483647);
                        setcookie("user_id",$id,2147483647);
                        $_SESSION["login_status"] = true;
                        $_SESSION["user_name"] = $name;
                        $_SESSION["user_email"] = $email;
                        $_SESSION["user_id"] = $id;
                    }else{
                        $_SESSION["login_status"] = true;
                        $_SESSION["user_name"] = $name;
                        $_SESSION["user_email"] = $email;
                        $_SESSION["user_id"] = $id;
                    }
                    
                    echo "
                        <script>
                            window.location.href = 'home';
                        </script>
                    ";
                }
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
                <p class="pb-30 text-head">Enter your email to log in</p>
                <? 
                if(isset($error_message)){ ?>
                    <p> <? echo $error_message; ?> </p>
                <?
                    }
                ?>
                <form action="./login" method="post" class="event-form">
                    <input type="hidden" name="login_Action" value="1">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email adress" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" minlength="8" required>
                    </div>
                    <div class="custom-control custom-checkbox text-left">
                        <input type="checkbox" name="rememberMe" class="custom-control-input" id="rememberMe">
                        <label class="custom-control-label" for="rememberMe">Remember me</label>
                    </div>
                    <small class="text-left mb-3 d-block">if you dont have Account <a href="register" class="text-info">Sign up</a></small>
                    <button class="btn btn-primary text-center w-100" type="submit">Log in</button>
                </form>
            </div>
        </div>
    </div>
</div>
