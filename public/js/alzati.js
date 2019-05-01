var carrito = new Array();
jQuery(document).ready(function($) {

    $(".tt-badge-cart").text(cantidadCarrito());
    $(".tt-cart-total-price").text(totalCarrito());
	    
    $(".tt-cart-list").html(productoCarrosPrincipal());




	$(".tt-btn-quickview").click(function(event) {
		var producto = $(this).attr('data-producto');
		$.post(BASE.url+'producto/cargar/', {producto: producto}, function(data, textStatus, xhr) {
			$("#referencia").html("<span>SKU:</span> "+data.referencia);
			$("#stock").html("<span>Habilitados:</span> "+data.stock+" en Bodega");
			$("#nombre").html(data.nombre);
			$("#precio").html(data.precio);
			var url = BASE.url+"public/img/producto/";
			var imgFrente = url+data.id+".jpg";
			var imgDetras = url+data.id+"_1.jpg";
			$("#imgFrente").attr('src',imgFrente);
			$("#imgFrente").attr('data-src',imgFrente);
			$("#imgDetras").attr('src',imgDetras);
			$("#imgDetras").attr('data-src',imgDetras);
			$("#anadir").attr("data-producto", data.id);
			$("#cantidad").attr("data-id", data.id);
			$("#anadir").attr("data-nombre", data.nombre);
			$("#anadir").attr("data-referencia", data.referencia);
			$("#anadir").attr("data-precio", data.precio);
			$("#ModalquickView").modal();
		},"json");
	});
	toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-bottom-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }



	$("#anadir").click(function(event) {
		event.preventDefault();
		
		var producto = $(this).attr('data-producto');
		var nombre = $(this).attr('data-nombre');
		var referencia = $(this).attr('data-referencia');
		var precio = $(this).attr('data-precio');
		var cantidad = $("#cantidad").val();

		editarCarrito(producto, nombre, referencia, precio, cantidad, 0);
		toastr["success"]("El producto " + nombre + " se ha agregado al pedido");
		$(".tt-cart-list").html(productoCarrosPrincipal());
		$(".tt-badge-cart").text(cantidadCarrito());
    	$(".tt-cart-total-price").text(totalCarrito());

	});


	$("#procederPedido").click(function(event) {
		event.preventDefault();
		
		var nota = $("#nota");

		$.ajax({
	          type: "POST",
	          url: BASE.url + 'carrito/proceder',
	          data: {'carrito': sessionStorage.getItem("carrito")},//capturo array     
	          success: function(data){
	          	alert(data);
	        }
		});

	});


	$(".tt-btn-close.y").click(function(event) {
		event.preventDefault();
		var tr = $(this).closest('tr');
		var producto = tr.attr('data-id');
		
		editarCarrito(producto, null, null, 0, 0, 2);
		tr.remove();
		calcularTotal();
		$(".tt-cart-list").html(productoCarrosPrincipal());
		$(".tt-badge-cart").text(cantidadCarrito());
    	$(".tt-cart-total-price").text(totalCarrito());
	});

	$(".tt-btn-close.x").click(function(event) { 
		var tr = $(this).parent().parent();
		var producto = tr.attr('data-id');

    	editarCarrito(producto, null, null, 0, 0, 2);
		tr.remove();
		calcularTotal();
		$(".tt-cart-list").html(productoCarrosPrincipal());
		$(".tt-badge-cart").text(cantidadCarrito());
    	$(".tt-cart-total-price").text(totalCarrito());

    });

});

function editarCarrito(producto, nombre, referencia, precio, cantidad, tipo) {
	carrito = JSON.parse(sessionStorage.getItem("carrito"));

		if(carrito == null) {
			carrito = new Array();
		}

		finder = false;

		for (var i = 0; i < carrito.length; i++) {
			
			if(carrito[i].producto == producto) {
				if(tipo==2) {
					carrito.splice(i, 1);
					sessionStorage.setItem("carrito", JSON.stringify(carrito));

					return;

				}


				finder = true;

				carrito[i].cantidad = tipo==0?parseInt(carrito[i].cantidad,10):0 + parseInt(cantidad,10);
				i = carrito.length;
			}
	    }

	    if (!finder && tipo==0) {
			carrito.push({producto: producto, referencia: referencia, nombre: nombre, 
				cantidad: parseInt(cantidad,10), precio: precio});
		}
		sessionStorage.setItem("carrito", JSON.stringify(carrito));
}

function calcularTotal() { 

    var total = 0;
    $(".tt-price.subtotal.y").each(function(){  
      total = total + parseInt($(this).text(),10);
    });

    $("#subtotal").text(total);
    $("#total").text(total);
}

function totalCarrito() { 

    var total = 0;
    carrito = JSON.parse(sessionStorage.getItem("carrito"));

	if(carrito == null) {
		return 0;
	}

	for (var i = 0; i < carrito.length; i++) {
		total = total + carrito[i].precio * carrito[i].cantidad;
    }
//alert();
    return total;
}

function cantidadCarrito() { 

    carrito = JSON.parse(sessionStorage.getItem("carrito"));
    if(carrito != null) {
    	return carrito.length;
    }
    return 0;
}

function productoCarroTemplateVentana(id, referencia, nombre, cantidad, precio, url) {
	
  return `<div class="tt-item" data-id="${id}">
	  <a href="${url}producto/detalle/${id}">
	    <div class="tt-item-img">
	      <img src="${url}public/img/producto/${id}.jpg" data-src="${url}public/img/producto/${id}.jpg" alt="">
	    </div>
	    <div class="tt-item-descriptions">
	      <h2 class="tt-title">${nombre}</h2>
	      <ul class="tt-add-info">
	        <li>Amarillo, Material Cuero, Talla 28,</li>
	        <li>Marca: Marca 1</li>
	      </ul>
	      <div class="tt-quantity">${cantidad} X</div> <div class="tt-price">${precio}</div>
	    </div>
	  </a>
	  <div class="tt-item-close">
	    <a href="#" class="tt-btn-close x"></a>
	  </div>
	</div>`;
}

function productoCarrosPrincipal(){
    	carrito = JSON.parse(sessionStorage.getItem("carrito"));
    	var texto = "";
    	if(carrito != null)
			for (var i = 0; i < carrito.length; i++) {
				texto = texto + productoCarroTemplateVentana(carrito[i].producto, carrito[i].referencia, 
					carrito[i].nombre, carrito[i].cantidad, carrito[i].precio, BASE.url);
		    }
	    return texto;
    }