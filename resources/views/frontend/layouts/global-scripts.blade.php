<script>

/** Loard product modal**/
function loadProductModal(productId){
    $.ajax({
        method: 'GET',
        url: '{{ route("load-product-modal", ":productId") }}'.replace(':productId', productId),
        beforeSend: function(){
            $('.overlay').addClass('active');
        },
        success: function(response){
            $(".load_product_modal_body").html(response);
            $('#cartModal').modal('show');
        },
        error: function(xhr, status, error){
            console.error(error);
        },
        complete: function(){
            $('.overlay').removeClass('active');
        }
    })
}
</script>
