function getRequeteHttp() {

    var requeteHttp;

    // vérif si on utilise Mozilla
    if (window.XMLHttpRequest) {
        requeteHttp = new XMLHttpRequest();

        if (requeteHttp.overrideMimeType) {
            requeteHttp.overrideMimeType("text/xml");
        }
    } else {
        //vérif si ont utilise internet explorer
        if (window.ActiveXObject) {
            try {
                requeteHttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                requeteHttp = null;
            }
        }
    }
    return requeteHttp;
}
// ---------------------------- CREATION DE L OBJET --------------------------------





function envoyerRechecheClient() {
    var requeteHttp = getRequeteHttp();
    console.log("tt");

    if (requeteHttp == null) {
        alert("impossible d'utiliser ajax sur ce navigateur")
    } else {

        var idclient = document.getElementById("select-client").value;

        requeteHttp.open("POST", "script.php", true); // false = synchrone // true = asynchrone
        requeteHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        requeteHttp.onreadystatechange = function () { recevoirReponseClient(requeteHttp) }

        requeteHttp.send("mode=1&id=" + idclient);
    }
}


function recevoirReponseClient(requeteHttp) {
    if (requeteHttp.readyState == 4) {
        // si la requete s'est correctement déroulée
        if (requeteHttp.status == 200) {


            var obj = JSON.parse(requeteHttp.responseText);
            var client = obj[0]

            document.querySelector(".info1").textContent = `${client['civilite']} ${client['nom']} ${client['prenom']}`
            document.querySelector(".info2").textContent = `${client['adresse']}`
            document.querySelector(".info3").textContent = `${client['code_postal']} ${client['ville']}`


        } else {
            alert("La requête ne s'est pas correctement éxécutée.");
        }
    }
}


// ---------------------------------------------------------------------- PRESTA
function envoyercheckPresta() {
    var requeteHttp = getRequeteHttp();

    if (requeteHttp == null) {
        alert("impossible d'utiliser ajax sur ce navigateur")
    } else {


        requeteHttp.open("POST", "script.php", true); // false = synchrone // true = asynchrone
        requeteHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        requeteHttp.onreadystatechange = function () { recevoircheckPresta(requeteHttp) }

        requeteHttp.send("mode=2");
    }
}


function recevoircheckPresta(requeteHttp) {
    if (requeteHttp.readyState == 4) {
        // si la requete s'est correctement déroulée
        if (requeteHttp.status == 200) {


            var obj = JSON.parse(requeteHttp.responseText);


            const ttbody = document.querySelector("#ttbody")
            console.log(presta);
            var chaine = "<option value='vide'>vide</option>";
            for (let i = 0; i < obj.length; i++) {

                var presta = obj[i];
                chaine += `<option value="${presta['id']}">${presta['prestation']}</option>`
            }

            ttbody.innerHTML += "<tr><td></td> <td><select>"+chaine+"</select></td> <td></td> <td></td> <td></td></tr>"
            console.log(ttbody);
        } else {
            alert("La requête ne s'est pas correctement éxécutée.");
        }
    }
}