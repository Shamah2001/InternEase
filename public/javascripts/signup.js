const signupBtn=document.getElementById('signup_btn');


signupBtn.addEventListener('click', clickSignup);

function clickSignup(e) {
   
    const password=document.getElementById('password');
    const confirmPassword=document.getElementById('confirm_password');
    const error=document.getElementById('error');
    error.innerText="";
    if(password.value!=confirmPassword.value)
    {
        e.preventDefault();
        error.innerText="Password not match";
    }
}