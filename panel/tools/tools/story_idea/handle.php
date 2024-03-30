<?php
require_once(dirname(dirname(dirname(__DIR__)))."/config/config.php");
$prompt = 'Come up with {COUNT} Instagram Story ideas for {NAME} relevant to {USERS_TYPE} with persian language';
$text = str_replace("{NAME}",$_REQUEST["name"],$prompt);
$text = str_replace("{COUNT}",$_REQUEST["count"],$text);
$text = str_replace("{USERS_TYPE}",$_REQUEST["users_type"],$text);
$result = json_decode(ai_curl($text),true);
if($result['success']=="true"){
    echo "<div dir='auto'>";
    echo str_replace("\n","<br>",$result["result"]);
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
       تولید ایده استوری با مشخصات زیر موفقیت آمیز بود
       <br>
        <h6>نام صفحه</h6>
        <br>
        <input type="text" class="form-control disabled" value="'.$_REQUEST["name"].'" >
        <br>
        <h6>نوع مخاطبان</h6>
        <br>
       <textarea class="disabled form-control" disabled>'.$_REQUEST["users_type"].'</textarea>
       <br>
        <h6 >پیشنهاد های تولید شده</h6>
        <br>
       <textarea class="disabled form-control"  disabled>'.str_replace("\n","\n",$result["result"]).'</textarea>
       </div>
       </div>
       '
   );
   add_event("STORY",$event,math_ai_init()["username"],$page,$result_id);
}else{
    ?>
    <div class="alert alert-danger alert-icon">
        <em class="icon ni ni-cross-circle"></em>خطایی وجود داشت  
    </div>
    <?php
     $event = array(
        "title" => "تولید ایده استوری",
        "information" => 
       "مشکلی ناشناخته در تولید ایده استوری وجود داشت",
        "success" => "false"
    );
    add_event("STORY",$event,math_ai_init()["username"]);
}
?>