<?php
class BrokenPropertyInit
{
    private $lastLogin = time(); // won't run
}