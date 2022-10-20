window. onscroll = function() {scrollFunction()};
function scrollFunction() {
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navigation-arrow").style.display = "block";
    } else {
        document.getElementById("navigation-arrow").style.display = "none";
    }
}

function topFunction() {
    document.documentElement.scrollTop = 0;
}
