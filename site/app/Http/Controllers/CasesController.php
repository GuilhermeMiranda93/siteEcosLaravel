<?php

namespace App\Http\Controllers;

use App\Texto;
use App\Galeria;
use App\Http\Controllers\Controller;

class CasesController extends Controller
{   

	public function inicio(){
		$items = Texto::where('localizacao',2)
		->where('excluido',0)
		->where('ativo',1)
		->get();

		foreach($items as $item){

			$slug = str_slug($item->titulo, '-');

			$item->slug = $slug;

		}

		return view('pages.cases',[

			'items' => $items

			]);
	}

	public function caseDetail($item){

		$posts = Texto::where('localizacao',2)
		->where('excluido',0)
		->where('ativo',1)
		->get();

		$items = null;

		foreach($posts as $post){
			$slug = str_slug($post->titulo, '-');

			if($slug == $item){
				$items = $post;
			}
		}

		$fotos = Galeria::where('localizacao',$items->galeria)
		->where('excluido',0)
		->where('ativo',1)
		->get();

		return view('pages.case_detail',[

			'items' => $items,
			'fotos' => $fotos

			]);
	}
}