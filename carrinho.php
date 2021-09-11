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
    </div>
</div>