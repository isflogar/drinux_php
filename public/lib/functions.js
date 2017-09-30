var w = $(window).height();
w = w*0.7;
var param = {
  "scrollCollapse": true,
  "scrollY": "250px",
  "lengthMenu": [[10, 30, 60, 100], [10, 30, 60, 100]],
  "language": {
    "lengthMenu": "_MENU_",
    "zeroRecords": "No hay registros",
    "info": "Pagina _PAGE_ de _PAGES_",
    "infoEmpty": "Registro no encontrado",
    "infoFiltered": "(buscado en _MAX_ registros)",
    "search":         "Buscar: ",
    "paginate":{
      "first":      "<i class='fa fa-angle-double-left'></i>",
      "last":       "<i class='fa fa-angle-double-right'></i>",
      "next":       "<i class='fa fa-angle-right'></i>",
      "previous":   "<i class='fa fa-angle-left'></i>"
    },
  },
  "bProcessing": false,
  "bServerSide": true,
  "sAjaxSource": "",
  "sPaginationType": "full_numbers",
  "fnServerData" : "",
  "ordering" : false
};

$(".modal").modal({"show": false, backdrop: 'static', keyboard: false});

function Alerta(text, typ){
  $.toast({
    text: text,
    showHideTransition: 'slide',
    position: 'top-right',
    hideAfter: 4000, 
    icon: typ
  });
}

function Confirmar(title, type, fnA, fnC, btnType) {
  if(btnType==""||btnType==undefined){
    btnType = "btn-danger";
  }

  swal({
    title: title,
    type: type,
    showCancelButton: true,
    confirmButtonClass: btnType,
    confirmButtonText: "Aceptar"
  }, function (isConfirm) {
    if (isConfirm) {
      if (typeof (fnA) == 'function')
      {
        fnA();
      }
    }
     else
    {
      if (typeof (fnC) == 'function')
      {
        fnC();
      }
    }
  });
}

function Mensaje(msg, type){
  swal("", msg, type);
}

(function ($) {
  $.fn.sololetras = function () {
    letras = /[a-zA-z]/;
    return this.each(function () {
      $(this).keypress(function (e) {
        if(e.which!=32)
        {
          if (!e.charCode){
            k = String.fromCharCode(e.which);
          }else{
            k = String.fromCharCode(e.charCode);
          }
          if(!letras.test(k) || e.which==95 || (e.ctrlKey && k == 'v')){
            e.preventDefault();
          }
        }
      });
    });
  };
})(jQuery);

(function ($) {
  $.fn.solofecha = function () {
      this.datepicker({
         autoclose: true,
         language: 'es',
         //format: 'dd/mm/yyyy',
         format: 'yyyy-mm-dd'
      });
      return this.each(function() {
         $(this).keypress(function (e) {
            e.preventDefault();
         });
      });
  };
})(jQuery);