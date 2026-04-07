<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1>les liste des etudiant</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <td>id</td><td>nom</td><td>Action</td>
            </tr>

        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$student}}</td>
                <td>
                    <button>modifier</button>
                    <a href="{{"/students/delete/{$loop->index}"}}">supprimer</a>
                </td>

            </tr>
            
            @endforeach
        </tbody>
    </table>



    <a href="{{ url('students/add') }}">ajouter etudiant</a>



</body>

</html>
