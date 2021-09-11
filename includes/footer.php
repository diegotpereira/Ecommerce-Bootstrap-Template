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

   function adicionarCarrinho() {
       $("#modal_errors").html('');
       var data=$('#produto_form').serialize();
       var quantidade = $("#quantidade").val();
       if (quantidade === '') {
           return;
       }else if (quantidade > available) {
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