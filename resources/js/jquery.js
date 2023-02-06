    
    $(document).ready(function(){
        $('.add-btn').click(function(e){
            e.preventDefault();
            var product_id = $(this).closest('.product_data').find('.prod_id').val();
            console.log(product_id);


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id' : product_id,
            },
            success: function(){
                window.location.reload();
            }
        })
        })

        $('.delete-btn').click(function(e){
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.product_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "post",
            url: "/delete-to-cart",
            data: { 'product_id' : product_id, '_method': 'DELETE'},
            success: function(response){
                window.location.reload();
            }
        })
        })

        $('.dec-qty').click(function(e){
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.product_id').val();

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                method: "POST",
                url: "/dec-qty",
                data: {
                    'product_id' : product_id,
                },
                success: function(response){
                    window.location.reload();
                }
            })
        })

        $('.inc-qty').click(function(e){
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.product_id').val();

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                method: "POST",
                url: "/inc-qty",
                data: {
                    'product_id' : product_id,
                },
                success: function(response){
                    window.location.reload();
                    if(response.status){
                        alert(response.status);
                    }
                }
            })
        })
        
        $('.ch-box').click(()=>{
          if(!$('.ch-address').hasClass('hidden')){
            $('.ch-address').addClass('hidden')
          }
          else{
            $('.ch-address').removeClass('hidden')
          }
        })

          
    });



