const searchBar = document.querySelector(".user .form-input input"),
searchBtn = document.querySelector(".user button"),
userList = document.querySelector(".user .user-list");

searchBtn.onsubmit = (e)=>{
    e.preventDefault();
}

setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              
              userList.innerHTML=data;
              
}}}

xhr.send();
},
500);

