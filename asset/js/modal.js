const closeBtn = document.getElementById('close');
const loginBackground = document.getElementById('loginContainer');
const lgBtn = document.getElementById('loginButton');

function showModalBox()
{
    // action start here
    loginBackground.style.display = "block";
}

function closeModalBox()
{
    loginBackground.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == loginBackground){
        loginBackground.style.display = "none";
    }
}
