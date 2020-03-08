<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\tblCurso as tblCurso;
use App\tblUsuario as tblUsuario;
use App\Mail\EmergencyCallReceived as EmergencyCallReceived;
class ControllerUsuario extends Controller
{
    public function Registrar(request $request){
        try{
            $data[] = "";
            $usuarioo = trim($request->input('txtusuario'));
            $passwordd = trim($request->input('txtpassword'));
            if($usuarioo != null){
                if($passwordd != null){
                   
                    $usuario = new tblUsuario;
                    $usuario->usuario = $usuarioo;
                    $usuario->password = $passwordd;
                    $usuario->save();
                  
                    $lastId = $usuario->idUsuario;
                    if($lastId > 0){
                        $data['ok'] = "";
                    }else{
                        $data['error'] = "";
                    }                  
                }else{
                    $data['passwordvacio'] = "";
                }
            }else{
                $data['usuariovacio'] = "";
            }     
            return json_encode($data);
            
        }catch(Exception $e){
            return json_encode($e);
        }
    }
    public function Login(request $request){
        try{           
            $data[] = "";
            $usuario = trim($request->input('txtusuario'));
            $password = trim($request->input('txtpassword'));
            if($usuario != null){
                if($password != null){                    
                    $usuario = new tblUsuario;
                    $data = $usuario::where('usuario', $usuario)
                                ->orWhere('password', $password)->get();           
                    if(!$data->isEmpty()){   
                        $data['ok'] = ""; 
                    }else{
                        $data['error'] = ""; 
                    }                          
                }else{
                    $data['passwordvacio'] = "";
                }
            }else{
                $data['usuariovacio'] = "";
            }     
            return json_encode($data);
        }catch(Exception $e){         
            return json_encode($e);
        }
    }

    public function crearCurso(request $request){
        try{
            
            $txtcurso = trim($request->input('txtcurso'));
            $txtdescripcion = trim($request->input('txtdescripcion'));         
            $cursos = new tblCurso;
            $cursos->nombreCurso = $txtcurso;
            $cursos->descripcionCurso = $txtdescripcion;
            $cursos->save(); 
            $data["ok"] = "";
            return json_encode($data);
        }catch(Exception $e){         
            return json_encode($e);
        }
    }

    public function deleteCurso(request $request){
        try{
            $idCurso = $request['value'];
            $data = tblCurso::where('idCurso', '=', $idCurso)->delete();         
            
            $layoutLogin = "layouts/tablacursos";
            $cursos = new tblCurso;
            $data = $cursos::all();   
            return Response::json(View::make('layouts.tablacursos',
             compact('data'))->render());
            
            
        }catch(Exception $e){         
            return json_encode($e);
        }
    }





}