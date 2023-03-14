<div class="register">
<form class="form-signin shadow mt-2">
    <div class="w-100 text-center">
         <img class="mb-4" src="log-in.png" alt="" width="72" height="72">
    </div>
 
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

  <label for="username" >Username</label>
  <input type="username" id="username" name="username" class="form-control" onblur="verifyUsername(this)" placeholder="username" required autofocus>
  <div class="verifyUser text-danger"></div>
  <label for="email" >Email address</label>
  <input type="email" id="email" name="email" class="form-control" onblur="verifyEmail(this)" placeholder="Email address" required autofocus>
  <div class="verifyEmail text-danger"></div>
  <label for="password" >Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  
  <input class="btn btn-lg btn-primary btn-block registerButton" type="button" value="Sign Up" onclick="NewUser()" disabled/>

</form>

<div class="msg text-center"></div>

</div>
<hr>

<script>
  let user = false, email = false;

  async function NewUser() {
    const myFormData = new FormData(document.querySelector("form"));
    const config = {
      method: 'POST',
      body: myFormData,
    }
    document.querySelector(".msg").innerHTML = "";
    user = false, email = false;
    disableButton();
    dataUser("../server/UserInsertion.php", config, renderData);
  }

  function verifyUsername(obj) {
    if(obj.value.length > 0) {
      document.querySelector('.verifyUser').innerHTML = "";
      verifyUser('../server/verifyUser.php?username=' + obj.value, usernameRender);
    }
  }

  function verifyEmail(obj) {
    if(obj.value.length > 0) {
      document.querySelector('.verifyEmail').innerHTML = "";
      verifyUser('../server/verifyUser.php?email=' + obj.value, emailRender);
    }
  }

  function usernameRender(data) {
    if(data.msg.mr === 1) {
      document.querySelector('.verifyUser').innerHTML = "Felhasználónév már foglalt!";
    }
    user = data.msg.mr === 0;
    disableButton();
  }

  function emailRender(data) {
    if(data.msg.mr === 1) {
      document.querySelector('.verifyEmail').innerHTML = "Email cím már foglalt!";
    }
    email = data.msg.mr === 0;
    disableButton();
  }

  function disableButton() {
    document.querySelector('.registerButton').disabled = !(user && email);
  }

  function renderData(data) {
    document.querySelector(".msg").innerHTML = data.msg;
  }
</script>

