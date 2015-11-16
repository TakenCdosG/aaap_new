<?php

/**
 * @file
 * Admin settings for the Migration
 */

/**
 * Admin settings page for the Migration.
 */
function aaap_renewals_admin_form() {

    $form = array();
    $form['aaap_renewals_form'] = array(
        '#title' => t('Configuración general de AAAP Renewals'),
        '#type' => 'fieldset',
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );
    $form['aaap_renewals_form']['admin_mail_renewal_confirmation_email'] = array(
        '#title' => t('Set the admin mail renewal confirmation emails:'),
        '#type' => 'textfield',
        '#default_value' => variable_get('admin_mail_renewal_confirmation_email', ''),
        '#description' => t('Set the admin mail renewal confirmation emails.'),
        '#attributes' => array(),
    );
    $form['aaap_renewals_form']['submit'] = array(
        '#type' => 'submit',
        '#value' => t('Save'),
    );
    $form['#submit'][] = 'aaap_renewals_admin_form_submit';
    return $form;

}

/**
 * Form submit for migrate admin form.
 *
 * @param array $form
 *   form object
 * @param array $form_state
 *   form object values
 */
function aaap_renewals_admin_form_submit($form, &$form_state) {
    $formulario = $form_state['values'];
    $admin_mail_renewal_confirmation_email = $formulario["admin_mail_renewal_confirmation_email"];
    variable_set("admin_mail_renewal_confirmation_email", $admin_mail_renewal_confirmation_email);
}
