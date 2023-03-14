<div class="row border">
    <div class="col-md-6 col-sm-12">
        <h3>Order details</h3>
        <table class="table table-striped table-responsive bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>€</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Sum</td>
                    <td id="total">...</td>
                </tr>
            </tfoot>
        </table>
        <a href="./index.php?prog=products.php">Continue shopping...</a>
    </div>
    <div class="col-md-6 col-sm-12">
        <h3>Contact details</h3>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <textarea name="address" placeholder="Address" class="form-control" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" value="Place Order" onclick="placeOrder()"/>
            </div>
        </form>
    </div>
</div>

<script>
    function render(data) {
        console.log(data)
        console.log(Object.values(data))
        let products=Object.values(data)
        let tbl = '';
        let total = 0;
        if (!data?.error) {
            for (let obj of products) {
                total += obj.quantity * obj.price
                tbl += `
                <tr>
                    <td>${obj.name}</td>
                    <td>${obj.price}</td> 
                    <td>${obj.price}</td>
                    <td>${obj.quantity*obj.price}</td>
                </tr>
                `
            }
        document.querySelector('tbody').innerHTML = tbl
        document.querySelector('#total').innerHTML = total
        }else{
            console.log('a kosár üres')
            location.href='./index.php?prog=products.php'
        }

    }

    function renderOrder(data) {
        console.log(data);
    }

    function placeOrder() {
        const myForm = new FormData(document.querySelector("form"));

        const config = {
            method: "POST",
            body: myForm
        };

        postData("../server/placeOrder.php", config, renderOrder);
    }

    getData("../server/cartContent.php", render);
</script>