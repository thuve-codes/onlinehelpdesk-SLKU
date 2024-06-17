
//..............................................

function smepasword(){
    var npd=document.getElementById('npd').value;
    var rnpd=document.getElementById('rnpd').value;

    if(npd.length < 8 || rnpd.length < 8){
        alert("Enter Valid Password!!\n Your password must contain 8 charactors");
        return false;
    }

    if(npd==rnpd){
            alert("Sucessfully Created");
            return true;
                  }
    else{
            alert("Password do not matched!!");
            return false;
      }
}
//.................................................

function clearbutton(event){
    document.getElementById("reset").reset();
   
}

/*function clearimg(event){
    var img=document.getElementById('previewimg');
    img.src='images/userIcon.png';
}


function preview(event) {
    var input = event.target;
    var preview = document.getElementById('previewimg');
  
    var reader = new FileReader();
    reader.onload = function(){
      preview.src = reader.result;
    };
    reader.readAsDataURL(input.files[0]);
}
*/
//..............................................



