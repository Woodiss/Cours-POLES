// console.log("tt");
function calcultTotal() {
    const totals = document.querySelectorAll(".total");

    let totalPrice = 0;
    totals.forEach(function (element) {
      totalPrice += parseInt(element.innerHTML);
    });

    const totalP = document.getElementById("totalprice");
    totalP.innerHTML = totalPrice + " €";
}


function minus(id, price) {
  const total = document.getElementById(id);
  const input = document.querySelector('[name="' + id + '"]');

  let quantity = parseInt(input.value) - 1;
  total.innerHTML = quantity * price + " €";

  calcultTotal();
}



function plus(id, price) {
  const total = document.getElementById(id);
  const input = document.querySelector('[name="' + id + '"]');


  let quantity = parseInt(input.value) + 1;
  total.innerHTML = quantity * price + " €";

  calcultTotal();
}