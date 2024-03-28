const marque = document.getElementById("voitures");

marque.addEventListener("change", function () {

  let xhttp = new XMLHttpRequest();
  let valeur = this.value;
  let params = "voitures=" + valeur;

  xhttp.open("POST", "exo_action.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onreadystatechange = function () {
    if (xhttp.status == 200 && xhttp.readyState == 4) {
      console.log(xhttp.responseText);

      document.getElementById("model").innerHTML = xhttp.responseText;
    }
  };

  xhttp.send(params);
  console.log(params);
});
