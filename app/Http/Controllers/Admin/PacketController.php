<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Packet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PacketController extends Controller
{
    public function index()
    {
        $packets = Packet::all()->reverse();
        return view('admin.packet', compact('packets'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // die();
        try {
            $validator = Validator::make($data, [
                'title' => ['required'],
                'price' => ['required', 'numeric', 'min:0.00', 'max:1000000.00'],
                'label' => ['required'],
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->route('amdin.packet.index')
                    ->withErrors($validator)
                    ->withInput();
            }
            $validated = $validator->validated();
            Packet::create($validated);
            return redirect()->route('admin.packet.index');
        } catch (\Exception $e) {
            return redirect()->route('admin.packet.index');
        }
    }

    public function edit(Packet $packet)
    {
        $packets = Packet::all()->reverse();
        return view('admin.packet', compact('packets', 'packet'));
    }

    public function delete(Packet $packet)
    {
        $packet->delete();
        return redirect()->route('admin.packet.index');
    }

    public function update(Packet $packet, Request $request)
    {
        $data = $request->all();
        try {
            $validator = Validator::make($data, [
                'title' => ['required'],
                'price' => ['required', 'numeric', 'min:0.00', 'max:1000000.00'],
                'label' => ['required'],
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->route('amdin.packet.index')
                    ->withErrors($validator)
                    ->withInput();
            }
            $validated = $validator->validated();
            Packet::where('id', $packet->id)->update($validated);
            return redirect()->route('admin.packet.index');
        } catch (\Exception $e) {
            return redirect()->route('admin.packet.index');
        }
    }
}
