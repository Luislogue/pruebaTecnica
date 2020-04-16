function getAll(){
    fetch('https://jsonplaceholder.typicode.com/posts/1')
    .then(response => response.json())
    .then(json => document.getElementById('data').innerHTML = "<b>userId</b>: " + json.userId + "<br> <b>Id</b>: " + json.id + "<br> <b>Title: </b>" + json.title + "<br> <b>Body: </b>" + json.body)
    
}