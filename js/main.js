// Example of loading a polyfill when no native placeholder functionality is found.
Modernizr.load([
    {
        test: Modernizr.input.placeholder,
        nope:   [
                    '../css/placeholder_polyfill.css',
                    '../js/placeholder_polyfill.jquery.js',
                ]
    }
]);

// Example of initializing the css for a plugin based on available
// browser functionality.
if( ! Modernizr.inputtypes.date) {

    Modernizr.load({
        test: Modernizr.inputtypes.date,
        nope: ['/js/jquery-ui-datepicker.min.js','../css/ui-lightness/jquery-ui-1.10.3.custom.min.css'],
        complete: function() {
            $('input[type="date"]').datepicker();
        },
    });
}


// Caching variables.
var $doc = $(document),
    $error = $('#error'),
    $form  = $('#registration');


$doc.on('submit', $form, function(event) {

    if( ! $('#inputName').val()) {

        $error.show();

        event.preventDefault();
        return false;
    } else {
        $error.hide();
    }
});