function showHeader() {
    if ($(window).width() < 820) {
        $('.navbar').css('display', 'flex');
        $('.initial-header').css('display', 'none');
    }
    else {
        $('.navbar').css('display', 'none');
        $('.initial-header').css('display', 'flex');
    }
}

document.onscroll = () => {
    // if (window.scrollY > $('.main').height()) {
    if (window.scrollY > $('.main').height() || $(window).width() < 820) {
        $('.navbar').css('display', 'flex');
        // $('.initial-header').css('display','flex');
    }
    else {
        $('.navbar').css('display', 'none');
    }
}



let dest=new Date("sep 09,2021 12:00:00").getTime();
setInterval(() => {
    let today=new Date().getTime();
    let diff=dest-today;
    let days=Math.floor(diff/(24*60*60*1000));
    let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((diff % (1000 * 60)) / 1000);
    document.getElementById("countdown-days").innerHTML=days;
    document.getElementById("countdown-hours").innerHTML=hours;
    document.getElementById("countdown-minutes").innerHTML=minutes;
    document.getElementById("countdown-seconds").innerHTML=seconds;
},1000);

$(document).ready(() => {
    // if (window.scrollY > 0) $('.navbar').css('display', 'flex');
    showHeader();    
});

$(window).resize(() => {
    showHeader();
})