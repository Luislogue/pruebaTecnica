<?php
    require_once '../assets/templates/header.php'
?>
<body onload="deleteAll()">
    <div class="container mt-5">
        <header>
            <h1>DELETE</h1>
        </header>
        <main class="m-5">
            <div id=data></div>
        </main>
        <button class="btn btn-info mt-5 mb-5"><a href="../view/index.php">Volver</a></button>
    </div>
</body>
<script src="../assets/js/delete.js"></script>

</html>