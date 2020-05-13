<?php

abstract class Model
{
    /**
     * Although it looks like ISUD, please read it as CRUD.
     */
    abstract function Insert();
    abstract function Select();
    abstract function Update();
    abstract function Delete();
}
