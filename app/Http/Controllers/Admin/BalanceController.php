<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BalanceHistory;
use App\Models\Dealer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BalanceController extends Controller
{
    public function index()
    {
        return view('admin.balance');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $filename = config('app.FILE_NAME');
        if (Storage::disk('public')->exists($filename)) {
            $balance = (float)Storage::disk('public')->get($filename);
        } else {
            Storage::disk('public')->put($filename, 0);
            $balance = (float)Storage::disk('public')->get($filename);
        }
        $validator = Validator::make($data, [
            'login' => ['required', 'exists:dealers,login'],
            'sum' => ['required', 'numeric', 'min:0.1', 'max:' . $balance],
        ]);
        if ($validator->fails()) {
            return redirect()
                ->route('admin.balance.index')
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        Dealer::where('login', $validated['login'])->increment('balance', $validated['sum']);
        $balance = $balance - $validated['sum'];
        Storage::disk('public')->put($filename, $balance);
        return redirect()->route('admin.dealer.index');
    }
}
