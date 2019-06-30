$(function() {
    $(".todofuken").click(function() {    
        $(this).toggleClass("bgGreen");

        var result = $(this).hasClass("bgGreen");
        var getData = $('input:hidden[name="clickedTodofuken"]').val();
        var addData = $(this).find(".todofukenname").html();
        
        if(result) {
            if(getData) {
                addData = "," + addData;
            }
            $('input:hidden[name="clickedTodofuken"]').val(getData + addData);
        }else {
            var beforeResult = getData.split(',');
            var afterResult = [];
            
            for (let i = 0; i < beforeResult.length; i++) {
                if(beforeResult[i] == addData) {
                    continue;
                }
                afterResult.push(beforeResult[i]);
            }
            $('input:hidden[name="clickedTodofuken"]').val(afterResult);
        }
    });
});