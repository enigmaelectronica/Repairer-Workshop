<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - Español
*
* Author: EnigmaTeam
* 		  webmaster@enigmateam.org
*         @enigmahernandez
*
* Location: http://github.com/benedmunds/enigmaelectronica/
*
* Created:  30.07.2021
*
*/

// Creación de cuenta
$lang['account_creation_successful']            = 'Cuenta creada con éxito';
$lang['account_creation_unsuccessful']          = 'No se puede crear una cuenta';
$lang['account_creation_duplicate_email']       = 'Correo electrónico ya utilizado o no válido';
$lang['account_creation_duplicate_identity']    = 'Identificación ya utilizada o no válida';
$lang['account_creation_missing_default_group'] = 'El grupo predeterminado no está configurado';
$lang['account_creation_invalid_default_group'] = 'Conjunto de nombre de grupo predeterminado no válido';


// Contraseña
$lang['password_change_successful']          = 'Contraseña cambiada correctamente';
$lang['password_change_unsuccessful']        = 'No se puede cambiar la contraseña';
$lang['forgot_password_successful']          = 'Se envió por correo electrónico, un mensaje para restablecer Contraseña';
$lang['forgot_password_unsuccessful']        = 'No se puede restablecer la contraseña';

// Activación
$lang['activate_successful']                 = 'Cuenta activada';
$lang['activate_unsuccessful']               = 'No se puede activar la cuenta';
$lang['deactivate_successful']               = 'Cuenta desactivada exitosamente';
$lang['deactivate_unsuccessful']             = 'No es posible desactivar la cuenta';
$lang['activation_email_successful']         = 'Correo electrónico de activación enviado';
$lang['activation_email_unsuccessful']       = 'No se puede enviar correo electrónico de activación';

// Iniciar sesión / Cerrar sesión
$lang['login_successful']                    = 'Conectado con éxito';
$lang['login_unsuccessful']                  = 'Inicio de sesión incorrecto';
$lang['login_unsuccessful_not_active']       = 'La cuenta está inactiva';
$lang['login_timeout']                       = 'Bloqueado temporalmente. Inténtelo de nuevo más tarde.';
$lang['logout_successful']                   = 'Sesión Cerrada con éxito';

// Cambios de cuenta
$lang['update_successful']                   = 'Información de la cuenta actualizada con éxito';
$lang['update_unsuccessful']                 = 'No se puede actualizar la información de la cuenta';
$lang['delete_successful']                   = 'Usuario eliminado';
$lang['delete_unsuccessful']                 = 'No es posible eliminar el usuario';

// Grupos
$lang['group_creation_successful']           = 'Grupo creado con éxito';
$lang['group_already_exists']                = 'Nombre del grupo ya está siendo usado';
$lang['group_update_successful']             = 'Detalles del grupo actualizados';
$lang['group_delete_successful']             = 'Grupo eliminado';
$lang['group_delete_unsuccessful']           = 'No se puede eliminar el grupo';
$lang['group_delete_notallowed']             = 'No se puede eliminar el grupo de administradores';
$lang['group_name_required']                 = 'El nombre del grupo es un campo obligatorio';
$lang['group_name_admin_not_alter']          = 'No se puede cambiar el nombre del grupo de administradores';

// Correo electrónico de activación
$lang['email_activation_subject']            = 'Activación de cuenta';
$lang['email_activate_heading']              = 'Activar cuenta para %s';
$lang['email_activate_subheading']           = 'Haga clic en este enlace a %s.';
$lang['email_activate_link']                 = 'Activa tu cuenta';

// Olvidé mi contraseña
$lang['email_forgotten_password_subject']    = 'Verificación de contraseña olvidada';
$lang['email_forgot_password_heading']       = 'Restablecer contraseña para %s';
$lang['email_forgot_password_subheading']    = 'Por favor, haga clic en el enlace %s.';
$lang['email_forgot_password_link']          = 'Restablecer la contraseña';

// Nueva contraseña de correo electrónico
$lang['email_new_password_subject']          = 'Nueva contraseña';
$lang['email_new_password_heading']          = 'Nueva contraseña para %s';
$lang['email_new_password_subheading']       = 'Su contraseña ha sido restablecida a: %s';
