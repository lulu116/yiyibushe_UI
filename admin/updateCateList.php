<?php 
    require './head.php';
    //获取全部的一级分类
    $cate_one = $db->getDatas('cate', '*', 'parent_cate_id=0');
    //获取传过来的分类
    $cate = $db->getOneData('cate','*','cate_id ='.$_GET['cate_id']);
  ?>
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     分类修改
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">首页</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">商品分类管理</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           分类修改
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> 分类修改 </h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal" id="addCateForm">
                                <input type="hidden" name="cate_id" value="<?=$cate['cate_id'];?>">
                                <div class="control-group">
                                    <label class="control-label">一级分类</label>
                                    <div class="controls">
                                        <select class="span6" name="parent_cate_id" tabindex="1">
                                            <option value="0">请选择</option>
                                            <?php 
                                                foreach ($cate_one as $key =>$value){
//                                                    当cate_id等于parent_cate_id时列出分类
                                                    echo '<option value="'.$value['cate_id'].'"'.($value['cate_id'] == $cate['parent_cate_id'] ? 'selected':'').'>'.$value['catename'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">分类名称</label>
                                    <div class="controls">

                                        <input type="text" id="catename" name="catename" value="<?=$cate['catename']?>" class="span6 " />
                                        <span></span>
                                    </div>
                                </div>
                                
                                <div class="form-actions">
                                    <button type="button" class="btn btn-success" id="addCateBtn">修改</button>
                                    <button type="reset" class="btn">重置</button>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
         <!-- END PAGE CONTAINER-->
      </div>
   </div>
      <!-- END PAGE -->
    <?php 
        require './foot.php';
    ?>