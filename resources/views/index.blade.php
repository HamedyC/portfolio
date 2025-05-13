<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>
    </script>
    <title>Gestion</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header{ 
            background-color: #333;
            color: white;
            padding: 40px;
            text-align: center;
        }
        .container{
            padding: 20px;
            max-width: 1000px;
            margin: auto;
        }
        .profile{ 
            display:flex;
            align-items: center;
            gap: 20px;
        }
        .profile img { 
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .buttons a{ 
            display: inline-block;
            margin: 10px 10px 0 0;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur mon Portfolio</h1>
    </header>
    <div class="container"> 
        <div class="profile">
            <img src="{{asset('image/Gestion.jpg')}}" alt="faya">
            <div> 
                <h2>Hamedy Camara</h2>
                <p>Développeur web et mobilé</p>
                <p>Passionné par le code et la création de site web et des applications mobilé simples et efficaces.</p>
                <div class="buttons">
                    <a href="#">A propos de moi</a>
                    <a href="#">Mes projet</a>      
                    <a href="#">Contact</a>                          
                </div>
            </div>
        </div>
    </div>


    <footer>
        <p>&copy; 2025 Portfolio. Tous droits réservés.</p>
        <p><a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
    </footer>
    
</body>
</html>