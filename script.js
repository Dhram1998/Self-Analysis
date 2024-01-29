const changeText = function () {
  setTimeout((document.querySelector(".logout").innerHTML = "Login"), 1000);
};

document.querySelector("span").addEventListener("click", function () {
  changeText();
});


/*************************************** Form Validation *************************************************/

function clearErrors(){

  errors = document.getElementsByClassName('formerror');
  for(let item of errors)
  {
      item.innerHTML = "";
  }


}

function validateForm(){
  var returnval = true;
  clearErrors();

  // perform validation and if validation fails, set the value of returnval of false
  var name = document.forms['myForm']["fname"].value;
 
  if (name === ""
  || name.includes('0') || name.includes('1')
  || name.includes('2') || name.includes('3')
  || name.includes('4') || name.includes('5')
  || name.includes('6') || name.includes('7')
  || name.includes('8') || name.includes('9')) 
  {
    window.alert("Please enter your name properly.");
    name.focus();
    return false;
  }

  var phone = document.forms['myForm']["fphone"].value;
    if (phone.length != 10){
      window.alert('Please ender a valid number');
        phone.focus();
        returnval = false;
    }


  var email = document.getElementById('email');
  if (email === "" || !email.includes('@') || !email.includes('.')) 
  {
    window.alert("Please enter a valid e-mail address.");
    email.focus();
    return false;
  }

  var password = document.forms['myForm']["fpass"].value;
    if (password.length < 6){
      window.alert("Password should be atleast 6 character long");
      password.focus();
      returnval = false;
    }

    var cpassword = document.forms['myForm']["fcpass"].value;
    if (cpassword != password){
      window.alert("Password and Confirm password should match!");
      cpassword.focus();
      returnval = false;
    }

  return returnval;
}




/***************************************** Progress Circul *****************************/

const circularProgress = document.querySelectorAll(".circular-progress");

Array.from(circularProgress).forEach((progressBar) => {
  const progressValue = progressBar.querySelector(".percentage");
  const innerCircle = progressBar.querySelector(".inner-circle");
  let startValue = 0,
    endValue = Number(progressBar.getAttribute("data-percentage")),
    speed = 50,
    progressColor = progressBar.getAttribute("data-progress-color");

  const progress = setInterval(() => {
    startValue++;
    progressValue.textContent = `${startValue}%`;
    progressValue.style.color = `${progressColor}`;

    innerCircle.style.backgroundColor = `${progressBar.getAttribute(
      "data-inner-circle-color"
    )}`;

    progressBar.style.background = `conic-gradient(${progressColor} ${
      startValue * 3.6
    }deg,${progressBar.getAttribute("data-bg-color")} 0deg)`;
    if (startValue === endValue) {
      clearInterval(progress);
    }
  }, speed);
});



/*********************************** Profile Image *************************************************/

var profileImage = document.getElementById('profileImage');

  //Add a click event listener to the image
  profileImage.addEventListener('click', function() {
    // Replace this with the actual code to open the profile
    alert('Opening profile!');
    // You can replace the alert with your logic to open the profile page.
    // For example, you can use window.location.href = 'profile.html';
  });

  /*********************************** Table in Strategy Plan page *************************************************/

  function createTable() {
    // Get the number of rows and columns from user input
    var rows = document.getElementById('rows').value;

    // Get the table container
    var tableContainer = document.getElementById('table-container');

    // Create the table element
    var table = document.createElement('table');

    // Create table header
    var thead = document.createElement('thead');
    var tr = document.createElement('tr');
    for (var i = 0; i < 1; i++) {
        var th = document.createElement('th');
        th.textContent = 'Header ' + (i + 1);
        tr.appendChild(th);
    }
    thead.appendChild(tr);
    table.appendChild(thead);

    // Create table body
    var tbody = document.createElement('tbody');
    for (var i = 0; i < rows; i++) {
        var tr = document.createElement('tr');
        for (var j = 0; j < 1; j++) {
            var td = document.createElement('td');
            td.textContent = 'Row ' + (i + 1) + ', Col ' + (j + 1);
            tr.appendChild(td);
        }
        tbody.appendChild(tr);
    }
    table.appendChild(tbody);

    // Append the table to the container
    tableContainer.innerHTML = ''; // Clear previous table
    tableContainer.appendChild(table);
}