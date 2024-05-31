
<!doctype html>
<html class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author"
    content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column h-100">
        <x-navbar/>

{{$slot}}

<div class="row align-items-md-stretch">
    <div class="col-md-4">
        <div class="h-100 p-5 text-bg-dark rounded-3">
            <h2>Amministra i Libri</h2>
            
            <button class="btn btn-outline-light"
            type="button">Vedi Libri</button>
        </div>
    </div>
    <div class="col-md-4">
        <div
        class="h-100 p-5 bg-body-tertiary border rounded-3">
        <h2>Gestione Categorie</h2>
        
        <button class="btn btn-outline-secondary"
        type="button">Vedi categorie</button>
    </div>
</div>
<div class="col-md-4">
    <div
    class="h-100 p-5  border rounded-3">
    <h2>Gestione Autori</h2>
    
    <button class="btn btn-outline-secondary"
    type="button">Vedi categorie</button>
</div>
</div>
</div>

</main>
<footer
class="footer py-5 mt-auto text-center text-body-secondary bg-body-tertiary">
<p>Copyright</p>
</footer>
</body>

</html>
