<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('insertar.datos')}}" method="post" enctype="multipart/form-data">

        <h1>ingreso de datos de cursos</h1>
<table>
    <tr>
        <td>numero de Curso:</td>
        <td><input type="integer" name="curso"></td>
    </tr>
    
    <tr>
        <td> ingrese el dia :</td>
        <td><input type="text" name="curso"></td>
    </tr>

   
</table>


<button type="submit"> enviar datos

</button>
    </form>
</body>
</html>