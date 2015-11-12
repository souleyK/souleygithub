<h1> <?php echo "$titre (client n° $num )";?> </h1>
<p> Liste des réservations à afficher ici </p>

    <h3><?php foreach ($reserve as $reserv_item):?>
        <h3><?php echo $reserv_item['idReserv']; ?></h3>
    <div class="main">
            <?php echo $reserv_item['idClient']; ?>
            <?php echo $reserv_item['Date_Arrivee']; ?>
            <?php echo $reserv_item['Date_Depart']; ?>
            <?php echo $reserv_item['Nb_Personnes']; ?>
            <?php echo $reserv_item['Menage']; ?>
            <?php echo $reserv_item['EtatReservation']; ?>
    </div>
<?php endforeach; ?>