<?php
namespace App\Http\Controllers;

use App\Models\Claim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;


class ClaimController extends Controller
{
    public function create()
    {
        return view('claims.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'device_name' => 'required|string|max:255',
            'claim_type'  => 'required|in:lost,damaged',
            'description' => 'nullable|string|max:1000',
        ]);

        Claim::create([
            'user_id'     => auth()->id(),
            'device_name' => $request->device_name,
            'claim_type'  => $request->claim_type,
            'description' => $request->description,
        ]);

        return redirect()->route('claims.index')->with('success', 'Claim submitted successfully.');
    }

    public function index()
    {
        $claims = Claim::where('user_id', auth()->id())->latest()->get();
        return view('claims.index', compact('claims'));
    }

}
