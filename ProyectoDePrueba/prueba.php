<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <p>Hola me llamo carlos y si clickas en este texto te saldrá otro texto</p>
    <script>
        const p = document.querySelector('p');
        p.addEventListener('click', () => {
            alert('Has hecho click en el párrafo');
        });
    </script>

    <p>Esto es otro párrafo, y si clickas aquí te saldrá otro mensaje</p>
    <script>
        const p2 = document.querySelectorAll('p')[1];  // Usamos querySelectorAll para acceder al segundo párrafo
        p2.addEventListener('click', () => {
            alert('Has hecho click en el segundo párrafo');
        });
    </script>

</body>
</html>
