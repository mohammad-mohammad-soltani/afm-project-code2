<?php require_once(header); ?>
<div class="card">
    <div class="row g-gs ">
        <div class="col-lg-4 col-sm-12 text-center">
            <div class="card-inner">
                <h6>مقدار اول</h6>
                <div class="form-control-wrap">
                    
                    <input type="number" class="form-control text-center" id="value_1"   name="" >
                </div>
                <br>
                <h6>نوع</h6>
                <div class="form-control-wrap">
                    <select id="value_1_type"  class="form-select js-select2">
                        <option value="n">تعداد الکترون مبادله شده</option>
                        <option value="q">مقدار بار بر حسب کولن</option>
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
            <div class="card-inner">
                <h6>مقدار دوم</h6>
                <div class="form-control-wrap">
                    
                    <input type="text" dir="ltr" class="form-control text-center" id="value_2"  value="1/6 * 10 ^ -19"   name="" disabled>
                </div>
                <br>
                <h6>نوع</h6>
                <div class="form-control-wrap">
                    <select id="value_2_type"  class="form-select js-select2" disabled>
                        <option value="e">ضریب e (ثابت)</option>
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
            <div class="card-inner">
                <h6>خروجی</h6>
                <div class="form-control-wrap">
                    
                    <input type="text" class="form-control text-center disabled" id="answer"  maxlength="9" name=""  disabled placeholder="برای محاسبه روی دکمه زیر کلیک نمایید">
                </div>
                <br>
                <h6>نوع</h6>
                <div class="form-control-wrap">
                    
                    <input type="text" class="form-control text-center disabled" id="answer_type"  maxlength="9" name=""  disabled placeholder="برای محاسبه روی دکمه زیر کلیک نمایید">
                </div>
            </div>
        </div>
        
    </div>
    <button id="calc_btn" type="button" class="btn btn-primary col-11 mx-auto"><span class="text-center">محاسبه کن!</span></button>
    <br>
</div>

<script>
    
    function am_vo(am,vo){
        return vo / am;
    }
    function am_res(am,res){
        return res * am;
    }
    function vo_res(vo,res){
        return vo / res;
    }

    function calcdata() {
        let value_1 = document.getElementById("value_1").value;
        
        let value_1_type = document.getElementById("value_1_type").value;
        
        let result_value_box = document.getElementById("answer");
        let result_type_box = document.getElementById("answer_type");

        if(value_1_type == value_2_type){
            result_value_box.value = "نوع دو مقدار باید متفاوت باشد";
        }else{
            
            if(value_1_type == "n"){
                let result =  parseInt(value_1)*(1.6*10**-19);
                result_value_box.value = result.toExponential(2);
            }
            if(value_1_type == "q"){

                

            }
            
        }
        if(value_1 == ''){
            result_value_box.value = "لطفا مقدار اول را وارد نمایید";
        }
        if(value_2 == ''){
            result_value_box.value = "لطفا مقدار دوم را وارد نمایید";
        }
        if(value_2 == '' && value_2 == ''){
            result_value_box.value = "لطفا مقادیر را وارد نمایید";
        }
    }
        
    document.getElementById("calc_btn").addEventListener("click",calcdata);
    
    
</script>

<?php require_once(footer); ?>
