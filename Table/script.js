function add_to_total(nu){
 var parent = $(nu).closest('tr');
 var price = parent.find('.price').val() == "" ? 1 : parent.find('.price').val();
 var qty = parent.find('.qty').val() == "" ? 1 : parent.find('.qty').val();
 var total = price * qty;
 parent.find('.total_price').val(total);

 // var total_1 = document.getElementById("totalprice1");
 // var total_2 = document.getElementById("totalprice2");
 // var total_3 = document.getElementById("totalprice3");

 // if(total_1.value!=''){
 //     alltotalprice.value=parseInt(total_1.value);
 // }
}

function add_all_total(sum){

 var sum = 0;

 $("#tab td").each(function(){
  
  var num = parseInt($(this).find("input[class*=text_box]").val());
  var price = parseFloat($(this).find("span[class*=price]").text());
  sum += num*price;
 })
 $("#total").html(sum.toFixed(2));

 // var total_1 = document.getElementById("totalprice1");
 // var total_2 = document.getElementById("totalprice2");
 // var total_3 = document.getElementById("totalprice3");

 // var total_1 = $("#totalprice1").val() == "";
 // var total_2 = $("#totalprice2").val() == "";
 // vat total_3 = $("#totalprice3").val() == "";


 // if(total_1.value != ''){
 //     $("#alltotalprice").value = parseInt(total_1.value);
 // }
 // if(total_1.value != '' && total_2.value != ''){
 //     $("#alltotalprice").value = parseInt(total_1.value) + parseInt(total_2.value);
 // }
 // if(total_1.value != '' && total_2.value != '' && total_3.value != ''){
 //     $("#alltotalprice").value = parseInt(total_1.value) + parseInt(total_2.value) + parseInt(total_3.value);
 // }


}


// function add_all_total(num){
//     var total_1
//     var total_2
//     var total_3
//     var alltotal = total_1 + total_2 + total_3;
//     parent.find('.all_total_price').val(alltotal);
// }