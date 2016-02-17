<div class="page-header text-center">
    <h1>Superglobales</h1>
    <ul class="nav nav-pills">
        <li <?php if ($active == "session") {?> class="active" <?php } ?>>
            <a href="index.php">$_SESSION</a>
        </li>
        <li <?php if ($active == "request") {?> class="active" <?php } ?>>
            <a href="request.php?parametro=valor&otroParametro=otroValor">$_REQUEST</a>
        </li>
        <li <?php if ($active == "cookie") {?> class="active" <?php } ?>>
            <a href="cookie.php">$_COOKIE</a></li>
        <li <?php if ($active == "env") {?> class="active" <?php } ?>>
            <a href="env.php">$_ENV</a>
        </li>
    </ul>
</div>
