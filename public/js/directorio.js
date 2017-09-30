url_controller = url_aplication+"directorio/";
param.sAjaxSource = url_controller+"grid";
param.fnServerData = function( sUrl, aoData, fnCallback ){
   $.ajax( {
      "url": sUrl,
      "data": aoData,
      "success": function(response){
      	data = response.aaData;
      	DOMActionButton = $("#GlobalCrudButtons");
      	$.each(data, function (key, obj){
      		DOMActionButton.find(".edit").attr("onclick", "editDirectory("+obj.DT_RowId+")");
      		DOMActionButton.find(".delete").attr("onclick", "delDirectory("+obj.DT_RowId+")");
      		obj[5] = DOMActionButton.html();
      	});
      	fnCallback(response);
      },
      "dataType": "jsonp",
      "cache": false
   });
};
var tblDirectory = $('#tblDirectory').dataTable(param);
$("#tblDirectory_filter").append(" <button type='button' class='btn btn-sm btn-success' id='addDirectory'><i class='fa fa-plus'></i> Registrar</button>");

$('#addDirectory').click(function(){
	document.getElementById("formDirectory").reset();
	$("#id").val("");
	$("#myModalLabel span").html("Registrar");
	$('#modalDirectory').modal("show");
});

function editDirectory(id_table){
	$("#carga").show();
	$.get(url_controller+'get', {id: id_table}, function(response) {
		$("#id").val(response.id);
		$("#nombre").val(response.nombre);
        $("#apellidos").val(response.apellidos);
        $("#edad").val(response.edad);
        $("#direccion").val(response.direccion);
        $("#telefono").val(response.telefono);
		$("#myModalLabel span").html("Editar");
		$("#modalDirectory").modal("show");
		$("#carga").fadeOut("fast");
	},'json');
}

function delDirectory(id_table){
	if(confirm("¿Eliminar?")){
		$("#carga").show();
		$.post(url_controller+'delete', {id: id_table}, function(response) {
			if(response.result==true){
				Alerta("Registro eliminado", "success");
				tblDirectory.fnReloadAjax();
			}else{
				Alerta(response.msg, "danger");
			}
			$("#carga").fadeOut("fast");
		},'json');
	}
}