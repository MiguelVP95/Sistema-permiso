<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Models\Codigo;
use App\Models\User;
use App\Models\Planilla;
use App\Models\funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FuncionarioController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //leer la base de datos y cargar los datos en $funcionario
       $data['funcionarios'] = Funcionario::paginate(5);
       return view('funcionario')->with($data);
       
        
    }
  
   
    public function planilla()
    {
        //
        //leer la base de datos y cargar los datos en $funcionario
       
        $data['codigos'] = codigo::all();
        return view('planilla')->with($data);

        
        
        $date = Carbon::now();

        
    }

    public function create()
    {        
        
    
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        //
        $lista['codigos'] = Codigos::all();
        return view('plantilla',$lista);
        

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



     //GUARDA EN LA TABLA PLANILLAS
    public function store(Request $request)
    {
        
     $date = Carbon::now();    


        //planilla::create($request->all());

        
    
        $request-> validate([
            'cod_motivo'=> 'required',
            'fecha_inicio'=> 'required',
            'fecha_fin'=> 'required',
            'hora_fin'=> 'required',
            'hora_inicio'=> 'required',

        ],
        [
            'exits'=>'no existe',
            'required'=>'Selección requerida'
            
        ]
    
        );
    
    
        DB::table('planillas')->insert(
            ['id' => $request->id,'fecha'=>$date,'id_funcionario' => $request->user()->username,'nombre' => $request->user()->name, 
            'sede' => $request->user()->sede,'dependencia'=>$request->user()->dependencia,'cod_motivo'=> $request->cod_motivo, 
            'fecha_inicio'=>$request->fecha_inicio, 'fecha_fin'=>$request->fecha_fin, 'hora_fin'=>$request->hora_fin,
            'hora_inicio'=>$request->hora_inicio, 'obs'=>$request->obs]
        );
       
        

        


        
        return redirect('/planilla');
    }



    



    public function update(Request $request)
    {
    

        //guardar su usuario
        $data = $request;
        User::create([
            'idfuncionario'=>$data['idfuncionario'],
            'name' => $data['name'],
            'sede' => $data['sede'],
            'dependencia' => $data['dependencia'],
            'password' => Hash::make($data['password']),
            'rol' => 'funcionario',

        ]);
        return redirect('/');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(funcionario $funcionario)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(funcionario $funcionario)
    {
        //
    }
}
