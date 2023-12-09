<!DOCTYPE html>
<html lang="ko">
<?php include 'include/head.php'; ?>
<body>
<?php include 'include/header.php'; ?>
<script src="js/commander.js?ver=1"></script>
<div class="main">
    <h1>특성 연구소</h1>
    <h2>효율적인 특성 선택과 특성 효과 한번에 보기</h2>
    <ul class="commander_gnb">
        <li>
            <a href="./commander.php">특성 만들기</a>
        </li>
        <li class="on">
            <a href="./commander_set.php">특성 목록</a>
        </li>
    </ul>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 디스플레이_수평 -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-4126261814359480"
         data-ad-slot="5536762597"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    
    <form method="get" name="commander_set_filter">
        <div class="commander_set_filter_wrap">
            <div>
                <label for="filter_commander">사령관</label>
                <select name="filter_commander" id="filter_commander">
                    <option value="">선택</option>
                    <?php foreach($aCommanderStat as $id => $name) : ?>
                        <option value="<?= $id ?>" <?= $_GET['filter_commander'] == $id ? 'selected' : '' ?>><?= $name[0] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="filter_writer">작성자</label>
                <input type="text" name="filter_writer" id="filter_writer" value="<?=$_GET['filter_writer'] ?>">
            </div>
            <div>
                <label for="filter_title">제목</label>
                <input type="text" name="filter_title" id="filter_title" value="<?=$_GET['filter_title'] ?>">
            </div>
            <div>
                <label for="filter_sort">정렬 순서</label>
                <select name="filter_sort" id="filter_sort">
                    <option value="A.ss_create_dt" <?= $_GET['filter_sort'] == "A.ss_create_dt" ? 'selected' : '' ?>>최신순</option>
                    <option value="r_cnt" <?= $_GET['filter_sort'] == "r_cnt" ? 'selected' : '' ?>>추천순</option>
                </select>
            </div>
            <div>
                <button type="submit">검색</button>
            </div>
        </div>
    </form>
    <?php
    
    $conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
    $db = mysql_select_db("lifebefore1", $conn);  //db 선택

    ?>
    
    <?php
    
    $whereSql = "WHERE A.ss_id > 0 ";
    
    if(isset($_GET['filter_commander']) && !empty($_GET['filter_commander'])){
        $whereSql .= " AND A.ss_commander = '".$_GET['filter_commander']."' ";
    }
    
    if(isset($_GET['filter_writer']) && !empty($_GET['filter_writer'])){
        $whereSql .= " AND A.ss_name LIKE '%".$_GET['filter_writer']."%' ";
    } 
    
    if(isset($_GET['filter_title']) && !empty($_GET['filter_title'])){
        $whereSql .= " AND A.ss_title LIKE '%".$_GET['filter_title']."%' ";
    } 
    
    if(isset($_GET['filter_sort']) && !empty($_GET['filter_sort'])){
        $sort = $_GET['filter_sort'];
    }else{
        $sort = "A.ss_create_dt";
    }
    
    $sql = " SELECT A.*,COUNT(B.ss_id) as r_cnt FROM skill_set A
             INNER JOIN skill_set_recommend B ON A.ss_id = B.ss_id
             ".$whereSql."
             GROUP BY A.ss_id
             ORDER BY r_cnt DESC
             LIMIT 3 ";

    $result = mysql_query($sql, $conn);
    $rum_rows = mysql_num_rows($result);
    
    ?>
    <?php if($rum_rows > 0) : ?>
    
    <h4 class="commander_set_list_title">베스트 특성 TOP 3</h4>
    <ul class="commander_set_list commander_set_list_best">
        <?php while($row = mysql_fetch_array($result)) : ?>
        <li onclick="c_set_open(this);">
            <div class="list_col csl_head">
                <div class="csl_head_point">
                    <div class="recommend_commander csl_head_point_item">
                    <?=$aCommanderStat[$row['ss_commander']][0] ?>
                    </div>
                    <div class="recommend_cnt csl_head_point_item">추천 <?=$row['r_cnt'] ?></div>
                    <div class="recommend_best csl_head_point_item">BEST</div>
                    <?php if($row['ss_official'] == 'y') : ?>
                        <div class="recommend_official csl_head_point_item">공식 추천</div>
                    <?php endif; ?>
                </div>
                <div class="col_item csl_title">
                    <span><?=$row['ss_title'] ?></span>
                </div>
                <div class="col_item csl_name"><?=$row['ss_name'] ?></div>
            </div>
            <div class="csl_body">
                <div class="csl_date"><?=$row['ss_create_dt'] ?></div>
                <?php if(!empty($row['ss_title'])) : ?>
                <div class="list_col">
                    <span class="list_col_title">
                        제목
                    </span>
                    <?=$row['ss_title'] ?>
                </div>
                <?php endif; ?>
                <?php if(!empty($row['ss_name'])) : ?>
                <div class="list_col">
                    <span class="list_col_title">
                        작성자
                    </span>
                    <?=$row['ss_name'] ?>
                </div>
                <?php endif; ?>
                <div class="list_col">
                    <span class="list_col_title">
                        특성 배분
                    </span>
                    <div class="col_item csl_com"><?=$aCommanderStat[$row['ss_commander']][0] ?></div>
                    <div class="stat_color_wrap col_item">
                        <?php $a = explode(",", $row['ss_division']) ?>
                        <span class="stat_color"><?=$a[0] ?></span>
                        <span class="stat_color"><?=$a[1] ?></span>
                        <span class="stat_color"><?=$a[2] ?></span>
                    </div>
                </div>
                <?php if(!empty($row['ss_memo'])) : ?>
                <div class="list_col">
                    <span class="list_col_title">
                        설명
                    </span>
                    <?=$row['ss_memo'] ?>
                </div>
                <?php endif; ?>
                <div class="list_col list_col_btn_wrap">
                   
                    <form action="./commander.php" method="post" name="csl_frm_<?=$row['ss_id'] ?>">
                        <button class="csl_btn_recommend" type="button" onclick="stat_recommend_proc(this,<?=$row['ss_id'] ?>)">
                            <i class="far fa-thumbs-up"></i> 추천
                        </button>
                        <button class="csl_btn" type="submit">상세 보기</button>
                        <input type="hidden" name="ss_info" value="<?=$row['ss_info'] ?>">
                        <input type="hidden" name="ss_commander" value="<?=$row['ss_commander'] ?>">
                    </form>
                </div>
            </div>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php endif ?>
    
    <?php
    
        $sql = " SELECT A.*,COUNT(B.ss_id) as r_cnt FROM skill_set A
                 LEFT JOIN skill_set_recommend B ON A.ss_id = B.ss_id
                 ".$whereSql."
                 GROUP BY A.ss_id
                 ORDER BY ".$sort." DESC ";

        $result = mysql_query($sql, $conn);
        $rum_rows = mysql_num_rows($result);
    
    ?>
    <?php if($rum_rows > 0) : ?>
    <h4 class="commander_set_list_title">특성 목록(최신순)</h4>
    <ul class="commander_set_list">
        <?php while($row = mysql_fetch_array($result)) : ?>
        <li onclick="c_set_open(this);">
            <div class="list_col csl_head">
                <div class="csl_head_point">
                    <div class="recommend_commander csl_head_point_item">
                    <?=$aCommanderStat[$row['ss_commander']][0] ?>
                    </div>
                    <?php if($row['r_cnt'] > 0) : ?>
                        <div class="recommend_cnt csl_head_point_item">추천 <?=$row['r_cnt'] ?></div>
                    <?php endif; ?>
                    <?php if($row['ss_official'] == 'y') : ?>
                        <div class="recommend_official csl_head_point_item">공식 추천</div>
                    <?php endif; ?>
                </div>
                <div class="col_item csl_title">
                    <span><?=$row['ss_title'] ?></span>
                </div>
                <div class="col_item csl_name"><?=$row['ss_name'] ?></div>
            </div>
            <div class="csl_body">
                <div class="csl_date"><?=$row['ss_create_dt'] ?></div>
                <?php if(!empty($row['ss_title'])) : ?>
                <div class="list_col">
                    <span class="list_col_title">
                        제목
                    </span>
                    <?=$row['ss_title'] ?>
                </div>
                <?php endif; ?>
                <?php if(!empty($row['ss_name'])) : ?>
                <div class="list_col">
                    <span class="list_col_title">
                        작성자
                    </span>
                    <?=$row['ss_name'] ?>
                </div>
                <?php endif; ?>
                <div class="list_col">
                    <span class="list_col_title">
                        특성 배분
                    </span>
                    <div class="col_item csl_com"><?=$aCommanderStat[$row['ss_commander']][0] ?></div>
                    <div class="stat_color_wrap col_item">
                        <?php $a = explode(",", $row['ss_division']) ?>
                        <span class="stat_color"><?=$a[0] ?></span>
                        <span class="stat_color"><?=$a[1] ?></span>
                        <span class="stat_color"><?=$a[2] ?></span>
                    </div>
                </div>
                <?php if(!empty($row['ss_memo'])) : ?>
                <div class="list_col">
                    <span class="list_col_title">
                        설명
                    </span>
                    <?=$row['ss_memo'] ?>
                </div>
                <?php endif; ?>
                <div class="list_col list_col_btn_wrap">
                   
                    <form action="./commander.php" method="post" name="csl_frm_<?=$row['ss_id'] ?>">
                        <button class="csl_btn_recommend" type="button" onclick="stat_recommend_proc(this,<?=$row['ss_id'] ?>)">
                            <i class="far fa-thumbs-up"></i> 추천
                        </button>
                        <button class="csl_btn" type="submit">상세 보기</button>
                        <input type="hidden" name="ss_info" value="<?=$row['ss_info'] ?>">
                        <input type="hidden" name="ss_commander" value="<?=$row['ss_commander'] ?>">
                    </form>
                </div>
            </div>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php else : ?>
    <div class="empty_msg">
        검색결과가 없습니다.
    </div>
    <?php endif; ?>
    <div class="thanks_info">
        <p>아이디어를 제공해 주신</p>
        <p class="byline"><strong>#1518</strong>서버 <strong>#KAL</strong>연맹 <strong>애플애플</strong>님께 감사드립니다.</p>
        <p class="byline"><strong>#1518</strong>서버 <strong>#KAL</strong>연맹 <strong>kyujang</strong>님께 감사드립니다.</p>
    </div>
    <?php include 'include/footer.php'; ?>
</div>
</body>
</html>