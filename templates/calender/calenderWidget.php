<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hubb Events - Event Countdown Widget</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/vendor/flatpickr/flatpickr.min.css">
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/vendor/flatpickr/flatpickr.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>

<body>
    <div class="d-block widget-calender">
        <input type="hidden" class="d-none" value="2019-4-12" data-plugin="flatpickr">
        <img id="eventLogo" src="https://placeimg.com/640/480/any" class="event-img w-100" alt="">
        <article class="event-body">
            <div class="description">
                <h6 class="title" id="eventName">
                    <strong>
                        <a href="event.php">
                            Get Your Masters or PhD in the U.S. (Alexandria)
                        </a>
                    </strong>
                </h6>
                <small class="footer" id="eventDates">
                    <p>Apr 9, 2019 at 7:00 PM</p>
                    <p>Location : Live</p>
                </small>
            </div>
            <a href="#" class="link" id="eventRegisterBtn">Register now</a>
            <a href="#" class="tweetBtn" id="eventTweetBtn">Tweet this Event</a>
            <p style="font-size: small;text-align: center;color: #afafaf;margin-top: 1em;">Powered
                by Hubb
                Event</p>
        </article>
    </div>
    <!-- mc -->
    <script>
        $('[data-plugin="flatpickr"]').flatpickr({
            inline: true
        });
    </script>
</body>

</html>
<!-- mc -->

</html>