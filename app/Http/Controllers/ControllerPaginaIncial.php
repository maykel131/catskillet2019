<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialide;
use DB;
use App\Models\Consulta;
use App\Http\Requests\ConsultaResquest;
use Illuminate\Support\Facades\Mail;

class ControllerPaginaIncial extends Controller
{
    
    public function index()
    {   
        $medicos=DB::table('medico as a')->select(
                                'a.*',
                                'b.nome_especialidade'  
                                )
            ->join('especialidade as b','b.id_especialidade','=','a.id_especialidade')
            ->get();
        
       $especialidades=Especialide::all();
       return view('home.homepage',compact('medicos','especialidades'));
    }

    
    public function store(ConsultaResquest $request)
    {   
        $consulta = new Consulta;
        $consulta->id_especialidade=$request->app_specialty;
        $consulta->nome=$request->app_name;
        $consulta->email=$request->app_email;
        $consulta->telefone=$request->app_phone;

        $especialidade=Especialide::find($request->app_specialty);
        $agendamento =['especialidade'=>$especialidade->nome_especialidade,
                    'nome'=>$request->app_name,
                    'email'=>$request->app_email,
                    'telefone'=>$request->app_phone];
        if($consulta->save()){
            Mail::send('mail.consulta',$agendamento,function($message){
                $message->from('trejomaykel12@gmail.com','Clinica Maykel');
                $message->subject('Agendamento de Consulta');
                $message->to('trejomaykel@gmail.com');// email admin (Destinatario)
            });

            return view('home.appontment_success');
        }
    }

    public function show($id)
    {
        $medico=DB::table('medico as a')->select(
            'a.*',
            'b.nome_especialidade'  
            )
        ->join('especialidade as b','b.id_especialidade','=','a.id_especialidade')
        ->where('id_medico','=',$id)
        ->get();

        return view('home.doctor',compact('medico'));
    }

}
