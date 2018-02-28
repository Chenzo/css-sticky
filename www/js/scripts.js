
var latestKnownScrollY = 0,
ticking = false;

function onScrollEvent() {
latestKnownScrollY = window.scrollY;
requestTick();
}

function requestTick() {
if(!ticking) {
    requestAnimationFrame(update);
}
ticking = true;
}

function update() {
    ticking = false;

    var currentScrollY = latestKnownScrollY;
    var wH = window.innerHeight;

    if ($(".middlesticky")[0].getBoundingClientRect().top <= 0) {
        $(".middlesticky").addClass("isStuck");
    } else {
        $(".middlesticky").removeClass("isStuck");
    }


}

window.addEventListener('resize', onScrollEvent, false);
window.addEventListener('scroll', onScrollEvent, false);
onScrollEvent(); //do it once to start.

$(function(){
	//
});
