<?php

class UserForm extends Form
{
  public function build()
  {
    $this->addFormField("userFirstName");
    $this->addFormField("userLastName");
    $this->addFormField("userDay");
    $this->addFormField("userMonth");
    $this->addFormField("userYear");
    $this->addFormField("userAddress");
    $this->addFormField("userCity");
    $this->addFormField("userPostcode")
    $this->addFormField("userPhone");
    $this->addFormField("userMail");
    $this->addFormField("userPassword");
  }
}
