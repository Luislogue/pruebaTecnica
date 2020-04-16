<?php
    require_once '../assets/templates/header.php'
?>
<body>
    <div class="container mt-5">
    <header>
        <h1>UPDATE</h1>
    </header>
    <form>
            <h2>Por favor introduzca los datos a actualizar: </h2><br>
            <label class="label"><b>&nbsp;userId:&nbsp; </b></label>
            <input type="number" class="form-control" id="updated_userId" name="updated_userId" value="">
            <br>
            <label class="label"><b>&nbsp;title:&nbsp;</b></label>
            <input type="text" class="form-control" id="updated_title" name="updated_title" value="">
            <br>
            <label class="label"><b>&nbsp;body:&nbsp;</b></label>
            <input type="text" class="form-control" id="updated_body" name="updated_body" value="">

            <button id="add_btn2" class="btn btn-primary mt-5" onclick = "create(event)">Submit</button>
        </form>
        <br>
            <div id="data"></div>
        <br>
            <div id="response"></div>

        </main>
        <button class="btn btn-info mt-5 mb-5"><a href="../view/index.php">Volver</a></button>
    </div>
</body>
<script>
    function create(e) {
	  e.preventDefault() 
      var userid = document.getElementById("updated_userId").value;
      var updated_title = document.getElementById("updated_title").value;
      var updated_body = document.getElementById("updated_body").value;

      document.getElementById('data').innerHTML = "<b>userId</b>: " + userid  + "<br> <b>Title: </b>" + updated_title + "<br> <b>Body: </b>" + updated_body

      fetch('https://jsonplaceholder.typicode.com/posts/1', {
          method: 'PUT',
          body: JSON.stringify({
            title: updated_title,
            body: updated_body,
            userId: userid
          }),
          headers: {
            "Content-type": "application/json; charset=UTF-8"
          }
        })
        .then(response => response.json())
        .then(json => {
          console.log('response: ' + JSON.stringify(json));
          document.getElementById('response').innerHTML = ('response: ' + JSON.stringify(json));

        })
    }
  </script>
</body>
</html>