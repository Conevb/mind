$('form.add-to-cart').submit(function(e){
    var id = $(this).find('input[name="product-id"]').val();
    var qty = $(this).find('input[name="product-qty"]').val();
    var link = $(this).attr('action');

    $.ajax({
        url: link,
        method: 'post',
        data: {
            id: id,
            qty: qty
        },
        success: function(data){
            update_view(data);
        }
    });



    e.preventDefault();
});

function update_view(data){
    $("#cart-dropdown").html(data);
}