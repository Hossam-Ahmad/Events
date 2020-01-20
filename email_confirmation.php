  
    <div class="full-screen bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 m-auto pt-50 pb-50 text-center">
                    <h2 class="text-head">Check your email</h2>
                    <p class="pb-30 text-head">find confirmation messsage</p>
                    <button class="btn btn-primary text-center w-100" onclick="opentab()">
                        Go to <? echo $_SESSION["email_signed_type"] ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
    function opentab() {
        window.open("<? echo $_SESSION["email_signed_platform"] ?>", "_blank");
    };
    </script>