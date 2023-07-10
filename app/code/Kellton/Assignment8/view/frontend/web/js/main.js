require(["jquery"], function($) {
$(document).ready(function() {
    jQuery('.button_action a').click(function() {
       
       var productId = $('#productId').data('product-id');
       var customerId = $('#customerId').data('customer-id');
       var getlikeDislikeValue = $(this).attr('data-val');
        $('.button_action a.active').removeClass('active');
        $(this).addClass('active');
       $.ajax({
        type: 'post',
        url: '/saveproduct/page/saveproductreview',
        data: { productId:productId, customerId:customerId,getlikeDislikeValue:getlikeDislikeValue},
        success: function(data){
            //alert(data);
           }
       })
     
    })
})

})