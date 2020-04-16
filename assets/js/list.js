function listAll(){
    fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => response.json())
    .then(json => document.getElementById('data').innerHTML = JSON.stringify(json))
}