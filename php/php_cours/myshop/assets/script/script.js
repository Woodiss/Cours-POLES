function checkInput(input) {
  const inputCheck = document.getElementById(input);

  inputCheck.addEventListener("blur", function () {
    if (inputCheck.value == "") {
      inputCheck.style.borderColor = "red";
      //   inputCheck.classList.add("sale");
    } else {
      inputCheck.style.borderColor = "";
    }
  });
}

checkInput("title");
checkInput("description");
checkInput("price");
checkInput("city");
checkInput("postal_code");
checkInput("image");
