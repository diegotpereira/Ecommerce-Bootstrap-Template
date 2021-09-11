<div class="modal fade" id="detalhes-modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title text-center d-block"><small></small></h4>
            <button class="close" type="button" onclick="modalFechar()"><span>&times;</span></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <img class="modal-image" src="#">
                    </div>
                    <div class="col-sm-6">
                        <h4>Detalhes</h4>
                        <p>

                        </p>
                        <p>
                            <small>

                            
                        </p></small>
                        <hr>
                        <p>Lista de Preços: <s class="text-danger"></s></p>
                        <p>Seus Preços: </p>
                        <form action="adicionarCarrinho.php" method="POST" id="produto_form">
                            <div class="form-group col-md-3">
                                <input type="hidden" name="produto_id" value="">
                                <input type="hidden" name="available" value="">
                                <label for="quantidade">Quantidade: </label>
                                <input id="quantidade" type="number" min="1" max="3" class="form-control" name="quantidade">
                            </div>
                        </form>
                        <div id="modal_errors"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default" onclick="modalFechar()">Fechar</button>
            <button class="btn btn-warning" onclick="adicionarCarrinho()"><span class="fa fa-shopping-cart"></span>Adicionar no Carrinho</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
   function modalFechar() {
       $("#detalhes-modal").modal('hide');
       setTimeout(function() {
           $("#detalhes-modal").remove();
           $(".modal-backdrop").remove();
       }, 500);
   }
   $('.modal').on('hidden.bs.modal', function() {
       $("#detalhes-modal").modal('hide');
       setTimeout(function() {
           $("#detalhes.modal").remove();
           $(".modal-backdrop").remove();
       }, 500);
   });
</script>