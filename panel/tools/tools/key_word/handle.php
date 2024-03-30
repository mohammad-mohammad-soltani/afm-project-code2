<?php
require_once(dirname(dirname(dirname(__DIR__)))."/config/config.php");
$prompt = 'Provide a list of top-performing keywords for the “{INPUT}” count of keywords = "{COUNT}"';
$text = str_replace("{INPUT}",$_REQUEST["text"],$prompt);
$text = str_replace("{COUNT}",$_REQUEST["count"],$text);
$result = json_decode(ai_curl($text),true);
if($result['success']=="true"){
    echo "<div dir='auto'>";
    echo str_replace("\n","<br>",$result["result"]);
   echo "</div>";

   $result_id = sha1($_SESSION["WEB_C"]).uniqid();
   $event = array(
       "title" => "ساخت کلمه کلیدی",
       "information" => "کلمه های کلیدی با موضوع وارد شده با موفقیت ساخته شدند",
       "success" => "true",
       "result_page" => url."RESULT/".$result_id,
   );
   $page = array(
       '
       <div class="mx-auto col-lg-8 col-sm-12 align-top ">
       <div class="text-center" >
       تولید کلمه کلیدی موفقیت آمیز بود
       <br>
        <h6 >عنوان/h6>
        <br>
       <textarea class="disabled form-control" disabled>'.$_REQUEST["text"].'</textarea>
       <br>
        <h6 >کلمه های کلیدی تولید شده/h6>
        <br>
       <textarea class="disabled form-control"  disabled>'.str_replace("\n","\n",$result["result"]).'</textarea>
       </div>
       </div>
       '
   );
   add_event("KEYWORD",$event,math_ai_init()["username"],$page,$result_id);
}else{
    ?>
    <div class="alert alert-danger alert-icon">
        <em class="icon ni ni-cross-circle"></em>خطایی وجود داشت  
    </div>
    <?php
     $event = array(
        "title" => "ساخت کلمه کلیدی",
        "information" => 
       "مشکلی در ساخت کلمه کلیدی وجود داشت",
        "success" => "false"
    );
    add_event("KEYWORD",$event,math_ai_init()["username"]);
}
?>