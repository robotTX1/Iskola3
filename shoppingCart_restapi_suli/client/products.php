<div class="container">
	<h2 class="text-center">Termékek</h2>
	<div class="text-right">
		 <i onclick="showCart()" class="fa-solid fa-cart-shopping btn"></i>
		<span class="qty">0</span>
	</div>
	<div class="row justify-content-center shadow p-1 bg-light products"></div>
</div>
<script>
	getData('../server/read.php',showProducts)

	function showProducts(data){
		console.log(data);
		document.querySelector('.products').innerHTML=data.map(obj=>`
		<div class="card" style="width: 18rem;">
			<img src="img/${obj.picture}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">${obj.name}</h5>
				<p class="card-text">${obj.description}</p>
				<p>Price: ${obj.price}</p>
				<button id=${obj.id} data-prod='${JSON.stringify(obj)}' class="btn btn-primary" onclick="addToCart(this)">Add to Cart</button>
			</div>
		</div>
		`).join('');
	}

	function addToCart(obj){
		let product=JSON.parse(obj.dataset.prod)
		let formData=new FormData();
		Object.entries(product).forEach(([key,value]) =>formData.append(key,value))

		let configObj={
			method:"POST",
			body:formData
		}
		postData('../server/addToCart.php',configObj,renderCart)
		
	}
	function renderCart(data){
		console.log("szerver:",data)
		document.querySelector('.qty').innerHTML=data
		
	}
	function showCart(){
		location.href= './index.php?prog=cart.php'
}
</script>