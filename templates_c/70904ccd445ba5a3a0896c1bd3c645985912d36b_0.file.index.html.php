<?php
/* Smarty version 3.1.30, created on 2016-12-14 17:03:34
  from "D:\wamp\www\20160926\1212\dream_upgrade\template\company\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58510ae6bc34d1_58631912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70904ccd445ba5a3a0896c1bd3c645985912d36b' => 
    array (
      0 => 'D:\\wamp\\www\\20160926\\1212\\dream_upgrade\\template\\company\\index.html',
      1 => 1481706209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_58510ae6bc34d1_58631912 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\20160926\\1212\\dream_upgrade\\libraries\\smarty\\plugins\\modifier.date_format.php';
?>

<?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



  <div class="container">
    <a href="<?php echo URL_PATH;?>
/company/add" class="btn btn-success">添加企业</a>
    <a href="<?php echo URL_PATH;?>
/job" class="btn btn-success">招聘管理</a>
    
    <br>
    <br>

    <div class="row mb10">
      <div class="col-md-4">排序：<a href="<?php echo URL_PATH;?>
/company/index">默认</a> <a href="<?php echo URL_PATH;?>
/index.php?c=company&sort=desc">倒序</a></div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <form action="<?php echo URL_PATH;?>
/index.php?c=company" method="post">
            <input type="text" name="keywords" class="form-control in-block" placeholder="请输入企业名称关键词">
            <input type="submit" class="btn btn-info">
          </form>

      </div>
    </div>

    <table class="table">
      <tr>
        <th>公司名称</th>
        <th>电话</th>
        <th>公司地址</th>
        <th>发布时间</th>
        <th>操作</th>
      </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>

<tr>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['company_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['telphone'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['address'];?>
</td>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['add_time'],"Y-m-d H:i");?>
</td>
        <td>  <a href='<?php echo URL_PATH;?>
/index.php?c=company&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'>修改</a> &nbsp;&nbsp;<a onclick=confim_do('<?php echo URL_PATH;?>
/index.php?c=company&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
') class='text-danger'  >删除</a></td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

     
    </table>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
        分页：4/8
          <a href="<?php echo URL_PATH;?>
/index.php?c=company&p=1">第一页</a>
          <a href="<?php echo URL_PATH;?>
/index.php?c=company&p=2">第二页</a>
        </div>
        <div class="col-md-2"></div>
    </div>
    <a href="index.php?a=logout" class="btn btn-danger fr">退出</a>
  </div>
  <?php echo '<script'; ?>
>
      function confim_do (href_url) {
        if (window.confirm("确认删除这条信息吗？")) {
            location.href=href_url;
        }else{
          

        }
      }
  <?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
 <?php }
}
