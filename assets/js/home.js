// count down
function countDown(element, date) {
    var second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;
    var countDown = new Date(date).getTime(),
        x = setInterval(function () {
            var now = new Date().getTime(),
                distance = countDown - now;
            element.find('[data-event-d]').html(Math.floor(distance / (day)));
            element.find('[data-event-h]').html(Math.floor((distance % (day)) / (hour)));
            element.find('[data-event-m]').html(Math.floor((distance % (hour)) / (minute)));
            element.find('[data-event-s]').html(Math.floor((distance % (minute)) / second));
            // document.getElementById('days').innerText = Math.floor(distance / (day)),
            //do something later when date is reached
            //if (distance < 0) {
            //  clearInterval(x);
            //  'IT'S MY BIRTHDAY!;
            //}
        }, second)
}
// Home Featured events slider
$('.event-slider').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    mouseDrag: false,
    loop: true,
    margin: 0,
    nav: false,
    items: 1,
    autoplay: true,
    dots: true
});
// Category Slider
$('.cat-slider').owlCarousel({
    mouseDrag:true,
    loop:true,
    margin:50,
    nav:true,
    items:1,
    autoplay:true,
    center:false,
    dots:false,
    responsive : {
        747:{
            items:2,
        },
        990:{
            items:3,
            center:true
        },
        1200:{
            items:4,
        },
        1920:{
            items:5,
            center:true
        }
    }
})