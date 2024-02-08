const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.navbar__menu')

menu.addEventListener('click', function() {
    menu.classList.toggle('is-active')
    menuLinks.classList.toggle('active')

})

dayjs.extend(dayjs_plugin_duration);

function activateCountdown(element, dateString) {
    const targetDate = dayjs(dateString);

    element.querySelector(".until__event").textContent + `Until ${ targetDate.format("D MMMM YYYY")}`;

    setInterval(() =>{
        const now = dayjs();
        const duration = dayjs.duration(targetDate.diff(now));

        if (duration.asMilliseconds() <= 0) return;

        element.querySelector(".until__numeric--sec").textContent = duration.seconds().toString().padStart(2, "0");
        element.querySelector(".until__numeric--min").textContent = duration.minutes().toString().padStart(2, "0");
        element.querySelector(".until__numeric--hours").textContent = duration.hours().toString().padStart(2, "0");
        element.querySelector(".until__numeric--days").textContent = duration.asDays().toFixed(0).toString().padStart(2, "0");
    }, 250);
}

activateCountdown(document.getElementById("myCountdown"), "2024-06-03");

const notification = document.querySelector('.notification');
const button = document.querySelector('.submit');


document.addEventListener("click", (event) => {
    const isClickInsideNotification = notification.contains(event.target);
    const isButtonClicked = button.contains(event.target);

    if (!isClickInsideNotification && !isButtonClicked) {
        notification.classList.add('hide');
    }
});



var noti = document.getElementById("notification");
noti.style.display = noti.style.display ===  'none' ? '' : 'none';

$( ".change" ).on("click", function() {
    if( $( "body" ).hasClass( "dark" )) {
        $( "body" ).removeClass( "dark" );
        $( ".change" ).text( "OFF" );
    } else {
        $( "body" ).addClass( "dark" );
        $( ".change" ).text( "ON" );
    }
});

function toggleDarkMode(){
    var element = document.body;
    element.classList.toggle("dark__mode");
}