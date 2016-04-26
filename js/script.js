(function($){
    var body    = $('body'),
        _window = $(window);

    /************************************** //Product price alert **************************************/
    $(function(){

        $('.product-info a').on('click',function(e){
            
            product = $(this).attr('id');
            product_name = $(this).attr('title');                        
            
            var getCurrenies = $.get( "currency.php", { product: product } )
                .done(function( data ) {

                    rateList = $.parseJSON(data);

                    //random price
                    keys = Object.keys(rateList.rates);
                    randomKey = keys[keys.length * Math.random() << 0];
                    randomPrice =  rateList.rates[randomKey];

                    // Cnverting price to new currency
                    $( '#' + product + ' .price').html(randomKey + ' ' + randomPrice)
                    alert( "Product name: " + product_name + "  | Product Price: " + randomKey + ' ' + randomPrice);

                }).fail(function( data ) {
                    alert( "There was some error getting the currency." + data );
                });            
            
        });
    });

})(jQuery);