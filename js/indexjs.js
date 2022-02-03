function changeColor() {
  //1. get selectbox
  let select1 = document.querySelector("#select-box1");
  let select2 = document.querySelector("#select-box2");
  let select3 = document.querySelector("#select-box3");
  let select4 = document.querySelector("#select-box4");

  //2. get selected
  let selectedOption1 = select1.options[select1.selectedIndex].innerHTML;
  let selectedOption2 = select2.options[select2.selectedIndex].innerHTML;
  let selectedOption3 = select3.options[select3.selectedIndex].innerHTML;
  let selectedOption4 = select4.options[select4.selectedIndex].innerHTML;

  // shoe sections:
  let sole = document.querySelector("#sole");
  let logo = document.querySelector("#logo");
  let outer = document.querySelector("#outer");
  let exterior = document.querySelector("#exterior");

  //3. change colour

  // select box 1
  if (selectedOption1 == "black") {
    sole.style.filter = "invert()";
  } else if (selectedOption1 == "white") {
    sole.style.filter = "";
  } else if (selectedOption1 == "yellow") {
    sole.style.filter = "sepia(100%)";
  } else {
  }

  // select box 2
  if (selectedOption2 == "black") {
    logo.style.filter = "invert()";
  } else if (selectedOption2 == "white") {
    logo.style.filter = "";
  } else if (selectedOption2 == "yellow") {
    logo.style.filter = "sepia(100%)";
  } else {
  }

  // select box 3
  if (selectedOption3 == "green") {
    outer.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption3 == "red") {
    outer.style.filter = "";
  } else if (selectedOption3 == "turquoise") {
    outer.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption3 == "purple") {
    outer.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption3 == "blue") {
    outer.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption3 == "brown") {
    outer.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption3 == "light grey") {
    outer.style.filter = "contrast(0%)";
  } else {
  }

  //select box 4
  if (selectedOption4 == "green") {
    exterior.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption4 == "red") {
    exterior.style.filter = "";
  } else if (selectedOption4 == "turquoise") {
    exterior.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption4 == "purple") {
    exterior.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption4 == "blue") {
    exterior.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption4 == "brown") {
    exterior.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption4 == "light grey") {
    exterior.style.filter = "contrast(0%)";
  } else {
  }
}

function changeColor1() {
  //1. get selectbox
  let select1 = document.querySelector("#select-box1");
  let select2 = document.querySelector("#select-box2");
  let select3 = document.querySelector("#select-box3");
  let select4 = document.querySelector("#select-box4");

  //2. get selected
  let selectedOption1 = select1.options[select1.selectedIndex].innerHTML;
  let selectedOption2 = select2.options[select2.selectedIndex].innerHTML;
  let selectedOption3 = select3.options[select3.selectedIndex].innerHTML;
  let selectedOption4 = select4.options[select4.selectedIndex].innerHTML;

  // shoe sections:
  let sole = document.querySelector("#sssole");
  let logo = document.querySelector("#sslogo");
  let lace = document.querySelector("#sslace");
  let middle = document.querySelector("#ssmiddle");

  //3. change colour

  // select box 1
  if (selectedOption1 == "black") {
    sole.style.filter = "invert()";
  } else if (selectedOption1 == "white") {
    sole.style.filter = "";
  } else if (selectedOption1 == "yellow") {
    sole.style.filter = "sepia(100%)";
  } else {
  }

  // select box 2
  if (selectedOption2 == "green") {
    logo.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption2 == "red") {
    logo.style.filter = "";
  } else if (selectedOption2 == "turquoise") {
    logo.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption2 == "purple") {
    logo.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption2 == "blue") {
    logo.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption2 == "brown") {
    logo.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption2 == "light grey") {
    logo.style.filter = "contrast(0%)";
  } else {
  }

  // select box 3
  if (selectedOption3 == "black") {
    lace.style.filter = "invert()";
  } else if (selectedOption3 == "white") {
    lace.style.filter = "";
  } else if (selectedOption3 == "yellow") {
    lace.style.filter = "sepia(100%)";
  } else {
  }

  //select box 4
  if (selectedOption4 == "black") {
    middle.style.filter = "invert()";
  } else if (selectedOption4 == "white") {
    middle.style.filter = "";
  } else if (selectedOption4 == "yellow") {
    middle.style.filter = "sepia(100%)";
  } else {
  }
}

