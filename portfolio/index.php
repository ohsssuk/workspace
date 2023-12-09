<!DOCTYPE html>
<html lang="ko">
<?php include './include/head.php'; ?>
<body>
    <?php include './include/header.php'; ?>
    
    <?php include './include/data.php'; ?>
    <main>
        <div class="intro">
            <section>
                <h1>Web Developer</h1>
                <h2>경험과 이해를 중시하는 개발자</h2>
            </section>
        </div>
        <section class="part" data-part="project">
            <h3 class="section_title">프로젝트 <span class="sub"><?=count($projectData) ?></span></h3>
            <div class="section_content">
                <ul class="project_list">
                    <?php foreach($projectData as $item) : ?>
                    <li class="project_list_<?=$item['id'] ?>">
                        <a <?=!isset($item['direct']) ? '' : 'target="_blank"' ?> href="<?=!isset($item['direct']) ? "./layout.php?id=".$item['id'] : $item['link'] ?>" class="thumb"
                           style="<?=!empty($item['thumb']['style']) ? $item['thumb']['style'] : '' ?>">
                            <img 
                                src="<?=$item['thumb']['image'] ?>" 
                                alt="<?=$item['title'] ?>"
                                style="<?=!empty($item['thumb']['imageStyle']) ? $item['thumb']['imageStyle'] : '' ?>"
                            >
                        </a>
                        <div class="info">
                            <div class="kind"><?=$item['kind'] ?></div>
                            <div class="title"><?=$item['title'] ?></div>
                            <div class="description"><?=$item['summary'] ?></div>
                            <div class="stack">
                                <?php if(!empty($item['stack'])) : ?>
                                    <?php foreach($item['stack'] as $sticker) : ?>
                                        <span class="sticker <?=$sticker['tag'] ?>"><?=$sticker['text'] ?></span>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="bot">
                                <a <?=!isset($item['direct']) ? '' : 'target="_blank"' ?> class=bot_btn href="<?=!isset($item['direct']) ? "./layout.php?id=".$item['id'] : $item['link'] ?>">자세히 보기</a>
                            </div>
                        </div>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </section>
        <?php 
            $stackData = array(
                [
                    'title' => 'PHP',
                    'text' => [
                        'PHP codeIgniter 프레임워크를 사용하여 개발할 수 있습니다.',
                        'MVC 패턴, 객체지향, 함수형 프로그래밍을 이해하고 있습니다.',
                    ]
                ],
                [
                    'title' => 'HTML, javaScript, CSS',
                    'text' => [
                        '자바스크립트로 객체지향의 구조 작업을 할 수 있습니다.',
                        'Vue.js를 사용하여 신규 프로젝트를 진행한 경험이 있습니다.',
                        '기본적인 마크업과 스타일 사용에 능숙합니다.',
                    ]
                ],
                [
                    'title' => 'ElaticSearch',
                    'text' => [
                        'ES를 사용하여 캐시화, 로그 관리, 통계 조회 개발을 할 수 있습니다.',
                        'kibana를 사용하여 원하는 데이터를 집계 조회할 수 있습니다.',
                    ]
                ],
                [
                    'title' => 'Redis',
                    'text' => [
                        'Redis를 사용하여 데이터를 관리할 수 있습니다.',
                    ]
                ],
                [
                    'title' => 'Git',
                    'text' => [
                        'Git을 활용한 형상관리, 협업 경험이 있습니다.',
                        'GitHub, bitbucket를 사용하여 프로젝트 관리 경험이 있습니다.',
                    ]
                ],
                [
                    'title' => 'AWS',
                    'text' => [
                        'S3로 리소스를 관리한 경험이 있습니다.',
                        'Lambda Mediaconvert 사용 경험이 있습니다.',
                    ]
                ],
                
            ) 
        ?>
        <section class="part" data-part="stack">
            <h3 class="section_title">기술 스택</h3>
            <div class="section_content stack_content">
                <?php foreach($stackData as $item) : ?>
                <div class="row">
                    <h4><?= $item['title'] ?></h4>
                    <?php if(!empty($item['text'])) : ?>
                        <div class="stack_text">
                        <?php foreach($item['text'] as $txt) : ?>
                                <p><?= $txt ?></p>
                        <?php endforeach ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php endforeach ?>
            </div>
        </section>
    </main>
    <?php include 'include/footer.php'; ?>
</body>
</html>