<style>
    .holder {
        max-width: 600px;
    }
</style>
<div class="holder">
    <h4>Shopping cart</h4>
    <table class="table table-striped table-responsive bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>€</th>
                <th>Total</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody></tbody>
        <tfoot>
            <tr>
                <td colspan="3">Sum</td>
                <td id="total">...</td>
            </tr>
        </tfoot>
    </table>

    <a href="./index.php?prog=products.php">Continue shopping...</a>
    <a class="btn btn-outline-primary" href="./index.php?prog=checkOut.php">Checkout</a>
</div>


<script>
    getData('../server/cartContent.php', render)

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
                    <td><input type="number" value="${obj.quantity}" data-id="${obj.id}" onchange="updateQty(this)"/></td> 
                    <td>${obj.price}</td>
                    <td>${obj.quantity*obj.price}</td>
                    <td><i id="${obj.id}" onclick="deleteItem(this)" class="fa-solid fa-trash btn text-danger"></i></td>
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

    function deleteItem(obj){
        console.log(obj.id)
        getData('../server/deleteItem.php?id='+obj.id,renderDelItem)
    }

    function renderDelItem(data){
        console.log(data)
        getData('../server/cartContent.php', render)

    }
    function updateQty(obj){
        console.log(obj.value,obj.dataset.id)
        getData(`../server/updateItem.php?id=${obj.dataset.id}&qty=${obj.value}`,renderDelItem)
    }
</script>