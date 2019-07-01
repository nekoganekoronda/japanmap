$(function() {
    $(".todofuken").click(function() {    
        $(this).toggleClass("bgGreen");
        $(this).find(".todofukenname").toggleClass("colorWhite");
    });
    
    $(".toroku").click(function() {
        var elements = document.getElementsByClassName("colorWhite");
        var afterResult = [];
        
        for(let i=0; i<elements.length; i++) {
            afterResult.push(elements[i].innerHTML);
        }
        $('input:hidden[name="clickedTodofuken"]').val(afterResult);
    });
});