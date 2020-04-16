function deleteAll(){
    fetch('https://jsonplaceholder.typicode.com/posts/1', {
    method: 'DELETE'
})
    document.getElementById('data').innerHTML = "<h3>Objeto borrado</h3>"
}