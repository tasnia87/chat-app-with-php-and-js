const form=document.querySelector("typing-area");
const inputfield=document.querySelector("input-group");
const btn=document.querySelector("button");

btn.onclick=()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        xhr.open("POST", "php/insert-msg.php", true);
        if(xhr.status === 200){
            let data = xhr.response;
            if(data === "success"){
              location.href = "users.php";
            }else{
              errorText.style.display = "block";
              errorText.textContent = data;
            }
        }
    }
  
  let formData = new FormData(form);
  xhr.send(formData);
}