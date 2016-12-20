<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Search users and show them.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->validate($request, [
            'query' => 'required|max:255',
        ]);

        $query = $request->input('query');

        if (! $query) {
            return redirect()->back();
        }

        $sql = "first_name || ' ' || last_name";

        if (config('database.default') === 'mysql') {
            $sql = "CONCAT(first_name, ' ', last_name)";
        }

        $users = User::where(DB::raw($sql), 'LIKE', "%{$query}%")
            ->orWhere('username', 'LIKE', "%{$query}%")
            ->get();

        return view('users.index', [
            'users' => $users,
        ]);
    }
}
