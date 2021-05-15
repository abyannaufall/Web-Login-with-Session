function Login() {
    let username = document.querySelector('#username').value;
    let password = document.querySelector('#password').value;
    
if (username==""){
    alertify.alert("Please enter your username first!", function Login(){
      alertify.message("Login Failed");
      
    });
}else if(password==""){
  alertify.alert("Please enter your password!", function Login(){
    alertify.message("Login Failed");

  });
}else{
  $.ajax({
        url: 'loginserver.php',
        method: 'POST',
        data: {
          usernamekirim: username,
          passwordkirim: password,
        },
        success: function (data) {
          if (data == 'Login Success') {
             location.href = 'server/index.php';
          }
          else{
            alertify.alert("Wrong username or password!", function Login(){
              alertify.message("Login Failed");
              
            });
        }
      }
  });
}
}