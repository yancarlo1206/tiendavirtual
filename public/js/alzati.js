jQuery(document).ready(function($) {
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
});