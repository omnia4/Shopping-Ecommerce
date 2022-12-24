    <script src="{{ asset('v1/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('v1/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('v1/assets/plugins/slick/slick.min.js')}}"></script>
    <script src="{{ asset('v1/assets/js/main.js')}}"></script>
    <script src="{{ asset('v1/assets/js/index.js')}}"></script>
    <script src="{{ asset('v1/assets/js/loader.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function ()
     {
      $(document).on("click",".removeCart",function(e)
      {
        e.preventDefault();
         var itemId = $(this).val();
         url ="{{ route('cart.remove',':itemId') }}";
         url = url.replace(':itemId',itemId);
         //alert(itemId);
          $.ajax({
            type:'post',
            url : url,
            data:
            {
              '_token':"{{csrf_token()}}",
              'itemId':itemId,
            },
            success: function(response){
              $('.deleteDiv'+itemId).remove();
              $('.cart-badge').text(response.cartCount);
              // here
                //$('.cart-badge').replace({{Cart::getContent()->count()}});
              //$('.cart-badge').append({{Cart::getContent()->count()}});
              //$('.cart-badge').val(cartCount);
            }
        });
      });
    });
</script>

<script>
    $(document).ready(function ()
     {
      $(document).on("click",".addCart",function(e)
      {
        e.preventDefault();
        //console.log("hi");
        var itemId = $(this).val();
        url ="{{ route('cart.store',':itemId') }}";
        url = url.replace(':itemId',itemId);
        //alert(itemId);
        $.ajax({
          type:"post",
          url:url,
          data:
          {
            '_token':"{{csrf_token()}}",
            'itemId':itemId,
          },
          success: function(response){
            $('.cart-badge').text(response.cartCount);
            $('#offcanvasRight').empty().html(response.cartContentList);
            const Toast = Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Moved To Cart',
                showConfirmButton: false,
                timer: 1500
              });
           }

        });

      });
     });


</script>


<script>
    $(document).ready(function ()
     {
      $(document).on("click",".addFav",function(e)
      {
        e.preventDefault();
        var itemId = $(this).val();
        url ="{{ route('fav.store',':itemId') }}";
        url = url.replace(':itemId',itemId);
        $.ajax({
          type:"post",
          url:url,
          data:
          {
            '_token':"{{csrf_token()}}",
            'itemId':itemId,
          },
          success: function(response){
            const Toast = Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Moved To Favorite',
                showConfirmButton: false,
                timer: 1500
              });
           }
        });
      });
     });


</script>

<script>
    $(document).ready(function ()
     {
      $(document).on("click",".addWish",function(e)
      {
        e.preventDefault();
        var itemId = $(this).val();
        url ="{{ route('wish.store',':itemId') }}";
        url = url.replace(':itemId',itemId);
        $.ajax({
          type:"post",
          url:url,
          data:
          {
            '_token':"{{csrf_token()}}",
            'itemId':itemId,
          },
          success: function(response){
            const Toast = Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Moved To Wishlist',
                showConfirmButton: false,
                timer: 1500
              });
           }
        });
      });
     });


</script>



<script>
    $(document).ready(function ()
     {
      $(document).on("click",".removeCard",function(e)
      {
        e.preventDefault();
         var itemId = $(this).val();
         url ="{{ route('cardFav.remove',':itemId') }}";
         url = url.replace(':itemId',itemId);
         //alert(itemId);
          $.ajax({
            type:'post',
            url : url,
            data:
            {
              '_token':"{{csrf_token()}}",
              'itemId':itemId,
            },
            success: function(response){
              $('.deleteDiv'+itemId).remove();
            }
        });
      });
    });
</script>


<script>
    $(document).ready(function ()
     {
      $(document).on("click",".removeCard",function(e)
      {
        e.preventDefault();
         var itemId = $(this).val();
         url ="{{ route('cardW.remove',':itemId') }}";
         url = url.replace(':itemId',itemId);
         //alert(itemId);
          $.ajax({
            type:'post',
            url : url,
            data:
            {
              '_token':"{{csrf_token()}}",
              'itemId':itemId,
            },
            success: function(response){
              $('.deleteDiv'+itemId).remove();
            }
        });
      });
    });
</script>





    <script>
        @if(Session::has('alert-success'))
            Toastify({ text: "{{ Session::get('alert-success') }}", duration: 3000,
                style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
            }).showToast();

        @elseif (Session::has('alert-warning'))
            Toastify({ text: "{{ Session::get('alert-warning') }}", duration: 3000,
                    style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
            }).showToast();

        @elseif (Session::has('alert-danger'))
            Toastify({ text: "{{ Session::get('alert-danger') }}", duration: 3000,
                    style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
            }).showToast();
        @endif
    </script>

