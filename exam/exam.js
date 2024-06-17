
  function submitForm() {
    
    if (document.getElementById('main-form').checkValidity()) {
       
        alert("Successful submit");
    } else {
        
        alert("Please fill out the form completely");
    }
}



