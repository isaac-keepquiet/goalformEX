function add_to_total(nu){
    var parent = $(nu).closest('tr');
    var price = parent.find('.price').val() == "" ? 1 : parent.find('.price').val();
    var qty = parent.find('.qty').val() == "" ? 1 : parent.find('.qty').val();
    var total = price * qty;
    parent.find('.total_price').val(total);
  }

//   function add_all_total(num){

//   }