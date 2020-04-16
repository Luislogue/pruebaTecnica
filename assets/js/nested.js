function nestAll(){
    fetch('https://jsonplaceholder.typicode.com/posts/1/comments')
    .then(response => response.json())
    .then(json => document.getElementById('data').innerHTML = JSON.stringify(json))
}