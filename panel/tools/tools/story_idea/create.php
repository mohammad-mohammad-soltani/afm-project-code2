<?php
require_once(header);
?>
<div class="card ">
    <div class="card-inner">
        <div class="card-head">
            <h5 class="card-title">ایده تولید استوری بر اساس نوع پیج</h5>
        </div>
        <form action="#">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="col-lg-12">

                        <div class="form-group">
                            <h6>تعداد ایده های پیشنهادی</h6>
                            <div class="form-control-wrap number-spinner-wrap">
                                <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                                <input type="number" id="count" class="form-control number-spinner" placeholder="تعداد" value="5" min="5" max="15">
                                <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                            </div>
                            <br>
                            <h6>نام شرکت \ پیج</h6>
                            <input type="text" class="form-control" name="" id="name" placeholder="نام شرکت / پیج">
                            <br>
                            <h6>نوع مخاطبان</h6>
                            <textarea name="" id="text" cols="30" class="form-control" placeholder="برای تولید تگ کمی درباره محتوای خود بنویسید" rows="10"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                    <div class="form-group mx-auto">
                        <button type="button" class="btn btn-lg btn-primary mx-auto" id="send">تولید ایده استوری</button>
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
    form.append("users_type",document.getElementById("text").value)
    form.append("name",document.getElementById("name").value)
    form.append("count",document.getElementById("count").value)
    
    answer_box.innerHTML = "در حال ارسال درخواست ...";
    $.ajax({
        url : '<?php echo url."WEB_C/".$_SESSION["WEB_C"]."/STORY_IDEA" ?>',
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