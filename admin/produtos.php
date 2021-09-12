<?php 
    require_once '../config/conexao.php';
    

?>    

<div class="container">
    <h2 class="text-center">Livro</h2>
    <hr>
    <form action="produtos.php" method="POST">
        <div class="row">
            <div class="form-group col-md-3">
                <label for="titulo">Titulo: </label>
                <input type="text" class="form-control" name="titulo" value="">
            </div>

            <div class="form-group col-md-3">
                <label for="autor">Autor: </label>
                <select class="form-control" name="autor">
                    <option></option>
                    <option value="autor"></option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="selecionar_genero">Genero: </label>
                <select class="form-control" name="genero_pai" id="selecionar_genero">
                    <option></option>
                    <option value="genero"></option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="sub_genero">Sub-Genero: </label>
                <select type="text" class="form-control" name="sub_genero" id="sub_genero">

                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="kista_preco">Lista de Preço: </label>
                <input type="text" class="form-control" name="lista_preco" value="">
            </div>
            <div class="form-group col-md-3">
                <label for="seu_preco">Seu Preço: </label>
                <input type="text" class="form-control" name="seu_preco" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="iamge">Image: </label>
                <input type="file" class="form-control" name="image" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="dexcricao">Descricao: </label>
                <textarea class="form-control" name="descricao" value=""></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <a href="produtos.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
        <div class="col-md-2">
            <input type="submit" name="add" value="" class="form-control btn btn-success">
        </div>
    </form>
</div>