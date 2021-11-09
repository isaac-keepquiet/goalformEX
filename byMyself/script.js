

// 可以通过CSS更改input background-color，但是focus函数无法更改背景颜色。疑似与bootstrap冲突
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color","#ccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#fff");
    });

    //function（什么）来启动函数
    $("button").click(function(){
        alert("Invalid email format！")
    });

});

//1、添加弹出窗孔并检测邮件地址格式
//2、结束弹窗并提交数据