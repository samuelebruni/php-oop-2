<main>
    <div class="container">
        <div class="row my-4">
            <?php foreach ($listaProdotti as $prodotto) : ?>

                <?php if ($prodotto->category->pet == 'Gatto') : ?>

                    <div class="col-4 h-100">

                        <div class="card shadow">

                            <div>
                                <img src="<?= $prodotto->img?>" class="card-img-top img-fluid" alt="...">
                            </div>

                            <div class="card-body">

                                <?php if ($prodotto->section == 'toy') : ?>
                                    <h5><?= $prodotto->getName() ?></h5>

                                    <p class="mb-1">Gioco</p>

                                    <p class="mb-1">Prezzo: <?= $prodotto->price ?>€</p>
                                    <p class="mb-1">Materiale: <?= $prodotto->getMateriale() ?></p>
                                    <p class="mb-1">Codice Prodotto: <?= $prodotto->getCode() ?></p>

                                <?php endif ?>

                                <?php if ($prodotto->section == 'food') : ?>
                                    <h5><?= $prodotto->getName() ?></h5>

                                    <p class="mb-1">Cibo</p>

                                    <p class="mb-1">Prezzo: <?= $prodotto->getPrice() ?>€</p>
                                    <p class="mb-1">Peso: <?= $prodotto->getPeso() ?>Kg</p>
                                    <p class="mb-1">Codice Prodotto: <?= $prodotto->getCode() ?></p>
                                <?php endif ?>

                                <?php if ($prodotto->section == 'kennel') : ?>
                                    <h5><?= $prodotto->getName() ?></h5>

                                    <p class="mb-1">Cuccia</p>

                                    <p class="mb-1">Prezzo: <?= $prodotto->getPrice() ?>€</p>
                                    <p class="mb-1">Peso: <?= $prodotto->getPeso() ?>Kg</p>
                                    <p class="mb-1">Misure: <?= $prodotto->getMisure() ?></p>
                                    <p class="mb-1">Codice Prodotto: <?= $prodotto->getCode() ?></p>
                                <?php endif ?>

                            </div>

                        </div>

                    </div>

                <?php endif ?>
                <?php if ($prodotto->category->pet == 'Cane') : ?>

                    <div class="col-4 h-100 mb-5">

                        <div class="card shadow">

                            <div>
                                <img src="<?= $prodotto->img?>" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">

                                <?php if ($prodotto->section == 'toy') : ?>
                                    <h5><?= $prodotto->getName() ?></h5>

                                    <p class="mb-1">Gioco</p>

                                    <p class="mb-1">Prezzo: <?= $prodotto->price ?>€</p>
                                    <p class="mb-1">Materiale: <?= $prodotto->getMateriale() ?></p>
                                    <p class="mb-1">Codice Prodotto: <?= $prodotto->getCode() ?></p>

                                <?php endif ?>

                                <?php if ($prodotto->section == 'food') : ?>
                                    <h5><?= $prodotto->getName() ?></h5>

                                    <p class="mb-1">Cibo</p>

                                    <p class="mb-1">Prezzo: <?= $prodotto->getPrice() ?>€</p>
                                    <p class="mb-1">Peso: <?= $prodotto->getPeso() ?>Kg</p>
                                    <p class="mb-1">Codice Prodotto: <?= $prodotto->getCode() ?></p>
                                <?php endif ?>

                                <?php if ($prodotto->section == 'kennel') : ?>
                                    <h5><?= $prodotto->getName() ?></h5>

                                    <p class="mb-1">Cuccia</p>

                                    <p class="mb-1">Prezzo: <?= $prodotto->getPrice() ?>€</p>
                                    <p class="mb-1">Peso: <?= $prodotto->getPeso() ?>Kg</p>
                                    <p class="mb-1">Misure: <?= $prodotto->getMisure() ?></p>
                                    <p class="mb-1">Codice Prodotto: <?= $prodotto->getCode() ?></p>
                                <?php endif ?>

                            </div>

                        </div>

                    </div>

                <?php endif ?>

            <?php endforeach; ?>
        </div>
    </div>
</main>
