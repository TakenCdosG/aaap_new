/*
 * @file
 * JavaScript for Conditional Field in From.
 *
 */
(function ($) {
    $(document).ready(function () {

        var $form = $("#user-register-form");
        $('#edit-field-us-province-state-und', $form).change(function() {
            var selected = $(this).val();
            console.log('-> Selected value: ' + selected);
        });

    });
})(jQuery);
