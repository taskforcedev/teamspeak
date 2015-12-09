<?php namespace Taskforcedev\Teamspeak\Http\Controllers;

use Taskforcedev\LaravelSupport\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $data = $this->buildData();

        if (!array_key_exists('section', $data)) {
            $data['section'] = config('taskforce-teamspeak.options.sidebar_section', 'sidebar');;
        }
        $data['title'] = config('taskforce-teamspeak.page_title', 'TeamSpeak');

        return view('taskforce-teamspeak::index');
    }
}
