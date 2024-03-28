## créer une function qui ce lance via un lien <a></a>
<a href="javascript:envoyerRequete()">Clic ici</a>
va lancer la function 
function envoyerRequete(){
    alert("Hello world")
}


## créer un objet pour la connexion au serveur
function getRequeteHttp() {

  var requeteHttp;

  if (window.XMLHttpRequest) {
    // vérif si on utilise Mozilla
    requeteHttp = new XMLHttpRequest();

    if (requeteHttp.overrideMimeType) {
      requeteHttp.overrideMimeType("text/xml");
    }
  } else {
    if (window.ActiveXObject) {
      // si c'est internet explorer
      try {
        requeteHttp = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {
        requeteHttp = null;
      }
    }
  }
  return requeteHttp;

}


## function pour gérer et afficher une requete
function envoyerRequete() {
    var requeteHttp = getRequeteHttp();

    if (requeteHttp == null) {
        alert("impossible d'utilsier ajax sur ce navigateur")
    } else {
        // prépare la requete
        requeteHttp.open("GET", "script3.php", false);
        // envoyer le requete
        requeteHttp.send(null);

        // le résultat a été transmis
        if (requeteHttp.readyState == 4) {
            // si la requete s'est correctement déroulée
            if (requeteHttp.status == 200) {
                // correspond au contenue de script3.php
                // alert(requeteHttp.responseText);
                document.write(requeteHttp.responseText);
            } else {
                alert("La requête ne s'est pas correctement éxécutée.");
            }
        }
    }
}