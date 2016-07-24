<?php
require_once('jsonRPCServer.php');
include('member.php');

$obj = new Member();

jsonRPCServer::handle($obj) or print('no request');