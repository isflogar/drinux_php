$("#apellidos, #nombre").sololetras();
$("#edad").numeric();
$("#formDirectory").submit(function(event){
	event.preventDefault();
	$("#carga").show();
	$.post(url_controller+'save', $("#formDirectory").serialize(), function(response) {
		if(response.result==true){
			tblDirectory.fnReloadAjax();
			$("#modalDirectory").modal("hide");
			Alerta("Registro Exitoso!!", "success");
		}else{
			Alerta(response.msg, "warning");
		}
		$("#carga").fadeOut();
	},'json');
});