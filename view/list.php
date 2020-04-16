<?php
    require_once '../assets/templates/header.php'
?>
<body onload="listAll()">
    <div class="container mt-5">
        <header>
            <h1>LIST</h1>
        </header>
        <main>
            <div id=data></div>
        </main>
        <button class="btn btn-info mt-5 mb-5"><a href="../view/index.php">Volver</a></button>
    </div>
</body>
<script src="../assets/js/list.js"></script>
</html>