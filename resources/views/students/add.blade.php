<!DOCTYPE html>
<html>
<head>
    <title>Ajouter étudiant</title>
</head>
<body>

<h1>Ajouter un étudiant</h1>

<a href="/students">⬅ Retour à la liste</a>

<br><br>

<!-- erreurs -->
@if($errors->any())
    <ul style="color:red;">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if(session('success'))
    <div style="color:green;">
        {{ session('success') }}
    </div>
@endif

 
<form method="POST" action="/students/add">
    @csrf

    <label>Nom :</label><br>
    <input type="text" name="nom" value="{{ old('nom') }}">
    <br><br>

    <button type="submit">Ajouter</button>
</form>

</body>
</html>