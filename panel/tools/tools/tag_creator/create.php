<?php
require_once(header);
?>
<div class="card ">
    <div class="card-inner">
        <div class="card-head">
            <h5 class="card-title">ساخت هشتگ برای مقالات و پست ها</h5>
        </div>
        <form action="#">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="col-lg-12">

                        <div class="form-group">
                            <h6>تعداد تگ ها برای تولید</h6>
                            <div class="form-control-wrap number-spinner-wrap">
                                <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                                <input type="number" id="count" class="form-control number-spinner" placeholder="تعداد" value="5" min="5" max="25">
                                <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                            </div>
                            <br>
                            <h6>تگ ها برای چه هستند؟</h6>
                            <textarea name="" id="text" cols="30" class="form-control" placeholder="برای تولید تگ کمی درباره محتوای خود بنویسید" rows="10"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                    <div class="form-group mx-auto">
                        <button type="button" class="btn btn-lg btn-primary mx-auto" id="send">تولید تگ با هوش مصنوعی</button>
                    </div>
                </div>
                    
                </div>
                <div class="col-lg-6" id="answer">
                </div>
                
                
                
            </div>
        </form>
    </div>
</div>

     
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    let sendbtn = document.getElementById("send");
    let answer_box = document.getElementById("answer");
   $('#send').click(function() {
    sendbtn.classList.add("disabled");
    let form = new FormData();
    form.append("text",document.getElementById("text").value)
    form.append("count",document.getElementById("count").value)
    
    answer_box.innerHTML = "در حال ارسال درخواست ...";
    $.ajax({
        url : '<?php echo url."WEB_C/".$_SESSION["WEB_C"]."/TAG_CREATOR" ?>',
        type : 'POST',
        data : form,
        processData: false,  // tell jQuery not to process the data
        contentType: false,  // tell jQuery not to set contentType
        
        success : function(data) {
            answer_box.innerHTML = data;
            sendbtn.classList.remove("disabled");
        }
    });
    });



</script>
<?php
require_once(footer);