function changeShade() {
  //1. get selectbox

  let select1 = document.querySelector("#select-box1");
  let select2 = document.querySelector("#select-box2");
  let select3 = document.querySelector("#select-box3");
  let select4 = document.querySelector("#select-box4");

  //2. get selected

  let selectedOption1 = select1.options[select1.selectedIndex].innerHTML;
  let selectedOption2 = select2.options[select2.selectedIndex].innerHTML;
  let selectedOption3 = select3.options[select3.selectedIndex].innerHTML;
  let selectedOption4 = select4.options[select4.selectedIndex].innerHTML;

  // shoe sections:
  let button = document.querySelector("#button");
  let pad = document.querySelector("#pad");
  let middle = document.querySelector("#middle");
  let sides = document.querySelector("#sides");

  //3. change colour

  // select box 1
  if (selectedOption1 == "black") {
    button.style.filter = "invert()";
  } else if (selectedOption1 == "white") {
    button.style.filter = "";
  } else if (selectedOption1 == "yellow") {
    button.style.filter = "sepia(100%)";
  } else {
  }

  // select box 2
  if (selectedOption2 == "green") {
    pad.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption2 == "red") {
    pad.style.filter = "";
  } else if (selectedOption2 == "turquoise") {
    pad.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption2 == "purple") {
    pad.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption2 == "blue") {
    pad.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption2 == "brown") {
    pad.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption2 == "light grey") {
    pad.style.filter = "contrast(0%)";
  } else {
  }

  // select box 3
  if (selectedOption3 == "green") {
    middle.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption3 == "red") {
    middle.style.filter = "";
  } else if (selectedOption3 == "turquoise") {
    middle.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption3 == "purple") {
    middle.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption3 == "blue") {
    middle.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption3 == "brown") {
    middle.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption3 == "light grey") {
    middle.style.filter = "contrast(0%)";
  } else {
  }

  //select box 4
  if (selectedOption4 == "green") {
    sides.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption4 == "red") {
    sides.style.filter = "";
  } else if (selectedOption4 == "turquoise") {
    sides.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption4 == "purple") {
    sides.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption4 == "blue") {
    sides.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption4 == "brown") {
    sides.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption4 == "light grey") {
    sides.style.filter = "contrast(0%)";
  } else {
  }
}

function changeShade1() {
  //1. get selectbox

  let select1 = document.querySelector("#select-box1");
  let select2 = document.querySelector("#select-box2");
  let select3 = document.querySelector("#select-box3");

  //2. get selected

  let selectedOption1 = select1.options[select1.selectedIndex].innerHTML;
  let selectedOption2 = select2.options[select2.selectedIndex].innerHTML;
  let selectedOption3 = select3.options[select3.selectedIndex].innerHTML;

  // shoe sections:
  let button = document.querySelector("#xblack");
  let pad = document.querySelector("#xwhite");
  let middle = document.querySelector("#xmain");

  //3. change colour

  // select box 1
  if (selectedOption1 == "black") {
    button.style.filter = "invert()";
  } else if (selectedOption1 == "white") {
    button.style.filter = "";
  } else if (selectedOption1 == "yellow") {
    button.style.filter = "sepia(100%)";
  } else {
  }

  // select box 2
  if (selectedOption2 == "black") {
    pad.style.filter = "invert()";
  } else if (selectedOption2 == "white") {
    pad.style.filter = "";
  } else if (selectedOption2 == "yellow") {
    pad.style.filter = "sepia(100%)";
  } else {
  }

  // select box 3
  if (selectedOption3 == "green") {
    middle.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption3 == "red") {
    middle.style.filter = "";
  } else if (selectedOption3 == "turquoise") {
    middle.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption3 == "purple") {
    middle.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption3 == "blue") {
    middle.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption3 == "brown") {
    middle.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption3 == "light grey") {
    middle.style.filter = "contrast(0%)";
  } else {
  }
}

function validateTextField(elem) {
  let fieldValue = elem.value;

  let firstname = document.querySelector("#firstname").value;
  let lastname = document.querySelector("#lastname").value;
  let username = document.querySelector("#leoleo").value;
  let password = document.querySelector("#mamama").value;

  if (fieldValue.trim().length == 0 || fieldValue.trim().length > 30) {
    elem.style.border = "1px solid red";

    document.querySelector("#submit-button").disabled = true;
    document.querySelector("#" + elem.id + "-wrong").style.display =
      "inline-block";
    document.querySelector("#" + elem.id + "-correct").style.display = "none";
  } else {
    elem.style.border = "1px solid green";

    document.querySelector("#submit-button").disabled = false;
    document.querySelector("#" + elem.id + "-correct").style.display =
      "inline-block";
    document.querySelector("#" + elem.id + "-wrong").style.display = "none";
  }
}
