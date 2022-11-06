<?php
namespace App\Http\Controllers;
use App\Models\Machine;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MachinesController 
{
  public function index()
  {
    //$machines = DB::select('SELECT id, name FROM machines');
    //dd($machines);
    $machines = Machine::all();
    //dd($machines);
    return view('machines.index')->with('machines', $machines);
  }
  public function show($id)
  {
    echo "<h1>Visualizar Maquina $id</h1>";
  }
  
  public function create()
  {
    return view('machines.create');
  }

  public function store(Request $request)
  {
    Machine::create($request->all());

    return redirect('/listar-maquinas');
  }
}
?>