<html>
<head>
    <title></title>
</head>
<body>
    <table>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>No</td>
                        <td>제목</td>
                    </tr>
                    <tbody id="list">
                    </tbody>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td>
                            제목>
                        </td>
                        <td>
                            <input type="hidden" id="idx">
                            <input type="text" id="subject">
                        </td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td>
                            <textarea id="content" style="width:100%;height:500px;"></textarea>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div onclick="saveForm()">저장</div>
    <div id="deleteBtn"></div>
    <script src="/assets/js/jquery.js"></script>
<script>
    $(document).ready(function (){
        newDetail();
        getList();
    });
    function newDetail(){
        $('#idx').val('');
        $('#subject').val('');
        $('#content').val('');
    }
    function getList(){

        $.ajax({
            type: "post",
            url:"Controller.php?type=getList",
            dataType:"json",
            contentType:"application/x-www-form-urlencoded;charset=UTF-8",
            error:function (){

            },
            success:function (data){
                var html = '';
                for(var i=0; i<data.length;i++){
                    html += '<tr onclick="getDetail('+data[i].idx+')">';
                    html += '    <td>'+data[i].idx+'</td>';
                    html += '    <td>'+data[i].subject+'</td>';
                    html += '</tr>';
                }
                $('#list').html(html);
            }
        })

    }
    function getDetail(idx){

        newDetail();
        $.ajax({
            type: "post",
            url:"Controller.php?type=getDetail",
            dataType:"json",
            data:{
                idx:idx
            },
            contentType:"application/x-www-form-urlencoded;charset=UTF-8",
            error:function (){
            },
            success:function (data){
                  // var json = JSON.parse(data);
                  $('#idx').val(data[0].idx);
                  $('#subject').val(data[0].subject);
                  $('#content').val(data[0].content);

                  var html = '';

                  html +='<div onclick="deleteForm('+data[0].idx+')">삭제</div>';
                  $('#deleteBtn').html(html);
            }
        })
    }
    function deleteForm(idx){
        $.ajax({
            type: "post",
            url:"Controller.php?type=deleteForm",
            dataType:"json",
            data:{
                idx:idx
            },
            contentType:"application/x-www-form-urlencoded;charset=UTF-8",
            error:function (){
                alert("삭제가 안됐습니다.");
            },
            success:function (data){
                alert("삭제됐습니다.");

                newDetail();
                getList();
            }
        })

    }
    function saveForm(){
        $.ajax({
            type: "post",
            url:"Controller.php?type=saveForm",
            dataType:"json",
            data:{
                idx:$('#idx').val(),
                subject:$('#subject').val(),
                content:$('#content').val(),
            },
            contentType:"application/x-www-form-urlencoded;charset=UTF-8",
            error:function (){

            },
            success:function (data){
                if(data > 0 ){
                    alert("저장되었습니다.");
                    getList();
                }
                else {
                    alert("저장 실패했습니다.");

                }

            }
        })
    }
</script>
</body>
</html>
