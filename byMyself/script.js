

// 可以通过CSS更改input background-color，但是focus函数无法更改背景颜色。疑似与bootstrap冲突
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color","lightgreen");
    });
});