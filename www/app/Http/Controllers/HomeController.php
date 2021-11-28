<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function panel()
    {
        return view('panel');
    }

    public function painel()
    {
        return view('painel.teste');
    }
    
    // public function contact()
    // {
    //     return view('contact');
    // }
    
    // public function attendance()
    // {
    //     return view('attendance');
    // }

    // public function psychologist()
    // {
    //     return view('psychologist');
    // }

    // public function topsychologist()
    // {
    //     return view('topsychologist');
    // }

    // public function search()
    // {
    //     return view('search')->with('data', $datas);
    // }


    // public function search()
    // {
    //     $users = User::all();
        
    //     return view('search', compact('users'));
    // }
    
    // public function zoom()
    // {
    //     return view('zoom/email/PHPMailer/examples/gmail');
    // }


    // public function pesquisar()
    // {
    //   $texto = Input::get('texto');
    //   $status = Input::get('status');
    //   $pesquisa = Produtos::where('erp_status', 'like', '%'.$status.'%')
    //  ->orWhere('erp_cost','like','%'.$texto.'%')
    //  ->orWhere('erp_productid','like','%'.$texto.'%')
    //  ->orWhereHas('descricao', function ($query) use ($texto) {
    //      $query->where('erp_name', 'like', '%'.$texto.'%');
    //  })
    //  ->orderBy('erp_status')
    //  ->paginate(20);

    // }
}