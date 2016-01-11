/*
 * @file
 * JavaScript for Conditional Field in From.
 *
 */
(function ($) {
    $(document).ready(function () {

        var $form = $("#user-register-form");
        if ($form.length > 0){
        }else{
            $form = $("#user-profile-form");
        }
        var $select = $('#edit-field-us-province-state-und', $form);
        var $field_us_state_province = $('#edit-field-us-state-province', $form);
        var $field_us_province_state = $('#edit-field-us-province-state', $form);
        var $field_region_us = $('#edit-field-region #edit-field-region-und-us', $form);
        var $field_us_region = $('#edit-field-us-region', $form);
        var $field_region_canada = $('#edit-field-region #edit-field-region-und-canada', $form);
        var $field_canada_state_province = $('#edit-field-canada-state-province', $form);
        var $field_attach_und_yes = $('#edit-field-attach-und-yes', $form);
        var $region_head_administrator = $('.head-administrator', $form);
        var $field_institution = $('#edit-field-institution-und-0-value', $form);
        var $field_ha_institution = $('#edit-field-institution-name-und-0-value', $form);

        var $field_institution_type_und_public = $('#edit-field-institution-type-und-public', $form);
        var $field_institution_type_und_private = $('#edit-field-institution-type-und-private', $form);

        var $field_ha_institution_type_und_public = $('#edit-field-ha-institution-type-und-public', $form);
        var $field_ha_institution_type_und_private = $('#edit-field-ha-institution-type-und-private', $form);

        var $region = $("#edit-field-us-region-und", $form);
        var south = ["AL", "AR", "DE", "FL", "GA" , "KY" , "LA" , "MD" , "MS" , "NC" , "OK" , "SC" , "TN" , "TX" , "VA" , "WA" , "WV"];
        var northeast = ["CT", "ME", "MA", "NH", "NJ", "NY", "PA", "RI", "VT"];
        var midwest = ["IL", "IN", "IA", "KS", "MI", "MN", "MO", "NE", "ND", "OH", "SD", "WI"];
        var west = ["AK", "AZ", "CA", "CO", "HI", "ID", "MT", "NM", "NV", "OR", "UT", "WY"];

        $region.attr('disabled', 'disabled');
        $field_us_region.css("display", "none");
        $field_us_state_province.css("display", "none");
        $field_us_province_state.css("display", "none");
        $field_canada_state_province.css("display", "none");

        $field_region_us.change(function() {
            if(this.checked) {
                //Do stuff
                $field_us_province_state.css("display", "block");
                $field_us_region.css("display", "block");
                $field_canada_state_province.css("display", "none");
            }
        });

        $field_region_canada.change(function() {
            if(this.checked) {
                //Do stuff
                $field_us_province_state.css("display", "none");
                $field_us_region.css("display", "none");
                $field_canada_state_province.css("display", "block");
            }
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

        $($field_attach_und_yes).change(function() {
            if(this.checked) {
                //Do stuff
                $region_head_administrator.css("display", "block");
            }else{
                $region_head_administrator.css("display", "none");
            }
        });

        if ($field_attach_und_yes.is(':checked')) {
            $region_head_administrator.css("display", "block");
        }else{
            $region_head_administrator.css("display", "none");
        }

        // Populated Field
        $field_institution.change(function() {
            var val_field_institution = $field_institution.val();
            $field_ha_institution.val(val_field_institution);
        });

        $field_institution_type_und_public.click(function () {
            if ($(this).is(':checked')) {
                $field_ha_institution_type_und_public.prop('checked', true);
            }
        });

        $field_institution_type_und_private.click(function () {
            if ($(this).is(':checked')) {
                $field_ha_institution_type_und_private.prop('checked', true);
            }
        });

    });
})(jQuery);
