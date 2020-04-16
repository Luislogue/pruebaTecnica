<?php
    require_once '../assets/templates/header.php'
?>
<body>
    <div class="container mt-5">

        <header>
            <h1>CREATE</h1>
        </header>
        <main>
        
        <form>
            <h2>Por favor introduzca los datos deseados</h2><br>
            <label class="label"><b>&nbsp;userId:&nbsp; </b></label>
            <input type="number" class="form-control" id="new_userId" name="new_userId" value="">
            <br>
            <label class="label"><b>&nbsp;title:&nbsp;</b></label>
            <input type="text" class="form-control" id="new_title" name="new_title" value="">
            <br>
            <label class="label"><b>&nbsp;body:&nbsp;</b></label>
            <input type="text" class="form-control" id="new_body" name="new_body" value="">

            <button id="add_btn2" class="btn-primary mt-5" onclick = "create(event)">Submit</button>
        </form>
        <br>
            <div id="data"></div>
        <br>
            <div id="response"></div>

        </main>
        <button class="btn btn-info"><a href="../view/index.php">Volver</a></button>
    </div>
</body>
<script>
    function create(e) {
	  e.preventDefault() 
      var userid = document.getElementById("new_userId").value;
      var new_title = document.getElementById("new_title").value;
      var new_body = document.getElementById("new_body").value;

      document.getElementById('data').innerHTML = "<b>userId</b>: " + userid  + "<br> <b>Title: </b>" + new_title + "<br> <b>Body: </b>" + new_body

      fetch('https://jsonplaceholder.typicode.com/posts', {
          method: 'POST',
          body: JSON.stringify({
            title: new_title,
            body: new_body,
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
</html>