
<?php 
    $sidebar = <<< header

<div class="col py-1 py-lg-3 bg-white">
    <div class="our-webcoderskull padding-lg">
        <div class=" d-flex justify-content-between align-items-center w-100">
            <div class="text-info fs-5">
                <i class="fa fa-caret-square-o-left" aria-hidden="true"></i>
            </div>
            <div id="custom-search-input" class="d-flex justify-content-end align-items-center me-4">
                <div class="input-group rounded-2 col-md-12 me-2 ">
                    <input type="text" class="d-none d-md-inline d-lg-inline shadow-none search-query form-control border-0" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn border border-0 shadow-none" type="button">
                            <span class=" glyphicon glyphicon-search"><i class="fa fa-search text-info" aria-hidden="true"></i></span>
                        </button>
                    </span>
                </div>
                <i class="fa fa-bell-o text-info" aria-hidden="true"></i>
            </div>
        </div>
header;

echo $sidebar;