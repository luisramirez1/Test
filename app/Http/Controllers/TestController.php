<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntas;
use App\Usuarios;
use App\Areas_Usuarios;
use App\Areas;
use App\Res_Pre;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestCorreo;


class TestController extends Controller
{
    public function test()
    {
		$preguntas = Preguntas::all();
        return view('/test', compact('preguntas'));
    }

    public function enviarTest(Request $datos) {
		$preguntas = Preguntas::all();
		$id = Auth::user()->id;
		$usuario = Usuarios::find($id);
        $nP = $usuario->npregunta;
        $nnP = $nP + 1;
        $update=DB::table('users')
              ->where('id', '=', $id)
              ->update(['npregunta' => $nnP]);
      	
      	foreach($preguntas as $p){
	      	if($datos->input($p->id) == 1){
	      		DB::table('res_pre')->insert([
    				['id' => $id, 'id_pregunta' => $p->id, 'npregunta' => $nnP]
				]);
		    }
    	}

		$pre = Auth::user()->npregunta + 1;
        $a1=DB::table('res_pre')
            ->where('id', '=', $id)
            ->where('npregunta', '=', $pre)
            ->whereIn('id_pregunta', [4, 9, 12, 20, 28, 31, 35, 39, 43, 46, 50, 65, 67, 68, 75, 77])
            ->count();
        $nuevo = new Areas_Usuarios;
        $nuevo->id = 1;
        $nuevo->id_usuario = $id;
        $nuevo->calificacion = $a1 * 6.25;
        $nuevo->npregunta = $pre;
        $nuevo->save();
        
        $a2=DB::table('res_pre')
            ->where('id', '=', $id)
            ->where('npregunta', '=', $pre)
            ->whereIn('id_pregunta', [6, 13, 23, 25, 34, 37, 38, 42, 49, 52, 55, 63, 66, 70, 72, 78])
            ->count();
        $nuevo2 = new Areas_Usuarios;
        $nuevo2->id = 2;
        $nuevo2->id_usuario = $id;
        $nuevo2->calificacion = $a2 * 6.25;
        $nuevo2->npregunta = $pre;
        $nuevo2->save();

        $a3=DB::table('res_pre')
            ->where('id', '=', $id)
            ->where('npregunta', '=', $pre)
            ->whereIn('id_pregunta', [5, 10, 15, 19, 21, 26, 29, 33, 36, 44, 53, 56, 59, 62, 71, 80])
            ->count();
        $nuevo3 = new Areas_Usuarios;
        $nuevo3->id = 3;
        $nuevo3->id_usuario = $id;
        $nuevo3->calificacion = $a3 * 6.25;
        $nuevo3->npregunta = $pre;
        $nuevo3->save();

        $a4=DB::table('res_pre')
            ->where('id', '=', $id)
            ->where('npregunta', '=', $pre)
            ->whereIn('id_pregunta', [1, 7, 11, 17, 18, 24, 30, 41, 48, 51, 58, 60, 61, 64, 73, 79])
            ->count();
        $nuevo4 = new Areas_Usuarios;
        $nuevo4->id = 4;
        $nuevo4->id_usuario = $id;
        $nuevo4->calificacion = $a4 * 6.25;
        $nuevo4->npregunta = $pre;
        $nuevo4->save();

        $a5=DB::table('res_pre')
            ->where('id', '=', $id)
            ->where('npregunta', '=', $pre)
            ->whereIn('id_pregunta', [2, 3, 8, 14, 16, 22, 27, 32, 40, 45, 47, 54, 57, 69, 74, 76])
            ->count();
        $nuevo5 = new Areas_Usuarios;
        $nuevo5->id = 5;
        $nuevo5->id_usuario = $id;
        $nuevo5->calificacion = $a5 * 6.25;
        $nuevo5->npregunta = $pre;
        $nuevo5->save();
        Mail::to(Auth::user()->email)->send(new TestCorreo(Auth::user()));
    	return Redirect('/resultados/' . $id . '/' . $pre)->with('status', ' Test realizado correctamente. Tus resultados tambien fueron enviados a tu correo. ¡GRACIAS!');
    }

    public function resultados($idU, $idP)
    {
        $areas=DB::table('areas AS a')
            ->join('areas_usuarios AS au', 'a.id', '=', 'au.id')
            ->where('au.id_usuario', '=', $idU)
            ->where('au.npregunta', '=', $idP)
            ->orderBy('calificacion', 'desc')
            ->limit(3)
            ->get();
        $canti = $idP;
        return view('/resultados', compact('areas', 'canti'));
    }

    public function areas($id)
    {
        $area = Areas::find($id);
        return view('/areas', compact('area'));
    }

    public function editar($id)
    {
        $usuarios = Usuarios::find($id);
        
        return view('/editar', compact('usuarios'));
    }

    public function actualizar($id, Request $datos){
        $nuevo = usuarios::find($id);
        //$tipo = Poke_Tipo::find($id);  
        $file = Input::file('imagen');
        $nombre = $file->getClientOriginalName();
        $tipos = $datos->input("tipo");
        $file->move('images/usuarios', $nombre);
        $nuevo->name=$datos->input('name');
        $nuevo->email=$datos->input('email');
        $nuevo->tel=$datos->input('tel');
        $contraseña = bcrypt($datos['password']);
        $nuevo->password= $contraseña;
        $nuevo->imagen=$nombre;
        $nuevo->save();

        return Redirect('/');
    }

    public function eliminarUI($id) {
        Usuarios::find($id)->delete();
        return Redirect('/')->with('status', ' Cuenta eliminada de forma permanente. ¡Hasta Luego!');

    }

    public function consultarU() {
        $usuarios =DB::table('users')
           ->where('tipoUsuario', '=', 2)
           ->get();
       
      return view('/consultaUsuarios', compact('usuarios'));
    }

    public function vistaRapida($id) {
        $usuarios =Usuarios::find($id);
        $areas=DB::table('areas AS a')
            ->join('areas_usuarios AS au', 'a.id', '=', 'au.id')
            ->where('au.id_usuario', '=', $id)
            ->orderBy('calificacion', 'desc')
            ->limit(3)
            ->get();

      return view('/vistaRapida', compact('areas', 'usuarios'));
    }

    public function generarPDF($idU, $idP){
        $areas=DB::table('areas AS a')
            ->join('areas_usuarios AS au', 'a.id', '=', 'au.id')
            ->where('au.id_usuario', '=', $idU)
            ->orderBy('au.calificacion', 'desc')
            ->limit(3)
            ->get();
        $canti = $idP;
        $vista=view('generarPDF', compact('areas', 'canti'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream("TestVocacional.pdf");
    }
}

