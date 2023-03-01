<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use App\Models\Empleados;
use App\Http\Requests\StoreEmpleadosRequest;
use App\Http\Requests\UpdateEmpleadosRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use ProtoneMedia\LaravelQueryBuilderInertiaJs\InertiaTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Inertia\Inertia;

class EmpleadosController extends Controller
{

    /* public function __invoke()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('cedula_documento', 'LIKE', "%{$value}%")
                        ->orWhere('nombre1', 'LIKE', "%{$value}%")
                        ->orWhere('apellido1', 'LIKE', "%{$value}%")
                        ->orWhere('email', 'LIKE', "%{$value}%");
                });
            });
        });
        $empleados = QueryBuilder::for(Empleados::class)
        ->defaultSort('cedula_documento')
        ->allowedSorts(['id', 'nombre1', 'apellido1', 'email'])
        ->allowedFilters(['id', 'nombre1', 'apellido1', 'email', $globalSearch])
        ->paginate(8)
        ->withQueryString();

        return Inertia::render('Empleados/index', ['empleados' => $empleados])->table(function (InertiaTable $table) {
            $table->column('id', 'ID', searchable: true, sortable: true);
            $table->column('cedula_documento', 'Cedula', searchable: true, sortable: true);
            $table->column('nombre1', 'Nombre', searchable: true, sortable: true);
            $table->column('apellido1', 'Apellido', searchable: true, sortable: true);
            $table->column('email', 'Correo', searchable: true, sortable: true);
            $table->column('created_at', 'F. Registro', searchable: true, sortable: true);
        });
        
    } */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('cedula_documento', 'LIKE', "%{$value}%")
                        ->orWhere('nombre1', 'LIKE', "%{$value}%")
                        ->orWhere('apellido1', 'LIKE', "%{$value}%")
                        ->orWhere('email', 'LIKE', "%{$value}%");
                });
            });
        });
        $empleados = QueryBuilder::for(Empleados::class)
        ->defaultSort('cedula_documento')
        ->allowedSorts(['id', 'cedula_documento', 'nombre1', 'apellido1', 'email'])
        ->allowedFilters(['id', 'cedula_documento', 'nombre1', 'apellido1', 'email', $globalSearch])
        ->paginate(8)
        ->withQueryString();

        return Inertia::render('Empleados/index', ['empleados' => $empleados])->table(function (InertiaTable $table) {
            $table->column('id', 'ID', searchable: true, sortable: true);
            $table->column('cedula_documento', 'Cedula', searchable: true, sortable: true);
            $table->column('nombre1', 'Nombre', searchable: true, sortable: true);
            $table->column('apellido1', 'Apellido', searchable: true, sortable: true);
            $table->column('email', 'Correo', searchable: true, sortable: true);
            $table->column('created_at', 'F. Registro', searchable: false, sortable: false);
        });
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Empleados/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        Validator::make(Request::all(), [
            'cedula_documento' => ['min:8', 'required', 'string', 'max:15'],
            'documento_fiscal' => ['min:8', 'required', 'string', 'max:15'],
            'nombre1' => ['min:3', 'required', 'string', 'max:75'],
            'nombre2' => ['max:75'],
            'apellido1' => ['min:3', 'required', 'string', 'max:75'],
            'apellido2' => ['max:75'],
            'sexo' => ['min:3', 'required', 'string', 'max:25'],
            'nacionalidad' => ['min:3', 'required', 'string', 'max:30'],
            'fec_nacimiento' => ['min:3', 'required', 'string', 'max:30'],
            'lugar_nacimiento' => ['min:3', 'required', 'string', 'max:30'],
            'estado_civil' => ['min:3', 'required', 'string', 'max:30'],
            'fec_estado_civil' => ['min:3', 'required', 'string', 'max:15'],
            'email' => ['min:3', 'string', 'max:75'],
            'foto' => ['min:3', 'required', 'string', 'max:125'],
            'tipo_persona' => ['min:1', 'required', 'string', 'max:15'],
            'num_estatus' => ['min:1', 'required', 'string', 'max:15'],
            'gruposangre' => ['min:1', 'string', 'max:15'],
            'tipopersona' => ['min:1', 'required', 'string', 'max:15'],
            'ciudad' => ['min:1', 'required', 'string', 'max:30'],
            'sector' => ['min:1', 'required', 'string', 'max:60'],
            'fec_ultima_modificacion' => ['min:3', 'required', 'string', 'max:15'],
            'seguridad_usuario' => ['min:1', 'required', 'string', 'max:15'],
        ])->validate('storeData');

        $insert = Empleados::create([
            'cedula_documento' => Request::get('cedula_documento'),
            'documento_fiscal'  => Request::get('documento_fiscal'),
            'nombre1' => Request::get('nombre1'),
            'nombre2' => Request::get('nombre2'),
            'apellido1' => Request::get('apellido1'),
            'apellido2' => Request::get('apellido2'),
            'sexo' => Request::get('sexo'),
            'nacionalidad' => Request::get('nacionalidad'),
            'fec_nacimiento' => Request::get('fec_nacimiento'),
            'lugar_nacimiento' => Request::get('lugar_nacimiento'),
            'estado_civil' => Request::get('estado_civil'),
            'fec_estado_civil' => Request::get('fec_estado_civil'),
            'email' => Request::get('email'),
            'foto' => Request::get('foto'),
            'tipo_persona' => Request::get('tipo_persona'),
            'num_estatus' => Request::get('num_estatus'),
            'gruposangre' => Request::get('gruposangre'),
            'tipopersona' => Request::get('tipopersona'),
            'ciudad' => Request::get('ciudad'),
            'sector' => Request::get('sector'),
            'fec_ultima_modificacion' => Request::get('fec_ultima_modificacion'),
            'seguridad_usuario' => Request::get('seguridad_usuario'),
        ]);

        return Redirect::route('empleados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleados $empleados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpleadosRequest $request, Empleados $empleados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleados $empleados)
    {
        //
    }
}
