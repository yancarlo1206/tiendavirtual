jQuery(document).ready(function($) {
	$(".tt-btn-quickview").click(function(event) {
		var producto = $(this).attr('data-producto');
		$.post(BASE.url+'producto/cargar/', {producto: producto}, function(data, textStatus, xhr) {
			$("#referencia").html("<span>SKU:</span> "+data.referencia);
			$("#stock").html("<span>Habilitados:</span> "+data.stock+" en Bodega");
			$("#nombre").html(data.nombre);
			$("#precio").html(data.precio);
			$("#ModalquickView").modal();
		},"json");
	});
});