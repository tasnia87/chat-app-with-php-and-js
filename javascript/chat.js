const form=document.querySelector(".typing-area");
const inputfield=document.querySelector(".input-group");
const btn=document.querySelector("button");
chat = document.querySelector(".chat-box");
incoming_id = form.querySelector(".incoming-id").value;

form.onsubmit=(e)=>
{
  e.preventDefault();
}
btn.onclick=()=>{
    let xhr=new XMLHttpRequest();
        xhr.open("POST", "php/insert-msg.php", true);
        xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
              if(xhr.status === 200){
                  let data = xhr.response;}
                  console.log(data)
        
        }}
  
  let formData = new FormData(form);
  xhr.send(formData);
}

setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/msg.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          
            chat.innerHTML = data;

          
          
        }
    }
  }

  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+incoming_id);
}, 500);