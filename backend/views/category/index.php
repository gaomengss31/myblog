<div class="note">
    <h4>分类列表</h4>
    <table class="news_list">
        <thead>
        <tr>
            <th>id</th>
            <th>分类名称</th>
            <th>分类介绍</th>
            <th>是否显示</th>
            <th>操作</th>
        </tr>
        </thead>
        <?php foreach($models as $model):?>
            <tbody>
            <tr>
                <td><?=$model->id?></td>
                <td><?=$model->name?></td>
                <td><?=$model->intro?></td>
                <td><?= $model->is_show>2?'显示':'不显示'?></td>
                <td align=center>
                    修改|
                    删除
                </td>
            </tr>
            </tbody>
        <?php endforeach;?>
    </table>
</div>