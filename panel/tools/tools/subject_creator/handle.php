<?php
require_once(dirname(dirname(dirname(__DIR__)))."/config/config.php");
$prompt = 'create {COUNT} blog post topic for keyword ”{FIRST}”  and “{SECCOND}” get answer with persian language';
$text = str_replace("{FIRST}",$_REQUEST["first_keyword"],$prompt);
$text = str_replace("{SECCOND}",$_REQUEST["seccond_keyword"],$text);
$text = str_replace("{COUNT}",$_REQUEST["count"],$text);
$result = json_decode(ai_curl($text),true);
if($result['success']=="true"){
    echo "<div dir='auto'>";
    echo str_replace("\n","<br>",$result["result"]);
   echo "</div>";

   $result_id = sha1($_SESSION["WEB_C"]).uniqid();
   $event = array(
       "title" => "ساخت مقاله",
       "information" => "موضوع های پرطرفدار برای ساخت مقاله با موفقیت تولید شدند",
       "success" => "true",
       "result_page" => url."RESULT/".$result_id,
   );
   $page = array(
       '
       <div class="mx-auto col-lg-8 col-sm-12 align-top ">
       <div class="text-center" >
       تولید مقاله با کلمات کلیدی زیر موفقیت آمیز بود
       <br>
        <h6 >توضیحات</h6>
        <br>
       <textarea class="disabled form-control" disabled>'.$_REQUEST["first_keyword"]."    ".$_REQUEST["seccond_keyword"].'</textarea>
       <br>
        <h6 >موضوع های تولید شده/h6>
        <br>
       <textarea class="disabled form-control"  disabled>'.str_replace("\n","\n",$result["result"]).'</textarea>
       </div>
       </div>
       '
   );
   add_event("SUBJECT",$event,math_ai_init()["username"],$page,$result_id);
}else{
    ?>
    <div class="alert alert-danger alert-icon">
        <em class="icon ni ni-cross-circle"></em>خطایی وجود داشت  
    </div>
    <?php
     $event = array(
        "title" => "ساخت مقاله",
        "information" => 
       "مشکلی ناشناخته در ارتباط با هوش مصنوعی وجود داشت",
        "success" => "false"
    );
    add_event("SUBJECT",$event,math_ai_init()["username"]);
}
?>