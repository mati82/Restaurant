<?php
class LoginForm extends Form
{
  public function build()
  {
    $this->addFormField("loginEmail");
    $this->addFormField("loginPwd");
  }
}