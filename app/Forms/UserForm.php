<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('last_name', Field::TEXT)
            ->add('first_name', Field::TEXT)
            ->add('email', Field::EMAIL)
            ->add('submit', Field::BUTTON_SUBMIT);
    }
}
