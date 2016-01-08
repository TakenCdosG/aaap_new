/*
 * @file
 * JavaScript for Conditional Field in From.
 *
 */
(function ($) {
    $(document).ready(function () {

        var $form = $("#user-register-form");
        var $select = $('#edit-field-us-province-state-und', $form);
        var $field_us_state_province = $('#edit-field-us-state-province', $form);
        var $field_region = $('#edit-field-region', $form);
        var $region = $("#edit-field-us-region-und", $form);
        var south = ["AL", "AR", "DE", "FL", "GA" , "KY" , "LA" , "MD" , "MS" , "NC" , "OK" , "SC" , "TN" , "TX" , "VA" , "WA" , "WV"];
        var northeast = ["CT", "ME", "MA", "NH", "NJ", "NY", "PA", "RI", "VT"];
        var midwest = ["IL", "IN", "IA", "KS", "MI", "MN", "MO", "NE", "ND", "OH", "SD", "WI"];
        var west = ["AK", "AZ", "CA", "CO", "HI", "ID", "MT", "NM", "NV", "OR", "UT", "WY"];

        $region.attr('disabled', 'disabled');
        $field_us_state_province.css("display", "none");

        $field_region.change(function() {
            var selected = $(this).val();
            console.log("-> selected: "+selected);
        });

        $select.change(function() {
            var selected = $(this).val();
            var inArray = -1;
            // SOUTH
            inArray = south.indexOf(selected);
            if(inArray != -1){
                $("#edit-field-us-region-und", $form).val("SOUTH");
            }
            // NORTHEAST
            inArray = northeast.indexOf(selected);
            if(inArray != -1){
                $("#edit-field-us-region-und", $form).val("NORTHEAST");
            }
            // MIDWEST
            inArray = midwest.indexOf(selected);
            if(inArray != -1){
                $("#edit-field-us-region-und", $form).val("MIDWEST");
            }
            // WEST
            inArray = west.indexOf(selected);
            if(inArray != -1){
                $("#edit-field-us-region-und", $form).val("WEST");
            }
        });

    });
})(jQuery);
