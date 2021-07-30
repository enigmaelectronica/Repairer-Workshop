<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Login
$lang['login_heading']         = 'Acceso';
$lang['login_subheading']      = 'Regístrese para iniciar su sesión';
$lang['login_identity_label']  = 'Email/Usuario';
$lang['login_password_label']  = 'Contraseña';
$lang['login_remember_label']  = 'Recordarme';
$lang['login_submit_btn']      = 'Acceder';
$lang['login_forgot_password'] = '¿Olvide mi contraseña?';

// Index
$lang['index_heading']           = 'Usuarios';
$lang['index_subheading']        = 'A continuación se muestra una lista de los usuarios.';
$lang['index_fname_th']          = 'Nombre';
$lang['index_lname_th']          = 'Apellido';
$lang['index_email_th']          = 'Email';
$lang['index_groups_th']         = 'Grupos';
$lang['index_status_th']         = 'Estado';
$lang['index_action_th']         = 'Acción';
$lang['index_active_link']       = 'Activo';
$lang['index_inactive_link']     = 'Inactivo';
$lang['index_create_user_link']  = 'Crear nuevo usuario';
$lang['index_create_group_link'] = 'Crear nuevo grupo';

// Deactivate User
$lang['deactivate_heading']                  = 'Deactivar Usuario';
$lang['deactivate_subheading']               = '¿Estás seguro de que quieres desactivar al usuario? \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Si:';
$lang['deactivate_confirm_n_label']          = 'No:';
$lang['deactivate_submit_btn']               = 'Enviar';
$lang['deactivate_validation_confirm_label'] = 'confirmación';
$lang['deactivate_validation_user_id_label'] = 'ID Usuario';

// Create User
$lang['create_user_heading']                           = 'Crear Usuario';
$lang['create_user_subheading']                        = 'Ingrese la información del usuario a continuación.';
$lang['create_user_fname_label']                       = 'Nombres:';
$lang['create_user_lname_label']                       = 'Apellidos:';
$lang['create_user_company_label']                     = 'Compañia:';
$lang['create_user_identity_label']                    = 'Identificación:';
$lang['create_user_email_label']                       = 'Email:';
$lang['create_user_phone_label']                       = 'Teléfono:';
$lang['create_user_password_label']                    = 'Contraseña:';
$lang['create_user_password_confirm_label']            = 'Confirmar Contraseña:';
$lang['create_user_submit_btn']                        = 'Crear Usuario';
$lang['create_user_validation_fname_label']            = 'Nombres';
$lang['create_user_validation_lname_label']            = 'Apellidos';
$lang['create_user_validation_identity_label']         = 'Identificación';
$lang['create_user_validation_email_label']            = 'Correo Electrónico';
$lang['create_user_validation_phone_label']            = 'Teléfono';
$lang['create_user_validation_company_label']          = 'Nombre de la Compañia';
$lang['create_user_validation_password_label']         = 'Contraseña';
$lang['create_user_validation_password_confirm_label'] = 'Confirme la Contraseña';

// Edit User
$lang['edit_user_heading']                           = 'Editar Usuario';
$lang['edit_user_subheading']                        = 'Ingrese la información del usuario a continuación.';
$lang['edit_user_fname_label']                       = 'Nombres:';
$lang['edit_user_lname_label']                       = 'Apellidos:';
$lang['edit_user_company_label']                     = 'Compañia:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Teléfono:';
$lang['edit_user_password_label']                    = 'Contraseña: (Una nueva si la está cambiando)';
$lang['edit_user_password_confirm_label']            = 'Confirmar contraseña: (Sólo si la está cambiando)';
$lang['edit_user_groups_heading']                    = 'Miembro de Grupos';
$lang['edit_user_submit_btn']                        = 'Guardar Usuario';
$lang['edit_user_validation_fname_label']            = 'Nombres';
$lang['edit_user_validation_lname_label']            = 'Apellidos';
$lang['edit_user_validation_email_label']            = 'Correo Electrónico';
$lang['edit_user_validation_phone_label']            = 'Teléfono';
$lang['edit_user_validation_company_label']          = 'Nombre de la Compañia';
$lang['edit_user_validation_groups_label']           = 'Grupos';
$lang['edit_user_validation_password_label']         = 'Contraseña';
$lang['edit_user_validation_password_confirm_label'] = 'Confirmación de Contraseña';

// Create Group
$lang['create_group_title']                  = 'Crear Grupo';
$lang['create_group_heading']                = 'Crear Grupo';
$lang['create_group_subheading']             = 'Ingrese la información del grupo a continuación.';
$lang['create_group_name_label']             = 'Nombre del Grupo:';
$lang['create_group_desc_label']             = 'Descripción:';
$lang['create_group_submit_btn']             = 'Crear Grupo';
$lang['create_group_validation_name_label']  = 'Nombre del Grupo';
$lang['create_group_validation_desc_label']  = 'Descripción';

// Edit Group
$lang['edit_group_title']                  = 'Editar Grupo';
$lang['edit_group_saved']                  = 'Grupo guardado';
$lang['edit_group_heading']                = 'Edita Grupo';
$lang['edit_group_subheading']             = 'Ingrese la información del grupo a continuación.';
$lang['edit_group_name_label']             = 'Nombre de Grupo:';
$lang['edit_group_desc_label']             = 'Descripción:';
$lang['edit_group_submit_btn']             = 'Guardar Grupo';
$lang['edit_group_validation_name_label']  = 'Nombre de Grupo';
$lang['edit_group_validation_desc_label']  = 'Descripción';

// Change Password
$lang['change_password_heading']                               = 'Cambiar contraseña';
$lang['change_password_old_password_label']                    = 'Contraseña anterior:';
$lang['change_password_new_password_label']                    = 'Contraseña nueva (al menos %s caracteres de largo):';
$lang['change_password_new_password_confirm_label']            = 'Confirmar nueva contraseña:';
$lang['change_password_submit_btn']                            = 'Cambiar';
$lang['change_password_validation_old_password_label']         = 'Contraseña Anterior';
$lang['change_password_validation_new_password_label']         = 'Contraseña nueva';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirmar nueva Contraseña';

// Forgot Password
$lang['forgot_password_heading']                 = 'Olvide la Contraseña';
$lang['forgot_password_subheading']              = 'Por favor intrese su %s para que podamos enviarle un correo y restablecer su contraseña.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Enviar';
$lang['forgot_password_validation_email_label']  = 'Correo Electrónico';
$lang['forgot_password_identity_label'] 		 = 'Identificación';
$lang['forgot_password_email_identity_label']    = 'Correo Electrónico';
$lang['forgot_password_email_not_found']         = 'No hay registros de esa dirección de Correo Electrónico.';

// Reset Password
$lang['reset_password_heading']                               = 'Cambiar contraseña';
$lang['reset_password_new_password_label']                    = 'Contraseña nueva(al menos %s caracteres de largo):';
$lang['reset_password_new_password_confirm_label']            = 'Confirmar Nueva contraseña:';
$lang['reset_password_submit_btn']                            = 'Cambiar';
$lang['reset_password_validation_new_password_label']         = 'Conraseña nueva';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirmar nueva contraseña';
