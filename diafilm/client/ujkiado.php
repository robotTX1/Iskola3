<style>
    h1 {
        width: 100%;
        text-align: center;
    }
</style>

<h1>Új kiadó bevezetése</h1>

<div>
    <form>
        <label for="name" class="m-2">Kiadó neve:</label>
        <input id="nameInput" type="text" name="name" class="form-control m-2">
        <input type="button" value="Mentés" class="btn btn-primary m-2" onclick="addNew()">
    </form>
    <div>
        <p class="msg m-2"></p>
    </div>
</div>




<script>
    const form = document.querySelector("form");
    const nameInput = document.querySelector("#nameInput");
    const messageBox = document.querySelector(".msg");

    async function addNew() {
        if(nameInput.value == "") return;

        const formData = new FormData(document.querySelector("form"));

        const config = {
            method: "POST",
            body: formData
        };

        const response = await fetch("../server/addKiado.php", config);
        const data = await response.json();
        
        messageBox.textContent = data.msg;

        nameInput.value = "";
    }
</script>