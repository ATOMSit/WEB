<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('admins.users.show', function ($trail, $user) {
    $trail->parent('home');
    $trail->push("Profil d'utilisateur", route('admins.users.show', ['user' => $user->id]));
});

Breadcrumbs::for('admins.users.edit', function ($trail, $user) {
    $trail->parent('admins.users.show',$user);
    $trail->push("Modifier mes informations", route('admins.users.edit', ['user' => $user->id]));
});
