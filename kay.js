
$(document).ready(function(){
    $(window).scroll(function(){
        const distance = $(window).scrollTop();

        if(distance > 200){
            $(".to-up").fadeIn();
            $(".donate").fadeIn();
        }
        else{
            $(".to-up").fadeOut();
            $(".donate").fadeOut();
        }
    });

    $(".to-up").click(function(){
        $("html").animate({
            scrollTop:0,
        });
    });
});

var up = document.getElementsByClassName("to-up")[0];
up.addEventListener("mousemove", function(){
    up.innerHTML = "&uArr;";
    up.classList.add("new-size");
});

up.addEventListener("mouseout", function(){
    up.innerHTML = "UP";
    up.classList.remove("new-size");
});


var right = document.getElementsByClassName("donate")[0];

right.addEventListener("mousemove", function(){
    right.innerHTML = "Make Donation";
    right.classList.add("donate-size");
});

right.addEventListener("mouseout", function(){
    right.innerHTML = "<i class='fa-solid fa-arrow-right'></i>";
    right.classList.remove("donate-size");
});
