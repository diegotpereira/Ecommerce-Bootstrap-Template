<?php
include 'includes/head.php';
include 'includes/nav.php';
?>


<div class="container">
    <h2 class="text-center">Meu Carrinho de Compras</h2>
    <hr>

    <div class="alert alert-danger text-center"><span class="fa fa-warning"></span>&nbsp; Seu Carrinho de Compras está Vazio</div>

    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <th>No.</th>
                <th>Título</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Sub Total</th>
            </thead>
            <tbody>

            </tbody>
        </table>
        <table class="table table-condensed table-bordered">
            <legend>Total</legend>
            <thead>
                <th>Total de Itens</th>
                <th>Preço Total</th>
            </thead>
            <tbody class="text-right">
                <td>Total</td>
                <td><span class="fa fa-rupee">&nbsp;</span> Total</td>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkOutModal"><span class="fa fa-shopping-cart">&nbsp;</span>Checar</button>


<!-- Modal -->
<div class="modal" id="checkOutModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal-header -->
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Endereço de entrega</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="obrigado.php" method="POST" id="payment-form">
                    <div id="pay_err"></div>
                    <input type="hidden" name="total" value="">
                    <input type="hidden" name="cart_id" value="">

                    <div id="s1" style="display: block;">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome: </label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email">Email: </label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="telefone">Telefone: </label>
                                <input type="text" name="telefone" id="telefone" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="endereco">Endereço: </label>
                                <input type="text" name="endereco" id="endereco" class="form-control" data-stripe="endereco_linha1">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cep">Cep: </label>
                                <input type="text" name="cep" id="cep" class="form-control" data-stripe="endereco_cep">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cidade">Cidade: </label>
                                <input type="text" name="cidade" id="cidade" class="form-control" data-stripe="endereco_cidade">
                            </div>
                        </div>
                        </div>

                        <div id="s2" style="display: none;">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="C_nome">Nome do Cartão</label>
                                    <input type="text" name="o_nome" id="o_nome" class="form-control" data-stripe="nome">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="Cnum">Número do Cartão</label>
                                    <input type="text" name="c_num" id="c_num" class="form-control" data-stripe="numero">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="cvc">CVC: </label>
                                    <input type="text" name="cvc" id="cvc" class="form-control" data-stripe="cvc">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="exp_m">Mês de Vencimento</label>
                                    <select name="exp_m" id="exp_m" class="form-control" data-stripe="exp_mes">
                                        <option value=""></option>
                                        <option class="form-control" value=""></option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="exp_y">Mês de Expiração</label>
                                    <select name="exp_y" id="exp_y" class="form-control" data-stripe="exp-year">
                                        <option value=""></option>
                                        <option class="form-control" value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-warning" id="">Próximo</button>
                        <button type="button" class="btn btn-warning" id="">Voltar</button>
                        <button type="submit" class="btn btn-warning" id="">Faça seu Pedido</butto>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php include 'includes/footer.php'; ?>