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
    var total_1 = $("#totalprice1").val() == "";
     // var total_1 = document.getElementById("totalprice1");
    var total_2 = document.getElementById("totalprice2");
    var total_3 = document.getElementById("totalprice3");

    if(total_1.value!=''){
        alltotalprice.value=parseInt(total_1.value);
    }
    
}


// function add_all_total(num){
//     var total_1
//     var total_2
//     var total_3
//     var alltotal = total_1 + total_2 + total_3;
//     parent.find('.all_total_price').val(alltotal);
// }