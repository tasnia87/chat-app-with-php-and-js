const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        xhr.open("POST", "php/login.php", true);
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                errorText.style.display = "block";
                errorText.textContent = data;
              }else{
                
                location.href = "users.php";
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}