const div = document.getElementById("bougee");


function move(direction) {

    if (direction == "left") {
      div.style.left = "41px";
    } else {
      div.style.left = "50%";
    }
}

// move();



const formulaire = document.getElementById("inscription-form");
const inputs = formulaire.querySelectorAll("input");

inputs.forEach((input) => {
  input.addEventListener("click", function () {
    console.log("Clic sur l'input : " + input.name);

    div.style.left = "41px";

    formulaire2.classList.remove("text-white");
    formulaire.classList.add("text-white");
  });
});



const formulaire2 = document.getElementById("login-form");
const inputs2 = formulaire2.querySelectorAll("input");

inputs2.forEach((input) => {
  input.addEventListener("click", function () {

    div.style.left = "50%";

    formulaire2.classList.add("text-white");
    formulaire.classList.remove("text-white");
  });
});
