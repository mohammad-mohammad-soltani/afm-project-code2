<?php
require_once(dirname(dirname(dirname(__DIR__)))."/config/config.php");
$prompt = 'create "{COUNT}" instagram explore tag for this text "{INPUT}" get result for persian language';
$text = str_replace("{INPUT}",$_REQUEST["text"],$prompt);
$text = str_replace("{COUNT}",$_REQUEST["count"],$text);
$result = json_decode(ai_curl($text),true);
if($result['success']=="true"){
    echo "<div dir='auto'>";
    echo str_replace("#","<br>#",$result["result"]);
   echo "</div>";

   $result_id = sha1($_SESSION["WEB_C"]).uniqid();
   $event = array(
       "title" => "ساخت هشتگ",
       "information" => "تگ های مورد نیاز شما با موفقیت تولید شدند",
       "success" => "true",
       "result_page" => url."RESULT/".$result_id,
   );
   $page = array(
       '
       <div class="mx-auto col-lg-8 col-sm-12 align-top ">
       <div class="text-center" >
       تولید هشتگ با توضیحات زیر موفقیت آمیز بود : 
       <br>
        <h6 >توضیحات</h6>
        <br>
       <textarea class="disabled form-control" disabled>'.$_REQUEST["text"].'</textarea>
       <br>
        <h6 >تگ های تولید شده</h6>
        <br>
       <textarea class="disabled form-control"  disabled>'.str_replace("\n","\n",$result["result"]).'</textarea>
       </div>
       </div>
       '
   );
   add_event("TAG",$event,math_ai_init()["username"],$page,$result_id);
}else{
    ?>
    <div class="alert alert-danger alert-icon">
        <em class="icon ni ni-cross-circle"></em>خطایی وجود داشت  
    </div>
    <?php
     $event = array(
        "title" => "ساخت هشتگ",
        "information" => 
       "مشکلی ناشناخته در ارتباط با هوش مصنوعی وجود داشت",
        "success" => "false"
    );
    add_event("TAG",$event,math_ai_init()["username"]);
}
?>