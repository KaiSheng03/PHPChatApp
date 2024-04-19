const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e) =>{
    e.preventDefault(); // prevent form from submitting
}

continueBtn.onclick = () =>{
    let xhr = new XMLHttpRequest(); // Creating XML object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                    location.href = "users.php";
                }   
                else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }
    let formData = new FormData(form); // Creating formData object
    xhr.send(formData); // Send to php
}