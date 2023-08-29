<?php


use Illuminate\Http\Request;

class WechatLoginController
{

    public function login(WechatLoginService $service)
    {

        $service->login();

    }
}
