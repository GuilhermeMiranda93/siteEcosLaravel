<?php

namespace App\Http\Controllers;

use App\Texto;

use Illuminate\Http\Request;


class ServicesController extends Controller
{
    public function inicio(){
		$items = Texto::where('localizacao',3)
		->where('excluido',0)
		->where('ativo',1)
		->get();

		foreach($items as $item){

			$slug = str_slug($item->titulo, '-');

			$item->slug = $slug;

		}

		return view('pages.servicos',[

			'items' => $items

			]);
	}

	public function servicoDetail($item){

		return view('pages.'.$item);
	}
}
