<footer>
    <!-- 댓글창 시작 -->
    <h6 class="rp_title">ALBIONNET</h6>
    <div class="rp_help">
        전체 댓글 목록입니다. 건의사항, 하고 싶은 말, 잡담 등을 작성해주세요. 알비온 관련이라면 광고도 허용합니다.
    </div>
    <script>
        function rp_check(){
            if(rp_fr.rt_writer.value == "" || rp_fr.rt_pwd.value == "" || rp_fr.rt_text.value == "") {
                alert("빈칸을 모두 입력해야 합니다");
                return false;
            }
        }
    </script>
    <form action="./reply/reply_proc.php?wtype=wr" method="post" name="rp_fr" onsubmit="return rp_check()">
    <div class="rp_write">
        <input type="text" placeholder="작성자" name="rt_writer">
        <input type="text" placeholder="비밀번호" name="rt_pwd">
        <textarea name="rt_text" id="" placeholder="내용을 입력해주세요" name="rt_text"></textarea>
        <input type="submit" class="reply_btn" value="등록">
    </div>
    </form>
    <iframe src="./reply/reply.php" frameborder="0" class="reply_frame" scrolling="auto"></iframe>
    <!-- 댓글창 종료 -->
</footer>