<?php

namespace App\Http\Controllers;

use App\SocialNetwork;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{

    public function index()
    {
        $socialNetwork = SocialNetwork::all();
        return view('socialNetwork', compact('socialNetwork'));
    }

    public function create()
    {
        $socialNetwork = SocialNetwork::all();
        return view('createSocialNetwork', compact('socialNetwork'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $socialNetwork = new SocialNetwork();
        $socialNetwork->name = $data['name'];
        $socialNetwork->url = $data['url'];
        $socialNetwork->incone = store_file($request, 'icone', 'logo');
        if($socialNetwork->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao criar rede social');
        }
        return redirect()->route('rede-social.index');
    }


    public function edit($id)
    {
        return view('socialNetworkEdit', [
            'socialNetwork' => SocialNetwork::findOrFail($id)
        ]);
        }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $socialNetwork = SocialNetwork::findOrFail($id);
        $socialNetwork->name = $data['name'];
        $socialNetwork->url = $data['url'];
        $socialNetwork->icone = store_file($request, 'icone', 'logo');
        if(!$socialNetwork->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao alterar rede social');
        }
        return redirect()->route('rede-social.update');
    }

    public function destroy($id)
    {
        $socialNetwork = SocialNetwork::findOrFail($id);

        if(!$socialNetwork->delete()) {
            return redirect()->back()->withInput()->withErrors('Erro ao deletar rede social');
        }
        return redirect()->route('rede-social.destroy');
    }
    
}
