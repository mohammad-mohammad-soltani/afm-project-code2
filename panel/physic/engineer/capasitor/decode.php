<?php require_once(header); ?>
<div class="card">
    <div class="row g-gs ">
        <div class="col-lg-4 col-sm-12 text-center">
            <div class="card-inner">
                <h6>رقم اول</h6>
                <div class="form-control-wrap">
                    
                    <input type="number" class="form-control text-center" id="num_1"  maxlength="9" name="" id="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
            <div class="card-inner">
                <h6>رقم دوم</h6>
                <div class="form-control-wrap">
                    
                    <input type="number" class="form-control text-center" id="num_2"  maxlength="9" name="" id="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
            <div class="card-inner">
                <h6>رقم سوم</h6>
                <div class="form-control-wrap">
                    
                    <input type="number" class="form-control text-center" id="num_3"  maxlength="9" name="" id="">
                </div>
            </div>
        </div>
        
    </div>
    <button id="calc_btn" type="button" class="btn btn-primary col-11 mx-auto"><span class="text-center">محاسبه کن!</span></button>
    <br>
</div>
<div class="card">
    <div class="card-header text-center text-white">
        <h6>میزان خازن بر حسب پیکو فاراد</h6>
    </div>
    <div class="card-inner">
        <div id="cap" class="text-white">
            <div class="alert alert-info alert-icon">
                <em class="icon ni ni-alert-circle"></em>مقادیر را وارد کنید و سپس روی دکمه بالا کلیک نمایید
            </div>
        </div>
    </div>
</div>

<script>
    function calculateResistance() {
        var num_1 = document.getElementById("num_1").value;
        var num_2 = document.getElementById("num_2").value;
        var num_3 = document.getElementById("num_3").value;
        var cap = num_1+num_2;
        var num_3_2 = "";
        
        for (let i = 0; i < parseInt(num_3); i++) {
            num_3_2 += "0"
            
        }
        cap = cap + num_3_2; 

        if(cap / 1000 >= 1){
            cap = cap/1000 + "K"
        }
        
        document.getElementById("cap").innerText =  "میزان خازن بر حسب پیکو فاراد : "+cap ;
        
        
    }
        
    document.getElementById("calc_btn").addEventListener("click",calculateResistance);
    
    
</script>

<?php require_once(footer); ?>
