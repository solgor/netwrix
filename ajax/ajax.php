<?php
//require_once "../view.php";
require_once "/model.php";
//require_once $_SERVER['DOCUMENT_ROOT']."/components/".basename(__DIR__)."/model.php";
//
//$requset_method=$_SERVER['REQUEST_METHOD'];
//
//$res=GetInput($requset_method);
////поставить искуссвенную задержку для отображения лоадера на фронте
////sleep(5);
//echo json_encode($res);
//exit();
//
////получить данные из AJAX запроса
//function GetInput($requset_method)
//{
//    if($requset_method==='POST'){
//        $res= Post();
//    }
//    elseif($requset_method==='GET'){
//        $res= 'get';
//    }
//    else{
//        $res['error']=[
//            'msg'=>'Неверный запрос'
//        ];
//    }
//    return $res;
//}
//
//function Post(){
//    $res=$_SERVER;
//    $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
//
//    if ($contentType === "application/json") {
//
//        $content = trim(file_get_contents("php://input"));
//
//        $decoded = json_decode($content, true);
//
//        if(! is_array($decoded)) {
//            $res['error']=$decoded;
//        } else {
//                if(function_exists($decoded['task']))
//                {
//                    $filter=$decoded['data'];
//
//                    $res=call_user_func($decoded['task'],$filter);
//                }
//        }
//    }
//    return $res;
//}
//
//function Get(){
//    $res=[];
//    if(!empty($_REQUEST))
//    {
//        if(function_exists($_REQUEST['task']))
//        {   $filter=filter_input_array(INPUT_GET, $_GET);
//            unset($filter['task']);
//            $res= call_user_func($_REQUEST['task'],$filter);
//        }
//    }
//    return $res;
//}
//
//
//function getDataOptions($params){
//    $res=$params;
//    // var_dump($params);
//   // $db=new mdata_select_box();
//    $sort=['field'=>$params['sort_field'], 'direction'=>$params['sort_direction']];
//   // $data=$db::selectRows($params['tbl'],$params['fields'], $params['condition'], $sort);
//    //var_dump($data);
////    if(empty($data['error'])){
////        $res=$data;
////    }
////    else{
////        $res=$data['error'];
////        var_dump($data['error']);
////        //  throw new Exception($res);
////        //var_dump($res);
////    }
//
//    return $res;
//}