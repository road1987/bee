<?php
    $controlId = $this->context->id;

    function getItemClass($controlId, $itemsId){

        if( in_array($controlId , $itemsId)) {
            return "nav-item nav-item-active";
        }else{
            return "nav-item";
        }

    }
?>
    <ul class="nav nav-inline">

        <li class="<?= getItemClass($controlId , ['default']) ?>">
            <a href="/bee/web/index.php?r=admin">首页</a>
        </li>

        <li class="<?= getItemClass($controlId , ['article','articlecategory','articletag']) ?>">
            <a href="/bee/web/index.php?r=admin/article">内容</a>
        </li>

        <li class="<?= getItemClass($controlId , ['']) ?>">
            <a>多媒体</a>
        </li>

        <li class="<?= getItemClass($controlId , ['']) ?>">
            <a>反馈</a>
        </li>

        <li class="<?= getItemClass($controlId , ['']) ?>">
            <a>广告</a>
        </li>

        <li class="<?= getItemClass($controlId , ['']) ?>">
            <a>工具</a>
        </li>

        <li class="<?= getItemClass($controlId , ['']) ?>">
            <a>管理员</a>
        </li>

        <li class="<?= getItemClass($controlId , ['']) ?>">
            <a>系统</a>
        </li>
    </ul>