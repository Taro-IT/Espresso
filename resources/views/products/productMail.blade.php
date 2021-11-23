<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Casa Loohl | Tu link de producto</title>
</head>
<body>
<p>¡Hola! muchas gracias por tu donación, te enviamos el link de tu producto</p>
<ul>
    <li>Nombre: {{ $product->title }}</li>
    <li>Descripción: {{ $product->description }}</li>
    <li>Precio: $ {{ $product->price }}</li>
    <li>Link: <a href="{{route('download',$product->id)}}">Link de descarga</a></li>
</ul>
<p>Si no puedes darle click al link, puedes usar la siguiente URL: {{route('download', $product->id)}} </p>

</body>
</html>
