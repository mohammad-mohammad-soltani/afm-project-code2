<?php
require_once(header);
?>
<div class="nk-block">
    <ul class="filter-button-group mb-4 pb-1">
        <!--<li><button class="filter-button active" type="button" data-filter="*"> همه </button></li>
        <li><button class="filter-button" type="button" data-filter=".ai">هوش مصنوعی</button></li>
        <li><button class="filter-button" type="button" data-filter=".tool"> کاربردی</button></li>-->
   
    </ul>
    <div class="row g-gs filter-container" data-animation="true" style="position: relative; height: 1582.2px;" >
        <a href="<?php echo url."physic/engineer/resistor-color-decode" ?>" class="col-sm-6 col-xxl-3 filter-item ai" data-category="ai" style="position: absolute; left: 0px; top: 0px;">
            <div class="card card-full">
                <div class="card-inner">
                    <div class="user-avatar text-primary bg-primary-dim mb-3">
                        <em class="icon ni ni-bulb-fill"></em>
                    </div>
                    <h5 class="title">تبدیل کد رنگی</h5>
                    <p class="sub-text">تبدیل کد رنگی به اهم</p>
                </div>
            </div><!-- .card -->
        </a><!-- .col -->
        <a href="<?php echo url."physic/engineer/capasitor-number-decode" ?>" class="col-sm-6 col-xxl-3 filter-item ai" data-category="ai" style="position: absolute; left: 0px; top: 0px;">
            <div class="card card-full">
                <div class="card-inner">
                    <div class="user-avatar text-primary bg-primary-dim mb-3">
                        <em class="icon ni ni-bulb-fill"></em>
                    </div>
                    <h5 class="title">تبدیل کد عددی</h5>
                    <p class="sub-text">تبدیل کد عددی روی خازن به فاراد</p>
                </div>
            </div><!-- .card -->
        </a><!-- .col -->
        <a href="<?php echo url."physic/engineer/calc_electronic_data" ?>" class="col-sm-6 col-xxl-3 filter-item ai" data-category="ai" style="position: absolute; left: 0px; top: 0px;">
            <div class="card card-full">
                <div class="card-inner">
                    <div class="user-avatar text-primary bg-primary-dim mb-3">
                        <em class="icon ni ni-bulb-fill"></em>
                    </div>
                    <h5 class="title">محاسبه مقادیر مدار</h5>
                    <p class="sub-text">محاسبه جریان ، ولتاژ و مقاومت</p>
                </div>
            </div><!-- .card -->
        </a><!-- .col -->
        <a href="<?php echo url."physic/engineer/calc_coulomb_formula" ?>" class="col-sm-6 col-xxl-3 filter-item ai" data-category="ai" style="position: absolute; left: 0px; top: 0px;">
            <div class="card card-full">
                <div class="card-inner">
                    <div class="user-avatar text-primary bg-primary-dim mb-3">
                        <em class="icon ni ni-bulb-fill"></em>
                    </div>
                    <h5 class="title">فرمول کولن</h5>
                    <p class="sub-text">تبدیل هریک از اجزای قانون کولن</p>
                </div>
            </div><!-- .card -->
        </a><!-- .col -->
       
        
       
       
    </div><!-- .row -->
</div>
<?php
require_once(footer);