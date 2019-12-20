<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
            <td>name user </td>
            <td>code</td>
<table border='1'>
<tr>
        <td>code elector</td>
        <td>name</td>
        <td>last name</td>
        <td>age</td>
        </tr>
        @foreach($main as $prof)
        <tr>
            <th>{{$prof->dni}}</th>
            <th>{{$prof->name}}</th>
            <th>{{$prof->last_name}}</th>
            <th>{{$prof->age}}</th>
            
            
        </tr>
        @endforeach
</table> 
</body>
</html>
