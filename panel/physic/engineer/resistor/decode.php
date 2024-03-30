<?php require_once(header); ?>
<div class="card">
    <div class="row g-gs ">
        <div class="col-lg-3 col-sm-12 text-center">
            <div class="card-inner">
                <h6>رنگ اول</h6>
                <div class="form-control-wrap">
                    <select id="color-one" class="form-select js-select2">
                        <option value="0">مشکی</option>
                        <option value="1">قهوه ای</option>
                        <option value="2">قرمز</option>
                        <option value="3">نارنجی</option>
                        <option value="4">زرد</option>
                        <option value="5">سبز</option>
                        <option value="6">آبی</option>
                        <option value="7">بنفش</option>
                        <option value="8">خاکستری</option>
                        <option value="9">سفید</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 text-center">
            <div class="card-inner">
                <h6>رنگ دوم</h6>
                <div class="form-control-wrap">
                    <select id="color-two" class="form-select js-select2">
                        <option value="0">مشکی</option>
                        <option value="1">قهوه ای</option>
                        <option value="2">قرمز</option>
                        <option value="3">نارنجی</option>
                        <option value="4">زرد</option>
                        <option value="5">سبز</option>
                        <option value="6">آبی</option>
                        <option value="7">بنفش</option>
                        <option value="8">خاکستری</option>
                        <option value="9">سفید</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 text-center">
            <div class="card-inner">
                <h6>رنگ سوم</h6>
                <div class="form-control-wrap">
                    <select id="color-three" class="form-select js-select2">
                        <option value="1">مشکی</option>
                        <option value="10">قهوه ای</option>
                        <option value="100">قرمز</option>
                        <option value="1000">نارنجی</option>
                        <option value="10000">زرد</option>
                        <option value="100000">سبز</option>
                        <option value="1000000">آبی</option>
                        <option value="10000000">بنفش</option>
                        <option value="100000000">خاکستری</option>
                        <option value="1000000000">سفید</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 text-center">
            <div class="card-inner">
                <h6>درصد خطا</h6>
                <div class="form-control-wrap">
                    <select id="color-four" class="form-select js-select2">
                        <option value="n">ندارد</option>
                        <option value="5%">طلایی</option>
                        <option value="10%">نقره ای</option>
                        
                    </select>
                </div>
            </div>
        </div>
    </div>
    <button id="calc_btn" type="button" class="btn btn-primary col-11 mx-auto"><span class="text-center">محاسبه کن!</span></button>
    <br>
</div>
<div class="card">
    <div class="card-header text-center text-white">
        <h6>میزان مقاومت بر حسب اهم (Ω)</h6>
    </div>
    <div class="card-inner">
        <div id="resistance" class="text-white">
            <div class="alert alert-info alert-icon">
                <em class="icon ni ni-alert-circle"></em>مقادیر را وارد کنید و سپس روی دکمه بالا کلیک نمایید
            </div>
        </div>
    </div>
</div>

<script>
    function calculateResistance() {
        var colorOneValue = document.getElementById("color-one").value;
        var colorTwoValue = document.getElementById("color-two").value;
        var colorThreeValue = parseInt(document.getElementById("color-three").value);
        var colorFourValue = document.getElementById("color-four").value;

        var resistance = (parseInt(colorOneValue +  colorTwoValue)*  colorThreeValue );
        if(resistance / 1000 >= 1){
            resistance = resistance/1000 + "K"
        }
        if(colorFourValue == "n"){
            document.getElementById("resistance").innerText = "میزان مقاومت مورد نظر :  " + resistance + " Ω";
        }else{
            document.getElementById("resistance").innerHTML = "میزان مقاومت مورد نظر :  " + resistance + " Ω <br> و میزان درصد خطا : "+colorFourValue;
        }
        
    }
        
    document.getElementById("calc_btn").addEventListener("click",calculateResistance);
    
    
</script>

<?php require_once(footer); ?>
