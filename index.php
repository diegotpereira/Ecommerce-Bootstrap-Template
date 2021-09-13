<?php 
    require_once 'config/conexao.php';
    include 'includes/head.php';
    include 'includes/nav.php';
    include 'includes/banner.php';
    $query = "SELECT * FROM produtos WHERE featured = 1";
    $featured = mysqli_query($data_base, $query);
 ?>

<!-- produtos em destaque -->
<div class="container-fluid">
    <h2 class="text-center heading">Produtos em Destaque</h2>
    <div class="row">

        <!-- barra lateral esquerda -->
        <div class="col-md-2">
            <h5>Barra Lateral Esquerda</h5>
        </div>

        <!-- Seção de Produtos -->
        <div class="col-md-10">
            <div class="row book-row">      
               <span id="land"></span>

            <?php while ($row=mysqli_fetch_assoc($featured)) {
                $autorid=(int)$row['autor'];
                $autorquery =  "SELECT autor FROM autor WHERE id = $autorid";
                $autor = mysqli_fetch_assoc(mysqli_query($data_base, $autorquery));
                ?>
            <div class="col-md-3 livro-box">
                <h4 class="livro-titulo"><?= $row['titulo']; ?></h4>
                <h5 class="livro-autor"><?= $autor['autor']; ?></h5>
                <br>
                <img class="produto-image" src="">
                <br><br>
                <p class="lista-preco text-danger">Lista de Preços: <s></s></p>
                <button type="button" class="btn btn-success" onclick="detalhesModal()">Detalhes</button>
                <br>
                <hr>
            </div>

            <?php } ?>
            </div>
        </div>

    </div>
</div>



<?php include  'includes/footer.php'; ?>