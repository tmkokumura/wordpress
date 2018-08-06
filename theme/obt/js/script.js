$(function(){
    $(".menu-trigger").click(function () {
        $(this).toggleClass("active");
        $(".menu").toggleClass("active");
    });
});

$(function(){
    $(".menu-trigger").focusout(function () {
        $(this).removeClass("active");
        $(".menu").removeClass("active");
    });
});
