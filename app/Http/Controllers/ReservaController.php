<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReservaRequest;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Reserva;
use App\User;
use App\Viaje;
use App\Cooperativa;
use App\Origen_Destino;


class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
         $this->middleware('admin1',['only'=>['index','store','update','destroy']]);
      }

    public function index(Request $request)
    {
       $users=User::all();
       $viajes=Viaje::all();
       $cooperativas=Cooperativa::all();
       $origenes=Origen_Destino::all();

        return view('reserva.new',['users'=>$users,'viajes'=>$viajes,'cooperativas'=>$cooperativas,'origenes'=>$origenes]);
    }


     public function postInsertUser(Request $request){
        if($request->ajax())
        {
            return response(User::create($request->all()));
        }
    }


     public function postInsertViaje(Request $request){
        if($request->ajax())
        {
            return response(Viaje::create($request->all()));
        }
    }

      public function postInsertCooperativa(Request $request){
        if($request->ajax())
        {
            return response(Cooperativa::create($request->all()));
        }
    }


   



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $users=User::all();
        return view('reserva.create',['users'=>$users]);

    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservaRequest $request)
    {
        $reserva=new Reserva();
       // $reserva->id_reserva=$request->get('id_reserva');
        $reserva->fecha_reserva=$request->get('fecha_reserva');    
        $reserva->hora_reserva=$request->get('hora_reserva');    

        $reserva->estado=$request->get('estado');

        
        $reserva->id=auth()->user()->id;
       
        
        $reserva->save();

        return Redirect::to('reserva');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva=Reserva::find($id);
        
        $response=['reserva'=>$reserva];
        

        if(!$reserva){
            return response()->json(['mensaje'=>'no se encontro el reserva'],404);
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
        
        $reserva=Reserva::findOrFail($id);
      
        $users=User::all();
        
        return view('reserva.edit',['reserva'=>$reserva,'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservaRequest $request, $id)
    {
        $reserva=Reserva::findOrFail($id);
       

        $reserva->fecha_reserva=$request->get('fecha_reserva');    
        $reserva->hora_reserva=$request->get('hora_reserva');    

        $reserva->estado=$request->get('estado');

        
        $reserva->id=auth()->user()->id;
       

   
        $reserva->update();
        
        return Redirect::to('reserva');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva=Reserva::findOrFail($id);
        $reserva->delete();
        //  $bus->condicion='0';
        //  $bus->update();
        return Redirect::to('reserva');


    }

    public function list(Request $request){
           if($request){
        $query=trim($request->get('searchText'));//trim, quita espacios entre inicio y final
        // $reservas=DB::table('reserva as r')
        // ->join('clientes as c','c.ci','=','r.ci')
        // ->join('viaje as v','v.id_viaje','=','r.id_viaje')
        // ->join('users as u','u.id','=','r.id')
        
        // ->select('r.id_reserva','r.fecha_reserva','r.estado','r.cantidad','r.asiento',DB::raw('CONCAT(c.nombre," ",c.apellido) as Nombre') ,'c.telefono as telefono','v.id_viaje as id_viaje','u.name as id')
        // ->where('r.estado','like','%'.$query.'%')
         
        // ->orderBy('id_reserva','desc')
        // ->paginate(8);
        if($query){
            $reservas=Reserva::where('id_reserva',$query)->orwhere('fecha_reserva',$query)->paginate(5);
            
             } 
        else{
            $reservas=Reserva::orderBy('id_reserva','desc')->paginate(10);
        }
                
                return view('reserva.index',['reservas'=>$reservas,'searchText'=>$query]);

        
        }
    }
}
