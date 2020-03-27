<?php

namespace App\Http\Controllers;

use App\SocialNetwork;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{



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
        $socialNetwork->icone = store_file($request, 'icone', 'logo');

        if(!$socialNetwork->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao adionar rede-social');
        }
        return redirect()->route('list.social_network');
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
        return redirect()->route('list.social_network');
    }

    public function destroy($id)
    {
        $socialNetwork = SocialNetwork::findOrFail($id);
        $socialNetwork->delete();
        return redirect()->route('list.social_network');
    }

}
