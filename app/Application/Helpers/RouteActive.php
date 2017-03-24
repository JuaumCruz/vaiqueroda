<?php

function route_is($routes = [])
{
    return collect((array) $routes)->search(function ($route) {
            return str_is($route, Route::currentRouteName());
        }) !== false;
}

function route_state($routes = [], $active_state = 'active', $inactive_state = '')
{
    return route_is($routes) ? $active_state : $inactive_state;
}