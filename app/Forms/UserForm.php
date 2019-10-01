<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('username', 'text')
            ->add('password', 'password')
            ->add('remember_me', 'checkbox');
    }
}
