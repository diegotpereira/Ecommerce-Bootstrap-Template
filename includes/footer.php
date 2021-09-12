<footer>
    <div id="footer">
        <hr>
            <p>Todos os direitos reservados &copy; <a href="ecommerce.html">DTP Software</a> 2021</p>
        </hr>
    </div>
</footer>
</body>
</html>



<script type="text/javascript">
   function detalhesModal(id) {
       var data={ "id": id };
       jQuery.ajax({
           url: "includes/detalhes-modal.php",
           method: "post",
           data: data,
           success: function(data) {
               jQuery('body').append(data);
               jQuery('#detalhes-modal').modal('toggle');
           },
           error: function() {
               alert("Algo deu errado!");
           }
       });
   }

   function adicionarCarrinho(id) {

       $('#modal_errors').html('');

       var quantidade = $("#quantidade").val();
       var available=$('#available').val();
       var error= '';
       var data=$('#produto_form').serialize();

       if (quantidade === '') {

           error+='<p class="alert alert-danger">Please choose quantity</p>';
           $('#modal_errors').html(error);
           return;

       }else if (quantidade > available) {
           error+='<p class="alert alert-danger">Quantity greater than available</p>';
           $('#modal_errors').html(error);
           return;
       }else{
           $.ajax({
               url: "/carrinho.php",
               method: "post",
               data: data,
               success: function() {
                   location.reload();
               },
               error: function() {
                   alert("algo acontenceu de errado!.");
               }
           });
       }
   }
</script>