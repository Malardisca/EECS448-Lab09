function validateForm() {
    if(checkQuantities() && checkShip() && checkLogin()){
        return true
    }
    else{
        alert("The form is incomplete or values are invalid, check your order again!")
        return false
    }
  }
  
  function checkQuantities() {
      if(document.getElementById("Epic").value >= 0 && document.getElementById("Rare").value >= 0 && document.getElementById("Normal").value >= 0){
          return true
      }
      else{
          return false
      }
  }
  
  function checkShip() {
      if(document.getElementById("seven").checked || document.getElementById("five").checked || document.getElementById("fifty").checked){
          return true
      }
      else{
          return false
      }
  }
  
  function checkLogin() {
      mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      if(document.getElementById("user").value.match(mailformat) && document.getElementById("pass").value.length > 0){
          return true
      }
      else{
          return false
      }
  }
