<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class PasswordForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('current', 'password')
            ->add('new_password', 'password')
            ->add('new_password_confirmation', 'password')
            ->add('submit', 'submit');
    }
}
