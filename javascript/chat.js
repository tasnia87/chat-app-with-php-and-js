const form=document.querySelector(".typing-area");
const inputfield=document.querySelector(".input-group");
const btn=document.querySelector(".button");
chat = document.querySelector(".chat-box");


form.onsubmit=(e)=>
{
  e.preventDefault();
}
btn.onclick=()=>{
  let chatbar = form.value;
    let xhr=new XMLHttpRequest();
        xhr.open("POST", "php/insert-msg.php", true);
        xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
              if(xhr.status === 200){
                  let data = xhr.response;}
                  chatbar=" ";
        
        }}
  
  let formData = new FormData(form);
  xhr.send(formData);

  
}


setInterval(() =>{
  let chatbar = form.value;
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/msg.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          
            chat.innerHTML = data;
            chatbar=" ";

          
          
        }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
},500);

  