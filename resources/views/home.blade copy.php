<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hello <?php //echo $name; ?></h1> -->

     <!-- <h1>Hello  {{$name}} </h1> -->

     <h1>
       @if($name === "Musa") 
       Hello Admin
       @else
       Hello  {{$name}}
       @endif
    </h1>


</body>
</html>