//== Class definition
var FormRepeater = function() {

    //== Private functions
    var repetidor_popup = function() {
        $('.repetidor').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                var repetidor = $(this);
                  swal({
                    title: 'Esta seguro que deseas eliminar esto?',
                    text: "No podrás revertir esto!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, eliminar!',
                    cancelButtonText: 'Cancelar'
                  }).then(function(result) {
                      if (result.value) {
                          swal(
                              'Eliminado!',
                              'El elemento ha sido borrado.',
                              'success'
                          )
                          $(repetidor).slideUp(deleteElement);
                      }
                  });
                }
        });
    }

    return {
        // public functions
        init: function() {
            repetidor_popup();
        }
    };
}();

jQuery(document).ready(function() {
    FormRepeater.init();
});
