<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ViajeRequest;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Viaje;
use App\Horarios;
use App\Origen_Destino;
use App\Cooperativa;



class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin1',['only'=>['index','store','update','destroy']]);
     }
    public function index()
    {
      $origenes=Origen_Destino::all();
      
      return view('viaje.new',['origenes'=>$origenes]);

         
    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $viajes=DB::table('viaje')->where('estado','=','1')->get();
        // $cooperativas=DB::table('cooperativa')->get();
  $origenes=Origen_Destino::all();


        
       // return view('viaje.create',['viajes'=>$viajes,'horarios'=>$horarios,'cooperativas'=>$cooperativas]);

        
    //    return view('viaje.create',['horarios'=>$horarios,'origenes'=>$origenes]);
      return view('viaje.new',['origenes'=>$origenes]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ViajeRequest $request)
    {
        $viaje=new Viaje();
        $viaje->id_viaje=$request->get('id_viaje');
        $viaje->estado=$request->get('estado');
        $viaje->fecha_horario=$request->get('fecha_horario');

        $viaje->hora=$request->get('hora');

        $viaje->id_origen_destino=$request->get('id_origen_destino');
          
        
       
        
        $viaje->save();

        return Redirect::to('viaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viaje=Viaje::find($id);
        
        $response=['viaje'=>$viaje];
        

        if(!$viaje){
            return response()->json(['mensaje'=>'no se encontro el viaje'],404);
        }

        return response()->json($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $viaje=Viaje::findOrFail($id);
        $horarios=Horarios::all();
        $origenes=Origen_Destino::all();

        
        
        return view('viaje.edit',['viaje'=>$viaje,'horarios'=>$horarios,'origenes'=>$origenes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ViajeRequest $request, $id)
    {
        $viaje=Viaje::findOrFail($id);

        $viaje->estado=$request->get('estado');
        $viaje->id_origen_destino=$request->get('id_origen_destino');
        $viaje->id_horario=$request->get('id_horario');       
        
   
        $viaje->update();
        
        return Redirect::to('viaje');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $viaje=Viaje::findOrFail($id);
        $viaje->delete();
        //  $bus->condicion='0';
        //  $bus->update();
        return Redirect::to('viaje');


    }

    public function list(Request $request ){

        if($request){
              $query=trim($request->get('searchText'));
              if($query){
                $viajes=Viaje::where('id_viaje',$query)->orwhere('fecha_horario',$query)->paginate(5);
                
                 } 
            else
                $viajes=Viaje::paginate(5);
                
                return view('viaje.index',['viajes'=>$viajes,'searchText'=>$query]);
             
              
              
              }
    }
}
