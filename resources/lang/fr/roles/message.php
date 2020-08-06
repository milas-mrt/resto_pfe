<?php
/**
 * Language file for role error/success messages
 */

return [

    'role_exists'        => 'Role déja existant!',
    'role_not_found'     => "Le role [:id] n'existe pas.",
    'role_name_required' => 'Le champ nom est requis',
    'users_exists'        => 'Ce role contient des utilisateurs, il ne peut pas être supprimé',

    'succès' => [
        'create' => 'Le role a bien été créé.',
        'update' => 'Le role a bien été mis à jour.',
        'delete' => 'Le role a bien été supprimé.',
    ],

    'delete' => [
        'create' => 'Il y a eu un problème lors de la création du role. Merci de réessayer.',
        'update' => 'Il y a eu un problème lors de la mise à jour du role. Merci de réessayer.',
        'delete' => 'Il y a eu un problème lors de la suppréssion du role. Merci de réessayer.',
    ],

    'error' => [
        'role_exists' => 'Un role avec ce nom existe déja, les noms doivent être uniques pour les rolees.',
    ],

];
