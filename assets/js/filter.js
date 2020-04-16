function filterAll(){
    fetch('https://jsonplaceholder.typicode.com/posts?userId=1')
    .then(response => response.json())
    .then(json => document.getElementById('data').innerHTML = JSON.stringify(json))
    
}