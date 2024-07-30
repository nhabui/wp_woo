jQuery(document).ready(function($) {
    var category = $('.custom-products-wrapper').data('category');

    // Trigger Ajax on page load
    fetchProducts(category);

    // Change category and trigger Ajax on select change
    $('body').on('change', '#category-select', function() {
        var selectedCategory = $(this).val();
        fetchProducts(selectedCategory);
    });

    // Ajax function to fetch products
    function fetchProducts(category) {
        $.ajax({
            type: 'POST',
            url: customWooAjax.ajaxurl,
            data: {
                action: 'custom_fetch_products',
                category: category
            },
            success: function(response) {
                $('.custom-products-wrapper').html(response.data);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
});
