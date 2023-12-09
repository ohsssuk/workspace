<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LBAM</title>
    <style>
        .lbam_t{
            width:100%;
            border:1px solid #000;border-collapse: collapse;
        }
        table.lbam_t tr{
            border-bottom:1px solid #000;
        }
        table.lbam_t tr:hover{
            background: #ddd;
        }
        table.lbam_t tr td{
            padding:5px;
        }
        table.lbam_t tr td a{
            color:#0000ee;
        }
        .t-a-c{
            text-align: center;
        }
        .t-a-l{
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    include './worldmap_data.php';
    $conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
    $db = mysql_select_db("lifebefore1", $conn);  //db 선택

    $sMapKey = $_GET['map_key']; //맵 키
    $aMap = $aWorldMapData[$sMapKey]; //맵 데이터

    $sql = " SELECT * ";
    $sql.= " FROM map_point ";
    $sql.= " WHERE mp_isofficial = 0 ";
    $sql.= " ORDER BY mp_dt DESC ";

    $result_set = mysql_query($sql);
    $result_count = mysql_num_rows($result_set);
    
    ?>
    
    <?php if($result_count > 0) : ?>
    <table class="lbam_t">
        <tr>
            <th class="t-a-c">ID</th>
            <th class="t-a-c">맵</th>
            <th class="t-a-c">x</th>
            <th class="t-a-c">y</th>
            <th class="t-a-l">제목</th>
            <th class="t-a-c">작성자</th>
            <th class="t-a-c">IP</th>
            <th class="t-a-c">날짜</th>
        </tr>
        <?php while ($row = mysql_fetch_array($result_set)) : ?>
        <tr>
            <td class="t-a-c"><?=$row['mp_id'] ?></td>
            <td class="t-a-c"><a target="_blank" href="./worldmap.php?map_key=<?=$row['mp_key'] ?>"><?=$aWorldMapData[$row['mp_key']]['name'] ?></a></td>
            <td class="t-a-c"><?=$row['mp_point_x'] ?></td>
            <td class="t-a-c"><?=$row['mp_point_y'] ?></td>
            <td class="t-a-l"><?=$row['mp_des'] ?></td>
            <td class="t-a-c"><?=$row['mp_wr'] ?></td>
            <td class="t-a-c"><?=$row['mp_ip'] ?></td>
            <td class="t-a-c"><?=$row['mp_dt'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php else: ?>
        <div>결과 없음</div>
    <?php endif; ?>
</body>
</html>