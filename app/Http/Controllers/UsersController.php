<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\Request;
 */
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use ProtoneMedia\LaravelQueryBuilderInertiaJs\InertiaTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Inertia\Inertia;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    
                    // Copy: Begin
                    $query->orwhereHas('roles', function ($subquery) use ($value) {
                        $subquery->where('name', 'LIKE', "%{$value}%");
                    });
                    // Copy: End
                    $query
                        ->orWhere('name', 'LIKE', "%{$value}%")
                        ->orWhere('email', 'LIKE', "%{$value}%");
                });
            });
        });
        
        $users = QueryBuilder::for(User::class)
            ->defaultSort('id')
            ->with('roles:id,name')
            ->allowedSorts(['id', 'name', 'email'])
            ->allowedFilters(['id', 'name', 'email', $globalSearch])
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('Users/index', [
            'users' => $users,
        ])->table(function (InertiaTable $table) {
            $table
                ->withGlobalSearch()
                ->defaultSort('id')
                ->column('id', 'ID', searchable: true, sortable: true)
                ->column('name', 'Nombre y Apellido', searchable: true, sortable: true, canBeHidden: false)
                ->column('email', 'Correo', searchable: true, sortable: true)
                ->column(key: 'roles_name', label: 'Roles', searchable: true)
                ->column('created_at', 'F. Registro', searchable: false, sortable: false)
                ->column(label: 'Acciones');
        });
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Users/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make(Request::all(), [
            'user' => ['min:8', 'required', 'string', 'max:15'],           
            'email' => ['min:3', 'string', 'max:75', 'unique:users'],
            'password' => ['min:3', 'required', 'string', 'max:125'],            
        ])->validate('storeData');

        $insert = User::create([
            'user' => Request::get('user'),
            'email'  => Request::get('email'),
            'password' => Request::get('password'),
        ]);

        return Redirect::route('admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $edit = Inertia::render('Users/edit', [
            'editData' => [
                'id' => $user->id,
                'name'  => $user->name,
                'email'  => $user->email,
                'password'  => $user->password,
            ],
        ]);

        return $edit;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
