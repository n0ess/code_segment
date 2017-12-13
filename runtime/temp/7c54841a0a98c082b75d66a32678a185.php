<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\web\codep\trunk\public/../app/home\view\index\upcode.html";i:1513182504;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <title>上传页</title>
    <link rel="stylesheet" type="text/css" href="__LIB__/bootstrap3/css/bootstrap.css" /> <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap-table.css" /> <link rel="stylesheet" type="text/css" href="__LIB__/font-awesome-4.6/css/font-awesome.min.css" /> <link rel="stylesheet" type="text/css" href="__CSS__/animate.css" /> <script type="text/javascript" src="__LIB__/jquery-3.1.0.min.js"></script> <script type="text/javascript" src="__JS__/layer/layer.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <h4>标题</h4>
                    <input type="text" class="form-control" id="title" placeholder="请填写标题">
                </div>
                <div class="form-group">
                    <h4>备注</h4>
                    <textarea class="form-control" rows="3" id="remark" placeholder="请填写备注"></textarea>
                </div>
                <div class="form-group">
                    <h4>选择语言</h4>
                    <select class="form-control" id="language" style="width: 150px;">
                        <option>php</option>
                        <option>mysql</option>
                        <option>javascript</option>
                        <option>其他</option>
                    </select>
                </div>
                <div class="form-group">
                    <h4>代码片段</h4>
                    <textarea class="form-control" id="code" rows="3" style="height: 500px;"></textarea>
                </div>
                <button type="button" class="btn btn-primary">保存</button>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
$("button").click(function() {
    var postData = {};
    postData.title = $("#title").val();
    postData.remark = $("#remark").val();
    postData.language = $("#language").val();
    postData.code = $("#code").val();
    var msg = "";
    var er = 0;
    for (var k in postData) {
        if (postData[k] == '' || !postData[k]) {
            if (k == 'title') { msg = "请填写标题"; }
            if (k == 'language') { msg = "请选择语言"; }
            if (k == 'code') { msg = "请填写代码片段"; }
            if (msg !== '') {
                layer.msg(msg);
                break;
            }
        }
    }
    if (er > 0) { return; }
    $.post("<?php echo url('home/Index/runCode');; ?>",postData,function(data){
    	
    });
});
</script>

</html>