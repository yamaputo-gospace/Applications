<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Auth;
use Intervention\Image\Facades\Image;
use App\Services\CategoryListServices;


class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categoryList = CategoryListServices::CategoryList();
        $list = array();
        foreach($categoryList as $category => $value){
            $list[$category] = Item::where('category', $category)->get();
        }
        return view('index')->with(['list' => $list , 'categoryList' => $categoryList]);
    }

    public function add(Request $request){
        return view('add');
    }

    public function create(Request $request){
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        if($request->imageFile){
            $imageObject = $request['imageFile'];
            if(filesize($imageObject) ===false){
                return view('add')->with("filesizeover", $filesizeover = 1);
            }

            $filename = pathinfo($imageObject->getClientOriginalName(), PATHINFO_FILENAME) . time() . '.' . $imageObject->getClientOriginalExtension();
            $fileData = file_get_contents($imageObject->getRealPath());
            // dd($fileData);
            $extension = mb_strtolower($imageObject->getClientOriginalExtension());
            if($extension === 'jpg'){
                $data_url = 'data:image/jpg;base64,'. base64_encode($fileData);
            }elseif($extension === 'jpg'){
                $data_url = 'data:image/jpg;base64,'. base64_encode($fileData);
            }elseif($extension === 'png'){
                $data_url = 'data:image/png;base64,'. base64_encode($fileData);
            }elseif($extension === 'gif'){
                $data_url = 'data:image/gif;base64,'. base64_encode($fileData);
            }

            Image::make($data_url)->save( storage_path( 'app/public/item_images/' . $filename ) , 70);
            $input['img_name'] = $filename;
        }
        Item::create($input);
        return redirect('');
    }

    public function view(Request $request){
        $id = $request->id;
        $item = Item::where('id' , $id)->first();
        return view('view')->with('item' , $item);
    }
}
