<?php namespace Taskforcedev\Teamspeak;

use Taskforcedev\Teamspeak\Libraries\ts3admin as TeamSpeakService;

class TeamSpeak
{
    private $ts3;
    private $host;
    private $query_port;
    public $server_port;
    private $token;

    public function __construct()
    {
        $this->host = config('taskforce-teamspeak.server.host', 'localhost');
        $this->query_port = config('taskforce-teamspeak.server.query_port', 10011);
        $this->server_port = config('taskforce-teamspeak.server.server_port', 9987);
        $this->token = config('taskforce-teamspeak.server.token', "");
    }

    /**
     * Connect to the TeamSpeak Server
     * @return TeamSpeakService
     */
    public function connect()
    {
        $this->ts3 = new TeamSpeakService($this->host, $this->query_port);
        $this->ts3->connect();
        return $this->ts3;
    }

    public function disconnect()
    {
        $this->ts3->quit();
        $this->ts3 = '';
    }

    public function client()
    {
        $this->checkServer();
        return $this->ts3;
    }

    public function checkServer()
    {
        if (!is_object($this->ts3)) {
            $this->ts3 = $this->connect();
            $this->ts3->selectServer($this->server_port);
        }
    }

    public function getClients()
    {
        $clients = $this->ts3->clientList();
        $clients = $clients['data'];
        return $clients;
    }

    public function getServerGroups()
    {
        $groups = $this->ts3->serverGroupList();
        $groups = $groups['data'];
        return $groups;
    }

    public function kickUser($guid)
    {
        /* Handle Kick Logic Here */
        $this->ts3->tokenUse($this->token);
        $this->ts3->clientKick($guid);
    }

    // Static Functions

    public static function __callStatic($function, $arguments)
    {
        switch ($function)
        {
            case "kick":
                $function = 'kickUser';
                break;
            default:
                $function = '';
        }

        if ($function !== '')
        {
            /* Create a TS class */
            $ts = new TeamSpeak();
        }
    }
}
