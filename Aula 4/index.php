<?php
include './Header.php';
?>

   <?php 
    class pokemon {
        public $nome;
        public $poder;
        public $foto;

       }

       $pokemon1 = new pokemon();
       $pokemon1->nome = "Palkiahu";
       $pokemon1->poder = "Agua";
       $pokemon1->foto = "";

       $pokemon2 = new pokemon();
       $pokemon2->nome = "Squirtle";
       $pokemon2->poder = "Agua";
       $pokemon2->foto = "";

       $pokemons = [
          $pokemon1,
          $pokemon2
       ];
?>



<div class="container">
    <div class="row">

       <?php foreach ($pokemons as $key => $pokemon) { ?>
        <div class="col-12 col-lg-3 p-3">
            <div class="card shadow" style="width: 18rem;">
                <img src="<?php echo $pokemon->foto;?>" class="card-img-top" alt="Pikachu">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $pokemon->nome; ?></h5>
                    <p class="card-text"><?php echo $pokemon->poder; ?></p>
                    <a href="./palkia.html" class="btn btn-primary">Qual é este Pokémon</a>
                </div>
            </div>
        </div>
       <?php } ?>

</div>

<?php
include './Footer.php';
?>