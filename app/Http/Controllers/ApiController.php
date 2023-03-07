<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tabledata as ModelTable;

class ApiController extends Controller
{
    public function manager(Request $request, $class_name, $func_name){
        
        $managedclasses = [
            'User' => (new User),
            // 'Bins' => (new Bin),
            'Waitlist' => (new Waitlist),
            'Product' => (new Product),
        ];
       
        try{           
            
            $tokenfromclient = $request->header('X-CSRF-TOKEN', 'default');
            $tokenfromserver = csrf_token();
            
            if (1==1){                                
                $response = ($managedclasses[ucfirst($class_name)])->$func_name($request);
                return $response;
            }else{
                $ret = [
                    'status' => '201',
                    'reason' => 'Invalid Token',
                    'data' => 'No err',
                ];
                return json_encode($ret);
            }


        } catch (\Throwable $th) {
            $ret = [
                'status' => '201',
                'reason' => $th->getMessage(),
                'data' => '',
            ];
            return json_encode($ret);
        }

    }


    public function editpage(Request $request){
        return view('editpage');      
    }


    public function save(Request $request){
        $data = $request->all();       

        try {
            $user = ModelTable::where(["id" => 1])->first();

            $user->tabletext = $data['tabletext'];
            $user->others = $data['others'];
            $user->save();
            
            $ret = [
                'status' => '200',
            ];
            return json_encode($ret);
        } catch (\Throwable $th) {
            $ret = [
                'status' => '201',
                'message' => $th->getMessage(),
                'data' => '',
            ];
            return json_encode($ret);
        }


       
        
    }
    public function gettext(Request $request){
        try {
            $retdata = ModelTable::select("tabletext", "others")->where("id",1)->get();
            $ret = [
                'status' => '200',
                'tabletext'=> $retdata
            ];
            return json_encode($ret);
        } catch (\Throwable $th) {
            $ret = [
                'status' => '201',
                'message' => $th->getMessage(),
                'data' => '',
            ];
            return json_encode($ret);
        }

        
        
        
    }
    

}

