<?php
session_start();

$_SESSION['nome'] = 'Bono';

echo $_SESSION['nome'];