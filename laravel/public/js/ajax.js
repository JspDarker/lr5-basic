$(function() {

    $('#search').on('keyup', function() {
        $product = $(this).val();

        //console.log($product); // debug key up

        $.ajax({

            type: "get",
            url: "/search",
            data: {
                'product': $product,
                //'_token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(res) {
                console.log(res);
            },
            error: function(err) {
                console.log(err);
            }

        });


    });



});