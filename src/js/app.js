// FrontPage Horizontal Scrollable
var button = document.getElementById('slide');
button.onclick = function () {
    var container = document.getElementById('libros-scrollable');
    sideScroll(container,'right',50,170,20);
};

var back = document.getElementById('slideBack');
back.onclick = function () {
    var container = document.getElementById('libros-scrollable');
    sideScroll(container,'left',50,170,20);
};

function sideScroll(element,direction,speed,distance,step){
    scrollAmount = 0;
    var slideTimer = setInterval(function(){
        if(direction == 'left'){
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
    }, speed);
};
