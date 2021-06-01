<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index()
    {
        $services = DB::table('services')
                ->leftJoin('category', 'services.category_id', '=', 'category.id')
                ->paginate(5, array('services.*','category.name as category_name'));
        return view('admin.services.list', compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 5);


    }
    public function create()
    {
        $category= Category::orderBy('priority')->get();
        return view('admin.services.create' ,compact('category'));
    }
    public function store(Request $request)
    {
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

        return redirect('admin/services')->with('success', 'Thêm mới thành công.');;
    }
    public function displayUpdateForm($id)
    {
        $services = Services::find($id);
        $category= Category::orderBy('priority')->get();
        return view('admin.services.update',['services'=>$services],['category'=>$category]);
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


return redirect('admin/services')->with('success', 'Cập nhật mới thành công.');;
}
public function getXoa($id) {
    $services =Services::find($id);
    $services ->delete();
    return redirect('admin/services') ->with('success', 'Xóa bài thành công.')    ;

}


}
