const case1 = document.querySelector(".case1");
const case2 = document.querySelector(".case2");
const case3 = document.querySelector(".case3");
const case4 = document.querySelector(".case4");
const case5 = document.querySelector(".case5");
const case6 = document.querySelector(".case6");
const case7 = document.querySelector(".case7");
const case8 = document.querySelector(".case8");
const case9 = document.querySelector(".case9");

let tour = "croix";
let scroreJ1 = 0
let scroreJ2 = 0

const rond = "<i class='fa-solid fa-o'></i>";
const croix = "<i class='fa-solid fa-x'></i>";

// alert(rond)

function click(caseNum) {
  if (caseNum.innerHTML === "") {
    if (tour === "rond") {
      caseNum.innerHTML = rond;
      caseNum.classList.add("rond");
      checkVitory();
    } else if (tour === "croix"){
      caseNum.innerHTML = croix;
      caseNum.classList.add("croix");
      checkVitory();
    } else {
        alert('partie terminer relance pour rejouer')
    }
  } else {
    alert("casse déjâ occupé !");
  }
}

function scrore(agr1) {
    tour = ""
    if (agr1 === "croix") {
        scroreJ1++;
    } else {
        scroreJ2++;
    }

    document.querySelector('.score1').textContent = scroreJ1
    document.querySelector('.score2').textContent = scroreJ2
}

function resetParti(){
  allCasse = document.querySelectorAll(".case");
  tour = "croix";

  allCasse.forEach(function (element) {
    element.innerHTML = "";
    element.style.color = "";
    element.classList.remove("croix");
    element.classList.remove("rond");
  });
}

function resetScore(){
  resetParti();

  document.querySelector(".score1").textContent = "0";
  document.querySelector(".score2").textContent = "0";
  scroreJ1 = 0;
  scroreJ2 = 0;
};

case1.addEventListener("click", function () {
  click(case1);
});

case2.addEventListener("click", function () {
  click(case2);
});

case3.addEventListener("click", function () {
  click(case3);
});

case4.addEventListener("click", function () {
  click(case4);
});

case5.addEventListener("click", function () {
  click(case5);
});

case6.addEventListener("click", function () {
  click(case6);
});

case7.addEventListener("click", function () {
  click(case7);
});

case8.addEventListener("click", function () {
  click(case8);
});

case9.addEventListener("click", function () {
  click(case9);
});

function checkVitory() {
    // ligne 1
    if ( (case1.classList.contains(tour)) && (case2.classList.contains(tour)) && (case3.classList.contains(tour)) ) {
        case1.style.color = "green"
        case2.style.color = "green"
        case3.style.color = "green"
        scrore(tour)

    // ligne 2
    } else if ( (case4.classList.contains(tour)) && (case5.classList.contains(tour)) && (case6.classList.contains(tour)) ) {
        case4.style.color = "green";
        case5.style.color = "green";
        case6.style.color = "green";
        scrore(tour);

    // ligne 3
    } else if ( (case7.classList.contains(tour)) && (case8.classList.contains(tour)) && (case9.classList.contains(tour))) {
        case7.style.color = "green";
        case8.style.color = "green";
        case9.style.color = "green";
        scrore(tour);
    
    // colonne 1
    } else if ( (case1.classList.contains(tour)) && (case4.classList.contains(tour)) && (case7.classList.contains(tour)) ) {
        case1.style.color = "green";
        case4.style.color = "green";
        case7.style.color = "green";
        scrore(tour);
    
    // colonne 2
    } else if ( (case2.classList.contains(tour)) && (case5.classList.contains(tour)) && (case8.classList.contains(tour)) ) {
        case2.style.color = "green";
        case5.style.color = "green";
        case8.style.color = "green";
        scrore(tour);
    
    // colonne 3
    } else if ( (case3.classList.contains(tour)) && (case6.classList.contains(tour)) && (case9.classList.contains(tour)) ) {
        case3.style.color = "green";
        case6.style.color = "green";
        case9.style.color = "green";
        scrore(tour);
    
    // diagonal 1
    } else if ( (case1.classList.contains(tour)) && (case5.classList.contains(tour)) && (case9.classList.contains(tour)) ) {
        case1.style.color = "green";
        case5.style.color = "green";
        case9.style.color = "green";
        scrore(tour);
    
    // diagonal 2
    } else if ( (case3.classList.contains(tour)) && (case5.classList.contains(tour)) && (case7.classList.contains(tour)) ) {
        case3.style.color = "green";
        case5.style.color = "green";
        case7.style.color = "green";
        scrore(tour);

    } else {
        if (tour === "croix") {
          tour = "rond";
        } else {
          tour = "croix";
        }
    }




}
