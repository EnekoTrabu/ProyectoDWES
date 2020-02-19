<?php
if (isset($_SESSION['idioma'])) {
    $lang = $_SESSION["idioma"];
    include "idiomas/" . $lang . ".php";
} else {
    include "idiomas/cast.php";
}
?>
</div>
</div>
</section>
</main>
<footer class="page-footer font-small bg-dark pt-4 text-light">
    <div class="footer-copyright text-center py-3">
        <p><?php echo $idioma['proyecto'] ?></p>
        &copy;
        <?php
            setlocale(LC_TIME, 'Spanish');
            $fecha = strftime("%A, %d  %B %Y");
            echo utf8_encode($fecha);
        ?>
        <br>
        <?php echo $idioma['realizado'] ?>
    </div>

</footer>
</body>

</html>