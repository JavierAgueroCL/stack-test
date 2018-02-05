//== Class definition
var Select2 = function() {
    //== Private functions
    var placeholders = function() {
        // basic
        $('.giro').select2({
            placeholder: "Seleccionar Giro"
        });
    }

    //== Public functions
    return {
        init: function() {
            placeholders();
        }
    };
}();

//== Initialization
jQuery(document).ready(function() {
    Select2.init();
});
