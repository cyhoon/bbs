<script>
    $(document).ready(function(){
        $("#write_btn").click(function(){
            if($("#input01").val() == ''){
                alert('제목을 입력해주세요.');
                return false;
            } else if($("#input02").val() == ''){
                alert('내용을 입력해주세요.');
                $("#input02").focus();
                return false;
            }else{
                $("#write_action").submit();
            }
        });
    });
</script>

<article id="board_area">
    <header>
        <h1></h1>
    </header>

    <form class="form-horizontal" method="post" action="" id="write_action">
        <fieldset>
            <legend>게시물 수정</legend>
            <div class="control-group">
                <label class="control-label" for="input01">제목</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" id="input01" name="subject" value="<?php echo $views->subject;?>">
                </div>
                <lable class="control-label" for="input02">내용</lable>
                <div class="controls">
                    <textarea class="input-xlarge" id="input02" name="contents" rows="5"><?php echo $views->contents;?></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary" id="write_btn">작성</button>
                    <button class="btn" onclick="document.location.reload()">취소</button>
                </div>
            </div>
        </fieldset>
    </form>
</article>