<?php namespace Taskforcedev\Teamspeak\Http\Controllers;

use \Exception;
use Taskforcedev\Blog\Models\Post;
use Taskforcedev\Blog\Models\Status;
use Taskforcedev\Blog\Helpers\CSS\Bootstrap4;
//use Taskforcedev\Blog\Helpers\CSS\Bootstrap3;
//use Taskforcedev\Blog\Helpers\CSS\Foundation5;
use Taskforcedev\LaravelSupport\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $data = $this->buildData();
    }
}
