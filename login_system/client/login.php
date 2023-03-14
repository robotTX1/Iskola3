<div class="login">
  <form class="form-signin shadow mt-2">
    <div class="w-100 text-center">
      <img class="mb-4" src="log-in.png" alt="" width="72" height="72">
    </div>

    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="username">Username</label>
    <input type="username" id="username" name="username" class="form-control" placeholder="username" required autofocus>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

    <input class="btn btn-lg btn-primary btn-block" type="button" value="Login" onclick="login()">
  </form>
  <div class="msg text-center"></div>
</div>
<hr>

<script>
  async function login() {
    const myFormData = new FormData(document.querySelector("form"));
    const config = {
      method: 'POST',
      body: myFormData,
    }
    document.querySelector(".msg").innerHTML = "";
    dataUser("../server/login.php", config, renderData);
  }

  function renderData(data) {
    document.querySelector(".msg").innerHTML = data.msg;
    if(data.msg === "ok") {
      location.href = "./index.php";
    }
  }
</script>