<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者是否延迟加载
     * @var bool
     */
    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //绑定接口到容器
        $this->app->bind('App\Contracts\LanguageContract','App\Services\ChineseService');

    }

    public function provides()
    {
        return ['App\Contracts\LanguageContract'];
    }

}
