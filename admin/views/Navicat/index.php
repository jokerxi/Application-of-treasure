<?php $this->load->view('/header.php'); ?>

<?php $this->load->view('/top.php'); ?>

<?php $this->load->view('/menu.php'); ?>

<!-- 右侧区域开始 -->
<div class="right_body">
    <!-- 当前位置开始 -->
    <div class="snav">您的位置：<a href="<?php echo build_url('Frame'); ?>">系统管理</a> » 网站导航</div><!-- 当前位置结束 -->

    <!-- 右侧主体内容开始 -->
    <div class="mbody">
        <div class="mt10 clearfix">
            <div class="l">
                <a href="<?php echo build_url('Navicat', 'content'); ?>" class="but2">添加导航</a>
            </div>
            <div class="r r-box">

            </div>
        </div>
        <!-- 列表开始 -->
        <div>
            <form action="" name="form_order" method="post">
                <table class="tb mt10" border="1" bordercolor="#cee1ee">
                    <tr class="tr-title">
                        <th align='center'>导航排序</th>
                        <th align='center'>导航ID</th>
                        <th align='center' width="200">导航名称</th>
                        <th align='center'>链接地址</th>
                        <th align='center'>是否显示</th>
                        <th align='center'>是否新窗口</th>
                        <th width="120">操作</th>
                    </tr>
                    <?php if (is_array($list) && sizeof($list) > 0) : ?>
                        <?php foreach ($list as $value) : ?>
                            <tr>
                                <td><?php echo $value['navicat_order']; ?></td>
                                <td><?php echo $value['navicat_id']; ?></td>
                                <td>
                                    <a href="<?php echo build_url('Navicat', 'content', array('navicat_id' => $value['navicat_id'])); ?>">
                                        <?php echo $value['navicat_name']; ?>
                                    </a>
                                </td>
                                <td><a href="<?php echo $value['navicat_url']; ?>" target="_blank"><?php echo $value['navicat_url']; ?><a></td>
                                <td><?php echo $value['navicat_enabled'] == 1 ? '是' : '否'; ?></td>
                                <td><?php echo $value['navicat_blank'] == 1  ? '是' : '否'; ?></td>
                                <td>
                                    <a class="but2 but2s" href="<?php echo build_url('Navicat', 'content', array('navicat_id' => $value['navicat_id'])); ?>">修改</a>
                                    <a class="but2 but2s" href="javascript:;" onclick="navicat_del(<?php echo $value['navicat_id'] ?>)">删除</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </table>
            </form>

            <div class="pagebar clearfix">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
        <!-- 列表结束 -->
    </div><!-- 右侧主体内容结束 -->

    <?php $this->load->view('/right.php'); ?>

</div><!-- 右侧区域结束 -->

<script>
    function navicat_del(navicat_id){
        show_msg("确认删除？", true, function(){
            $.post(build_url('Navicat', 'delete'), {"navicat_id": navicat_id}, function(result) {
                if(result.code != 0){
                    show_msg(result.msg);
                }else{
                    location.reload();
                }
            }, 'json');
        });
    }
    function navicat_search() {
        window.location = $('#navicatSearch').attr('action') + '&' + $('#navicatSearch').serialize();
    }
</script>

<?php $this->load->view('/footer.php'); ?>
