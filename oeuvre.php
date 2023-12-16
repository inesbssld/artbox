<?php include('oeuvres.php')?>
<?php include('header.php')?>
<main>
    <?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach ($oeuvres as $oeuvre) {
        if ($oeuvre['id'] == $id) {
            echo '<article id="detail-oeuvre">';
            echo '<div id="img-oeuvre">';
            echo '<img src="' . $oeuvre['image'] . '" alt="' . $oeuvre['title'] . '">';
            echo '</div>';
            echo '<div id="contenu-oeuvre">';
            echo '<h1>' . $oeuvre['title'] . '</h1>';
            echo '<p class="description">' . $oeuvre['description'] . '</p>';
            echo '<p class="description-complete">' . $oeuvre['description-complete'] . '</p>';
            echo '</div>';
            echo '</article>';
        }
    }
}
?>
</main>
<?php include('footer.php')?>