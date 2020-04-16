<?php
    require_once '../assets/templates/header.php'
?>
<body>
    <div class="container">
        <header>
            <h1>Prueba Tecnica</h1>
        </header>
        <main>
            <div>
                <p class="text-justify">Hola, bienvenidos a mi prueba tecnica, que desean hacer?</p>
            </div>
            <form method="POST" action="../controller/indexController.php" name="form">
                <label>Metodos API
                    <select name="metodo" id="metodo">
                        <option value="get">get</option>
                        <option value="list">list</option>
                        <option value="create">create</option>
                        <option value="update">update</option>
                        <option value="delete">delete</option>
                        <option value="filter">filter</option>
                        <option value="nested">nested</option>
                    </select>
                </label>
                <button type="submit" name="button" class="btn-primary">Ir!</button>
            </form>   
        </main>
    </div>
</body>
</html>