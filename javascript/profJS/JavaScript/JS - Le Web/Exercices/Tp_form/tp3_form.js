const valider = document.getElementById("valider");
// let nom
// let prenom
// let age = ""
let checkedValue = "nul"
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
const mdpRegex = /\d/
let erreur = 0
// let mdp1
// let mdp2
// let commlet 
// let newletter
// let pays
// let paysInput
// let radioInputs




valider.addEventListener("click", function(e) {
    const text = document.querySelectorAll(".text")
    for (const texte of text) {
        texte.innerHTML = ""
    }
    e.preventDefault()
    erreur = 0
    
    const nom = document.getElementById("nom").value;
    const prenom = document.getElementById("prenom").value;
    const radioInputs = document.querySelectorAll('input[type="radio"][name="genre"]');
    const age = document.getElementById("age").value;
    const email = document.getElementById("email").value;
    const mdp1 = document.getElementById("mdp1").value;
    const mdp2 = document.getElementById("mdp2").value;
    const pays = document.getElementById("pays").value;
    const newletter = document.getElementById("newletter").checked;
    const comm = document.getElementById('comms').value

    if (nom.length <= 2) {
        document.querySelector(".nom").innerHTML = "<p style='color: red'>Nom incorrecte</p>"
        erreur++
        console.log(erreur + " nom")
    } 

    if (prenom.length <= 2) {
        document.querySelector(".prenom").innerHTML = "<p style='color: red'>Prénom incorrecte</p>"
        erreur++
        console.log(erreur + " prenom")
    }

    for (const input of radioInputs) {
        if (input.checked) {
            checkedValue = input.value;
            console.log(checkedValue);
            break; 
        } 
    }
    if (checkedValue === "nul") {
        document.querySelector(".genree").innerHTML = "<p style='color: red'>Veuillez sélectionner un genre</p>"
        erreur++
        console.log(erreur + " genre")
    }
    
    if (age === "") {
        document.querySelector(".age").innerHTML = "<p style='color: red'>Age incorrecte</p>"
        erreur++ 
        console.log(erreur + " age")
    }
    
    if (emailRegex.test(email) === false) {
        document.querySelector(".email").innerHTML = "<p style='color: red'>Mail incorrecte</p>"
        erreur++   
        console.log(erreur + " email")
    }
    
    if (mdp1.length < 3) {
        erreur++
        console.log(erreur + " mdp1")
        document.querySelector(".mdp1").innerHTML = "<p style='color: red'>Mot de passe trop faible</p>"
    } else if (mdp1.length < 6) {
        document.querySelector(".mdp1").innerHTML = "<p style='color: orange'>Mot de passe Moyen</p>"
    } else if ((mdp1.length > 6) && (mdpRegex.test(mdp1) === true)) {
        document.querySelector(".mdp1").innerHTML = "<p style='color: green'>Mot de passe fort</p>"
    } 
    
    if ((mdp1 !== mdp2) || (mdp2 === "")){
        erreur++
        console.log(erreur + " mdp2")
        document.querySelector(".mdp2").innerHTML = "<p style='color: red'>Les mots de passe ne sont pas identique</p>"
    }
    
    if (pays === "default") {
      erreur++;
      console.log(erreur + " pays");
      document.querySelector(".pays").innerHTML = "<p style='color: red'>Vous n'avez pas sélectionner de pays</p>";
    }

    if (erreur > 0) {
        document.querySelector(".verif").innerHTML = `<p style='color: darkred'>Vous avez encore ${erreur} erreur(s) dans votre formulaire, merci de bien vérifié avant de valider</p>`
    }
})