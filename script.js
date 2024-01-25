const changeText = function () {
  setTimeout((document.querySelector(".logout").innerHTML = "Login"), 1000);
};

document.querySelector("span").addEventListener("click", function () {
  changeText();
});


/*************************************** Form Validation *************************************************/

function seterror(id, error){
  // sets error inside tag if id

  element = document.getElementById(id);
  element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
  var returnval = true;

  // perform validation and if validation fails, set the value of returnval of false
  var name = document.forms['myForm']["fname"].value;
 
  if(name.length < 5){
    seterror("name", "*too short");
    returnval = false;
  }


  return returnval;
}