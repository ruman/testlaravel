<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\HTTP\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ProductController extends BaseController
{
    

    public function index(){
    	$listproducts = false;
    	if(Storage::disk('local')->exists('productlist.json')){
    		$listproducts = Storage::disk('local')->get('productlist.json');
    		$listproducts = json_decode( $listproducts );
    	}

    	return view('productform')->with('listproducts', $listproducts)->with('success', false);
    }

    public function store(Request $request){

    	//validation
    	$request->validate([
    		'productname'=> 'bail|required|max:255',
    		'stockquentity'	=>  'required|integer',
    		'peritemprice'	=>  'required|numeric',
    	]);

    	$listproducts = [];
    	$product = [
    		'name'	=> $request->input('productname'),
    		'stock'	=> $request->input('stockquentity'),
    		'price'	=> $request->input('peritemprice'),
    		'date'	=> Carbon::now()->format('Y-m-d h:m:s'),
    		'total'	=> $request->input('stockquentity')*$request->input('peritemprice')
    	];
    	if(Storage::disk('local')->exists('productlist.json')){
    		$listproducts = Storage::disk('local')->get('productlist.json');
    		$listproducts = json_decode( $listproducts );
    	}
    	$listproducts[] = $product;
    	Storage::disk('local')->put('productlist.json', json_encode($listproducts));
    	$message = 'Product saved';

    	return redirect('/form')->with('success', $message);

    }
}
