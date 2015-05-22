 <?php 
    $controlId = $this->context->id;
 ?>
           <!--index -->
           <?php if($controlId == "default") { ?>
                <ul class="menu">
                    <li class="menu-item"><a>管理中心</a></li>
                    <li class="menu-item"><a>退出系统</a></li>
                </ul>
            <?php } ?>

            <!-- content-->
            <?php if($controlId == "article" || $controlId == "articlecategory" || $controlId == "articletag") { ?>
                <ul class="menu">
                    <li class="menu-item menu-item-active"><a>新闻资讯</a></li>
                    <li class="menu-item"><a>说明页</a></li>
                    <li class="menu-item"><a>......</a></li>
                </ul>
            <?php } ?>

            <!-- media-->
            <ul class="menu">
                <li class="menu-item"><a>媒体库</a></li>
                <li class="menu-item"><a>......</a></li>
            </ul>

            <!-- message -->
            <ul class="menu">
                <li class="menu-item"><a>用户留言</a></li>
                <li class="menu-item"><a>......</a></li>
            </ul>

            <!-- ad -->
            <ul class="menu">
                <li class="menu-item"><a>广告管理</a></li>
                <li class="menu-item"><a>友情链接</a></li>
            </ul>