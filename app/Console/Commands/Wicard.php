<?php

namespace App\Console\Commands;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Wicard extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wicard';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Wicard user files';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $wicard = Storage::disk('wicard');
        foreach ($wicard->files() as $file) {
            $wicard->delete($file);
        }
        $allServers = DB::table('client_packets')->where('client_packets.end_date', '>', Carbon::now())->leftJoin('packets', 'client_packets.packet_id', '=', 'packets.id')->leftJoin('clients', 'client_packets.client_id', '=', 'clients.id')->select('clients.server')->get()->toArray();
        $servers = [];
        foreach ($allServers as $server) {
            array_push($servers, $server->server);
        }
        $servers = array_unique($servers);
        foreach ($servers as $index => $server) {
            Storage::disk('wicard')->put('wicard' . $server . '.user', '');
            // $clients = DB::table('client_packets')->where(['client_packets.end_date' => Carbon::now(), 'clients.server' => $server->server])->leftJoin('packets', 'client_packets.packet_id', '=', 'packets.id')->leftJoin('clients', 'client_packets.client_id', '=', 'clients.id')->select('clients.login', 'clients.password', 'clients.server', 'packets.label', 'client_packets.end_date')->get();
            $allClients = DB::table('client_packets')->where('client_packets.end_date', '>', Carbon::now())->where(['clients.server' => $server])->leftJoin('packets', 'client_packets.packet_id', '=', 'packets.id')->leftJoin('clients', 'client_packets.client_id', '=', 'clients.id')->select('clients.login')->get()->toArray();
            $clients = [];
            foreach ($allClients as $client) {
                array_push($clients, $client->login);
            }
            $clients = array_unique($clients);
            foreach ($clients as $client) {
                $labels = '';
                $packets = DB::table('client_packets')->where('client_packets.end_date', '>', Carbon::now())->where(['clients.server' => $server, 'clients.login' => $client])->leftJoin('packets', 'client_packets.packet_id', '=', 'packets.id')->leftJoin('clients', 'client_packets.client_id', '=', 'clients.id')->select('packets.label', 'clients.password as password')->get()->toArray();
                $password = '';
                foreach ($packets as $packet) {
                    $labels .= $packet->label . ',';
                    $password = $packet->password;
                }
                $content = "[account]
login = $client
password = $password
filter = ac,$labels
rule = next
debug = 0
";
                Storage::disk('wicard')->append('wicard' . $server . '.user', $content);
            }
        }
    }
}
