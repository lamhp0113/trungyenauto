<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function index()
    {
        $services= Services::paginate(2);
        return view('admin.services.list', compact('services'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function create()
    {
        return view('admin.services.create');
    }
    public function store(Request $request)
    {
//        $services=services::create($request->all());
//        if($request->hasFile('myFile'))
//        {
//            $file= $request->file('myFile');//lay ra ten input file
//            if ($file->getClientOriginalExtension('myFile')== "jpg"){// KIEEM TRA CO PHAI DUOI JPG
//                $filename= $file->getClientOriginalName('myFile');// lay ra ten file
//                $file->move('images',$filename); //lufile(    )e
//                $services->images='images/'.$filename;
//            }else{
//                echo "no file jpg";
//            };
//
//        }else{
//            echo "Chưa có file";
//        }
//        return redirect()->route('services.index')
//            ->with('success', 'Đặt lịch thành công.')
//
        $services = new Services;
        $services->fill($request->all());
        if($request->hasFile('myFile'))
        {
            $file= $request->file('myFile');//lay ra ten input file
            if ($file->getClientOriginalExtension('myFile')== "jpg"){// KIEEM TRA CO PHAI DUOI JPG
                $filename= $file->getClientOriginalName('myFile');// lay ra ten file
                $file->move('images',$filename); //luu file
                $services->images='images/'.$filename;
            }else{
                echo "no file jpg";
            };

        }else{
            echo "Chưa có file";
        }
        $services->save();

        return redirect('services');
    }
    public function displayUpdateForm($id)
    {
        $services = Services::find($id);
        return view('admin.services.update',['services'=>$services]);
    }
    public function doUpdate(Request $request)
    {
        $services = Services::find($request->id);
        $services->fill($request->all());
        // dd($sanpham->fill($request->all()));
        if($request->hasFile('myFile'))
        {   
        $file= $request->file('myFile');//lay ra ten input file     
        if ($file->getClientOriginalExtension('myFile')== "jpg"."png"){// KIEEM TRA CO PHAI DUOI JPG 
        $filename= $file->getClientOriginalName('myFile');// lay ra ten file 
        $file->move('images',$filename); //luu file
        $services->hinhanh='images/'.$filename;
    }else{
        echo "no file jpg";
    };

}else{
    echo "Chưa có file";
}
$services->save();


return redirect('services');
}
public function getXoa($id) {
    $services =Services::find($id);
    $services ->delete();
    return redirect('services');

}


}
