<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX avec SELECT</title>
    <style>
        form{ width: 50%; margin: 0 auto, padding: 20px }
        select{ width: 100%; height: 30px; border: 1px solid #333; bargin-botton: 20px; }
    </style>
</head>
<body>
    <div style="width: 1000px; margin: 0 auto; padding: 20px;">
        <!-- form>label+br+select#pays>option*4^br+label+select#ville>option -->
        <form>
            <label>Pays</label><br>
            <select id="pays">
                <option value=""></option>
                <option>France</option>
                <option>Angleterre</option>
                <option>Espagne</option>
            </select><br><br>

            <label for="">Ville</label><br>
            <select id="ville">
                <option>Veuillez choisir un pays...</option>
            </select>
        </form>
    </div>

    <script>
        // évènement
        document.getElementById('pays').addEventListener('change', function() {

            // fichier cible
            var fichier = 'ajax.php';
    
            // instanciation de l'obje ajax
            var xhttp = new XMLHttpRequest();

            // on récupère la valeur du champs pays
            var valeur = this.value;
            // var valeur = document.getElementById('pays').value;
            console.log(valeur);
            
            // préparation des paramètres pour POST
            var params = 'pays='+valeur;
            console.log(params);

            // préparation de la requête ajx
            xhttp.open("POST", fichier, true); 
            // dans open() 3 arguments :
            // - la méthode POST ou GET
            // - le fichier cible
            // - optionnel asynchrone ou pas (true/false) c'est un true par défaut

            // en méthode POST, la ligne suivante est obligatoire et doit se trouver après la ligne .open()
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhttp.onreadystatechange = function() {
                if(xhttp.status == 200 && xhttp.readyState == 4) {
                    console.log(xhttp.responseText);

                    document.getElementById("ville").innerHTML = xhttp.responseText;
                }
            }

            // on envoie la requête
            xhttp.send(params); // on envoie la requête ajax. Les paramètres de POST se placent dans la méthode .send(parameters)

        });

    </script>
    
</body>
</html>