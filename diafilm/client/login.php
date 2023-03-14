<form>
    <div class="form-group">
        <input type="text" name="username" id="username" placeholder="Felhasználó név" class="form-control">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" placeholder="Jelszó" class="form-control">
    </div>
    <input type="button" value="Bejelentkezés" class="btn btn-primary w-100" onclick="login()">
</form>

<div class="msg"></div>

<script src="getData.js"></script>
<script>
    function login() {
        const formData = new FormData(document.querySelector("form"));
        const config = {
            method: "POST",
            body: formData
        }

        postData(`../server/login.php`, config, renderMsg);
    }

    function renderMsg(data) {
        console.log(data);
        data.success ? location.href='./index.php' : document.querySelector(".msg").innerHTML = data.msg;
    }
</script>