<?php
/**
 * Language file for role error/success messages
 */

return [

    'role_exists'        => 'Группа уже создана!',
    'role_not_found'     => 'Группа с id [:id] не создана.',
    'role_name_required' => 'Необходимо поле с названием.',
    'users_exists'        => 'Группа содержит пользователей и не может просто так быть удалена',

    'success' => [
        'create' => 'Группа успешно создана.',
        'update' => 'Группа успешно отредактирована.',
        'delete' => 'Группа успешно удалена.',
    ],

    'delete' => [
        'create'    => 'Возникли какие-то проблемы во время создания группы пользователей. Пожалуйста, повторите попытку позже.',
        'update'    => 'Возникли какие-то проблемы во время редактирования группы пользователей. Пожалуйста, повторите попытку позже.',
        'delete'    => 'Возникли какие-то проблемы во время удаления группы пользователей. Пожалуйста, повторите попытку позже.',
    ],

    'error' => [
        'role_exists' => 'Группа с таким именем уже существует, вам необходимо придумать другое уникальное имя.',
    ],

];
