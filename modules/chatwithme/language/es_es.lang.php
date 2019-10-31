<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

$mod_strings = array(
	'chatwithme' => 'Habla conmigo',
	'SINGLE_chatwithme' => 'Habla conmigo',
	'chatwithme ID' => 'ID Habla conmigo',
	'ErrProcessingAction' => 'Error procesando la acción.',
	'IncorrectFormat' => 'Lo siento pero no he entendido ese comando',
	'Incorrect parameters' => 'Lo siento pero los parámetros introducidos son incorretos.',
	'MMUserIDUpdated' => 'Se ha actualizado el ID del usuario Mattermost',
	'MMUserIDError' => 'El usuario no se ha podido encontrar ni crear en Mattermost!',
	'ThisIsHelp' => 'Esta es la sintaxis que entiendo:',
	'HelpTitle' => '**Hola!**, estos son los comandos que puedes utilizar:',
	'record' => 'registro',
	'deleted' => 'ha sido eliminado',
	'notdeleted' => 'NO ha sido eliminado',
	'QuestionError' => 'Error procesando la pregunta.',
	'FoundSome' => 'No he podido encontrar el elemento indicado.',
	'OneOfThese' => '¿Podría ser alguno de estos?',
	'ClickHereForFullResults' => 'Pulsa aquí para ver la respuesta completa',
	'_active' => 'Integración Activa',
	'_cmdlang' => 'Idioma de los Comandos',
	'_username' => 'Nombre de usuario con el que enviar mensajes',
	'_icon_url' => 'URL del icono a mostrar en los mensajes',
	'_posturl' => 'URL Mattermost (sin separador final)',
	'_tokens' => 'Lista separada por comas de tokens válidos',
	'_mmuserpasswd' => 'Contraseña de usuario mattermost predeterminada (utilizada al sincronizar usuarios)',
	'LBL_MODULE_NOT_FOUND' => 'No he podido encontrar el módulo indicado',
	'LBL_FIELD_NOT_FOUND' => 'No he podido encontrar el campo indicado',
	'LBL_NOSEARCHRESULTS' => 'No he podido encontrar ninguna información con esa condición',
	'LBL_SEARCHRESULTS' => 'Resultados de la búsqueda:',
	'MMInvalidUser' => 'Usuario mattermost inválido: no se ha podido encontrar el identificador del usuario mattermost.',
	'OkWillDo' => 'Vale, así lo haré :-)',
	'Reminder Postponed' => 'Recordatorio Atrasado. Te digo algo pronto.',
	'Reminder Discarded' => 'Recordatorio Descartado. No te volveré a avisar de esto.',
	'Reminder Command Not Recognized' => '**ERROR*: Comando de recordatorio no reconocido',
	'Color' => 'Color',
	'Green' => 'Verde',
	'Blue' => 'Azul',
	'Yellow' => 'Amarillo',
	'Red' => 'Rojo',
	'Msg is ephemeral' => 'Mensaje es efímero',
	'Title' => 'Título',
	'Body' => 'Mensaje',
	'Buttons' => 'Botones',
	'optional' => 'opcional',
	'First Button Title' => 'Título Primer Botón',
	'First Button Parameters' => 'Parámetros Primer Botón',
	'Second Button Title' => 'Título Segundo Botón',
	'Second Button Parameters' => 'Parámetros Segundo Botón',
	'Third Button Title' => 'Título Tercer Botón',
	'Third Button Parameters' => 'Parámetros Tercer Botón',
	'Postpone' => 'Postponer',
	'Discard' => 'Descartar',
	'StartedNewTimer' => 'Vale, he iniciado un nuevo contador :stopwatch:',
	'ThereIsOpenTimer' => ':warning: Hay otro contador en marcha, paralo primero',
	'NoOpenTimer' => ':warning: no he encontrado ningún contador en marcha',
	'ProjectNotFound' => ':warning: no he podido encontrar ese proyecto',
	'NoTimeDescription' => 'Necesito que me des la descripción de la tarea, inténtalo de nuevo, por favor.',
	'TimerStoped1' =>'Contador para a las ',
	'TimerStoped2' =>', solo necesito algunos detalles para esta entrada de tiempo, ¿en qué proyecto trabajaste?',
	'ProjectAdded1' =>'Vale, he seleccionado ',
	'ProjectAdded2' =>'como proyecto, **¿Qué has hecho?** escribe _**#tareadeltiempo** {título}_',
	'ProjectAdded3' =>'como proyecto, **¿Qué has hecho?** escribe _**#registratiempo** {título}_',
	'UpdateFeedback1' => ':tada: He actualizado esa entrada de tiempo, aquí hay un resumen: ',
	'For' => 'para',
	'UpdateFeedback2' => ' con los detalles',
	'UpdateFeedback3' => ', type of work:',
	'ShowAll' => 'Mostrar Todos',
	'CallError' => ':x: Llamada inválida',
	'AddProject' => '¿En qué proyecto has trabajado? Te muestro los últimos proyectos en los que has trabajado.' ,
	'AddLogTime' => ', **¿Cuánto tiempo has estado en esta tarea?**. formato _#tiempo {horas minutos}_ Puedes introducir el tiempo como \'3.3\', o \'3.3\', o \'3hrs 30 mins\' ',
	'Pname' => 'NOMBRE TAREA',
	'TypeProject' => 'Indica la tarea en la que has trabajado, sintaxis _```#tareadeltiempo``` ``{ID}``_',
	// commands
	'delete_command' => '**borra {registro} [si]**: Borra un registro',
	'show_command' => '**muestra {pregunta}**: Ejecuta una pregunta y ver los resultados',
	'find_command1' => '**busca [{módulo}] {término}**: Busca el término dado globalmente o en el módulo dado',
	'find_command2' => '**busca módulo {campo}{condición}{valor}**: Busca el {campo} del módulo con el {valor}, donde condición puede ser =|>|>=|<|<=|%',
	'see_command' => '**ver {registro}**: Ver el detalle de un registro',
	'remindme_command1' => '**avisame {sobre esto} [at] $1 h:m**: enviará un mensaje más o menos **A** la hora indicada.',
	'remindme_command2' => '**avisame {sobre esto} [in] Dd Hh Mm**: enviará un mensaje más o menos **EN** D días, H horas y M minutos',
	'starttimer_command' => '**iniciacontador** : iniciará un nuevo temporizador si no hay un uno abierto',
	'stoptimer_command' => '**pararcontador** : parará el último temporizador abierto si existe',
	'logtime_command' => 'creará un nuevo registro de entrada de control de tiempo y solicitará más detalles',
	'logtask_command' => '**logtask {título}** : Insertar el título del registro de control de tiempo.',
	'timespent_command' => '**tiempo {horas minutos}** : ejemplo 3.3 o 3:3 o 3hrs 30mins',
	'taskforproject_command' => '**tareadeltiempo** {ID} asocia la tarea con el registro de tiempo',
	'update_command' => '**actualiza {crmid} {campo}={valor}**: Actualiza un campo de un registro',
);
?>
