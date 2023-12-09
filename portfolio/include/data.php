<?php
$projectData = array(
    '5' => array(
        'id' => 5,
        'title' => '쿠캣',
        'kind' => '이커머스',
        'summary' => '서비스 플랫폼, Admin 웹개발<br>신규 기능 개발, 사이트 유지/보수, 운영',
        'stack' => array(
            array(
                'tag' => 'bac',
                'text' => 'PHP'
            ),
            array(
                'tag' => 'bac',
                'text' => 'CodeIgniter'
            ),
            array(
                'tag' => 'db',
                'text' => 'mariaDB'
            ),
            array(
                'tag' => 'db',
                'text' => 'Redis'
            ),
            array(
                'tag' => 'db',
                'text' => 'elasticSearch'
            ),
            array(
                'tag' => 'fro',
                'text' => 'javascript'
            ),
            array(
                'tag' => 'fro',
                'text' => 'jQuery'
            ),
            array(
                'tag' => 'pub',
                'text' => 'CSS'
            ),
            array(
                'tag' => 'etc',
                'text' => 'API'
            ),
        ),
        'contentPage'=>true,
        'link' => 'https://cookatmarket.com',
        'thumb' => array(
            'image' => './images/work/work_7/logo-main-white.svg',
            'imageStyle' => 'width: 70%;',
            'style' => ' background:#ff5833;'
        ),
    ),
    '9' => array(
        'id' => 9,
        'title' => '쿠캣 영상장보기',
        'kind' => '숏폼 컨텐츠 서비스',
        'summary' => '인스타그램 릴스, 유튜브 숏츠, 틱톡처럼 짧은 길이의 영상 컨텐츠 제공',
        'service' => '이커머스 플랫폼 내의 숏폼 컨텐츠 서비스입니다.<br>S3 영상 변환을 제외한 모든 부분을 혼자 작업했습니다.<br>리소스 효율을 위해 m3u8 영상을 스트리밍 서비스로 제공합니다.<br>리소스 효율과 크롬 사운드 정책 대응을 위해 1player 방식을 사용합니다. 무한 스크롤 방식의 동적 로드를 사용합니다.',
        'stack' => array(
            array(
                'tag' => 'bac',
                'text' => 'PHP'
            ),
            array(
                'tag' => 'bac',
                'text' => 'CodeIgniter'
            ),
            array(
                'tag' => 'db',
                'text' => 'mariaDB'
            ),
            array(
                'tag' => 'db',
                'text' => 'Redis'
            ),
            array(
                'tag' => 'db',
                'text' => 'elasticSearch'
            ),
            array(
                'tag' => 'fro',
                'text' => 'javascript'
            ),
            array(
                'tag' => 'fro',
                'text' => 'jQuery'
            ),
            array(
                'tag' => 'pub',
                'text' => 'CSS'
            ),
            array(
                'tag' => 'etc',
                'text' => 'API'
            ),
        ),
        'contentPage'=>true,
        'link' => 'https://cookatmarket.com/ko/cookattv/list?inflow_type=tabbar',
        'thumb' => array(
            'image' => './images/work/work_7/1.png',
            'imageStyle' => 'width: 90%;',
            'style' => ' background:#ff5833;'
        ),
        'workTask' => array(
            '웹뷰 환경에서 여러 영상에 대해 Chrome 사운드 정책 대응',
            '고용량 영상 컨텐츠 리소스 효율 증대',
            '사용자의 액티브 이벤트(사운드 클릭, 다음 영상 넘기기 등) 로그 저장과 Admin 통계 조회',
            '시청자별 시청 영상 제외하고 개인화 영상 제공'
        )
    ),
    '3' => array(
        'id' => 3,
        'title' => '삼국지 계산판',
        'kind' => '개인 프로젝트',
        'summary' => '모바일 게임 [삼국지 전략판]<br>데이터 정보, 편의 기능',
        'service' => '
            유저들에게 모바일 게임 [삼국지 전략판]에 대한 데이터와 편의 기능을 제공하는 사이트 입니다.
            <br>단순 계산 기능부터 좌표 계산, 유저 데이터 등록/삭제 Admin, 게임과 완전 동일한 모의전투를 시뮬레이션 할 수 있는 기능을 제공합니다.
        ',
        'stack' => array(
            array(
                'tag' => 'bac',
                'text' => 'PHP'
            ),
            array(
                'tag' => 'db',
                'text' => 'mySql'
            ),
            array(
                'tag' => 'fro',
                'text' => 'javascript'
            ),
            array(
                'tag' => 'fro',
                'text' => 'jQuery'
            ),
            array(
                'tag' => 'pub',
                'text' => 'CSS'
            ),
        ),
        'link' => 'http://www.lifebefore.co.kr/samgepan/test_simulation.php',
        'thumb' => array(
            'image' => 'http://www.lifebefore.co.kr/samgepan/images/samgepan_main.png',
            'style' => 'background: radial-gradient(circle, #bf8f73, #624040)',
            'imageStyle' => 'height:70%; width:auto;',
        ),
        'contentPage'=>true,
        'workImage' => array(
            './images/work/work_3/1.PNG',
            './images/work/work_3/2.PNG',
            './images/work/work_3/3.PNG',
            './images/work/work_3/4.PNG',
            './images/work/work_3/5.PNG',
            './images/work/work_3/6.PNG',
            './images/work/work_3/7.PNG',
            './images/work/work_3/8.PNG',
            './images/work/work_3/9.PNG',
            './images/work/work_3/10.PNG',
            './images/work/work_3/11.PNG',
        ),
        'workTask' => array(
            '사용자 유입 유도',
            '단순 계산의 유저 편의성을 개선',
            '<strong>게임의 전투를 모의전투 시뮬레이션으로 동일하게 구현</strong>',
            '모의 전투 상황별 수치 계산, 동적 변동값, 환경 요소, 지속형 수치, 특수 변수등을 모두 근접하게 구현, 동일 환경이여도 확률 변수로 다른 결과 도출(게임과 동일)',
            '사용자가 복잡한 데이터를 등록할 수 있도록 세분화된 입력 기능',
            '사용자가 데이터 관리 페이지',
            '모바일 유저를 위해 반응형 대응'
        )
    ),
    '1' => array(
        'id' => 1,
        'title' => '라이프비포어',
        'kind' => '개인 프로젝트',
        'summary' => '모바일 게임 [라이프애프터]<br>데이터 정보, 편의 기능',
        'service' => '유저들에게 모바일 게임 [라이프애프터]에 대한 데이터와 편의 기능을 제공하는 사이트 입니다.<br>트리형 조합이 복잡하여 계산하기 어려운 부분에 대해 편의성을 제공합니다.<br>유용한 정보를 유저가 등록하고 조회할 수 있습니다.<br>게임 내 시스템을 분석하여 관련 정보를 제공합니다.',
        'stack' => array(
            array(
                'tag' => 'bac',
                'text' => 'PHP'
            ),
            array(
                'tag' => 'db',
                'text' => 'mySql'
            ),
            array(
                'tag' => 'fro',
                'text' => 'javascript'
            ),
            array(
                'tag' => 'fro',
                'text' => 'jQuery'
            ),
            array(
                'tag' => 'pub',
                'text' => 'CSS'
            ),
        ),
        'contentPage'=>true,
        'link' => 'http://www.lifebefore.co.kr',
        'thumb' => array(
            'image' => 'http://www.lifebefore.co.kr/images/index_bg.png',
            'style' => 'background:linear-gradient(to top right,#324554,#110e25);',
        ),
        'workImage' => array(
            './images/work/work_1/1.PNG',
            './images/work/work_1/2.PNG',
            './images/work/work_1/3.PNG',
            './images/work/work_1/7.PNG',
            './images/work/work_1/4.PNG',
            './images/work/work_1/5.PNG',
            './images/work/work_1/6.PNG',
        ),
        'workTask' => array(
            '사용자 유입 유도',
            '복잡한 tree구조의 조합식의 가격 정보와 필요 갯수를 최대한 보기 편하게 정리',
            '유저 편의성을 위해 사용자가 제어할 수 있는 선택지를 최대한 제공',
            '보안과 관련 없는 기능이므로 js에서 연산 처리',
            '유저들이 직접 위치 포인트를 저장할 수 있는 기능 제공(ckEditor 사용)',
            '모바일 유저를 위해 반응형 대응'
        )
    ),
    '2' => array(
        'id' => 2,
        'title' => '라오킹 센터',
        'kind' => '개인 프로젝트',
        'summary' => '모바일 게임 [라이즈 오브 킹덤즈]<br>데이터 정보, 편의 기능',
        'service' => '
            유저들에게 모바일 게임 [라이즈 오브 킹덤즈]에 대한 데이터와 편의 기능을 제공하는 사이트 입니다.
            <br>트리형 구조의 데이터를 유저가 보기 편하게 정리 하여 웹 화면으로 구현했습니다.
            <br>단순 계산기의 사용자 편의성을 높혔습니다.
            <br>게임 환경과 완전히 동일한 시스템의 특성 트리를 미리 구성할 수 있습니다.
        ',
        'stack' => array(
            array(
                'tag' => 'bac',
                'text' => 'PHP'
            ),
            array(
                'tag' => 'db',
                'text' => 'mySql'
            ),
            array(
                'tag' => 'fro',
                'text' => 'javascript'
            ),
            array(
                'tag' => 'fro',
                'text' => 'jQuery'
            ),
            array(
                'tag' => 'pub',
                'text' => 'CSS'
            ),
        ),
        'contentPage'=>true,
        'link' => 'http://www.lifebefore.co.kr/rok/townhall.php',
        'thumb' => array(
            'image' => 'http://www.lifebefore.co.kr/rok/images/logo.png',
            'style' => 'background:#e7cf78;',
        ),
        'workImage' => array(
            './images/work/work_2/1.png',
            './images/work/work_2/2.PNG',
            './images/work/work_2/3.PNG',
            './images/work/work_2/4.PNG',
            './images/work/work_2/5.PNG',
            './images/work/work_2/6.PNG',
            './images/work/work_2/7.PNG',
            './images/work/work_2/8.PNG',
        ),
        'workTask' => array(
            '사용자 유입 유도',
            '복잡한 tree구조의 조합식의 필요 재원을 정리하여 한 눈에 볼 수 있도록 구현',
            '단순 계산의 유저 편의성을 개선',
            '<strong>특성(스킬) 구성 환경을 게임과 완전 동일하게 구현</strong>',
            '특성 구성시 반드시 필요한 선행 특성 없이는 다음 특성을 배울 수 없도록 구현',
            '현재 배울 수 없는 특성 클릭시 필요 선행 특성을 표시하도록 구현',
            '특성 세팅을 사용자가 저장, 조회, 수정, 추천 할 수 있는 기능',
            '모바일 유저를 위해 반응형 대응'
        )
    ),
    '10' => array(
        'id' => 10,
        'title' => '언던 유틸',
        'kind' => '개인 프로젝트',
        'summary' => '모바일 게임 [언던]<br>데이터 정보, 편의 기능',
        'service' => '유저들에게 모바일 게임 [언던]에 대한 데이터와 편의 기능을 제공하는 사이트 입니다.<br>트리형 조합이 복잡하여 계산하기 어려운 부분에 대해 편의성을 제공합니다.<br>유용한 정보를 유저가 등록하고 조회할 수 있습니다.<br>게임 내 시스템을 분석하여 관련 정보를 제공합니다.',
        'stack' => array(
            array(
                'tag' => 'bac',
                'text' => 'PHP'
            ),
            array(
                'tag' => 'db',
                'text' => 'mySql'
            ),
            array(
                'tag' => 'fro',
                'text' => 'javascript'
            ),
            array(
                'tag' => 'fro',
                'text' => 'jQuery'
            ),
            array(
                'tag' => 'pub',
                'text' => 'CSS'
            ),
        ),
        'contentPage'=>false,
        'link' => 'http://www.lifebefore.co.kr/undawn_util',
        'thumb' => array(
            'image' => './images/undawn_bg.png',
            'imageStyle' => 'height:100%; width:100%; object-fit:cover;',
        ),
        'workImage' => array(
            './images/work/work_10/1.png',
            './images/work/work_10/2.png',
            './images/work/work_10/3.png',
            './images/work/work_10/4.png',
        ),
        'workTask' => array(
            '사용자 유입 유도',
            '복잡한 tree구조의 조합식의 가격 정보와 필요 갯수를 최대한 보기 편하게 정리',
            '모바일 유저를 위해 반응형 대응'
        )
    ),
    '4' => array(
        'id' => 4,
        'title' => '알비온넷',
        'kind' => '개인 프로젝트',
        'summary' => '온라인 게임 [알비온]<br>데이터 정보, 편의 기능',
        'service' => '유저들에게 온라인 게임 [알비온]에 대한 데이터와 편의 기능을 제공하는 사이트 입니다.
            <br>단순 계산 기능과 API를 통한 데이터 검색 기능을 제공합니다.',
        'stack' => array(
            array(
                'tag' => 'fro',
                'text' => 'javascript'
            ),
            array(
                'tag' => 'fro',
                'text' => 'jQuery'
            ),
            array(
                'tag' => 'pub',
                'text' => 'CSS'
            ),
            array(
                'tag' => 'etc',
                'text' => 'API'
            ),
        ),
        'link' => 'http://www.lifebefore.co.kr/albionnet/index.php',
        'thumb' => array(
            'image' => 'http://www.lifebefore.co.kr/albionnet/images/marketplace_bg.jpg',
            'imageStyle' => 'height:100%; width:100%; object-fit:cover;',
        ),
        'workImage' => array(
            './images/work/work_4/1.PNG',
            './images/work/work_4/2.PNG',
            './images/work/work_4/3.PNG',
            './images/work/work_4/4.PNG',
            './images/work/work_4/5.PNG',
        ),
        'workTask' => array(
            '사용자 유입 유도',
            '단순 계산의 유저 편의성을 개선',
            '공개 API를 이용하여 유저, 아이템 시세 검색 기능',
            '모바일 유저를 위해 반응형 대응'
        )
    ),
    '6' => array(
        'id' => 6,
        'title' => 'Hyuk Jo',
        'kind' => '개인 작업',
        'summary' => '디자이너 포트폴리오<br>Admin, 로그 관리',
        'service' => '디자이너 웹 포트폴리오 입니다. <br>디자이너가 사이트 관리가 가능하도록 Admin을 제공합니다. <br>로그를 기록하여 채용 담당자가 어떤 작품을 유심히 봤는지 디자이너가 체크할 수 있도록 만들었습니다.',
        'stack' => array(
            array(
                'tag' => 'bac',
                'text' => 'PHP'
            ),
            array(
                'tag' => 'db',
                'text' => 'mySql'
            ),
            array(
                'tag' => 'fro',
                'text' => 'javascript'
            ),
            array(
                'tag' => 'fro',
                'text' => 'jQuery'
            ),
            array(
                'tag' => 'pub',
                'text' => 'CSS'
            ),
        ),
        'link' => 'http://www.johyuk.com?id=ohsssuk_path',
        'thumb' => array(
            'image' => 'http://www.johyuk.com/images/logo.png',
            'style' => 'background: #fff',
            'imageStyle' => 'width: 70%;',
        ),
        'workImage' => array(
            './images/work/work_5/1.PNG',
            './images/work/work_5/2.PNG',
            './images/work/work_5/3.PNG',
            './images/work/work_5/7.PNG',
            './images/work/work_5/4.PNG',
            './images/work/work_5/5.PNG',
            './images/work/work_5/6.PNG',
        ),
        'workTask' => array(
            '디자이너 웹 포트폴리오 작업',
            '지속적인 작품 추가,수정으로 인해 관리 포인트 필요',
            'Admin 제공',
            '지원별로 별도의 파라미터를 제공하여 어떤 사람이 포트폴리오에 방문했는지 로그 기록',
            '어떤 작품을 유심히, 많이 봤는지 파악하는 기능 제공',
        )
    ),
//    '7' => array(
//        'id' => 7,
//        'title' => '숙명여대 회화과',
//        'kind' => '개인 작업',
//        'summary' => '학과 홈페이지<br>Admin 관리',
//        'service' => '대학교 학과 홈페이지 입니다. <br>요청사항에 따라 반응형 웹사이트로 개발했습니다. <br>관리자 Admin을 제공합니다. ckEditor를 사용하여 관리자가 게시판을 편집할 수 있도록 했습니다.',
//        'stack' => array(
//            array(
//                'tag' => 'bac',
//                'text' => 'PHP'
//            ),
//            array(
//                'tag' => 'db',
//                'text' => 'mySql'
//            ),
//            array(
//                'tag' => 'fro',
//                'text' => 'javascript'
//            ),
//            array(
//                'tag' => 'fro',
//                'text' => 'jQuery'
//            ),
//            array(
//                'tag' => 'pub',
//                'text' => 'CSS'
//            ),
//        ),
//        'link' => 'http://www.smfineart.co.kr/',
//        'thumb' => array(
//            'image' => 'http://www.smfineart.co.kr/images/logo.svg',
//            'style' => 'background: #080808;',
//            'imageStyle' => 'width: 70%;',
//        ),
//        'workImage' => array(
//            './images/work/work_6/1-a.png',
//            './images/work/work_6/2-a.png',
//            './images/work/work_6/6.png',
//            './images/work/work_6/7.PNG',
//            './images/work/work_6/8.PNG',
//            './images/work/work_6/9.PNG',
//            './images/work/work_6/10.PNG',
//        ),
//        'workTask' => array(
//            'Admin 제공',
//            '게시판 편집 기능을 위해 cdEditor 라이브러리 사용',
//            '지속적으로 이미지를 업로드하고 관리할 수 있는 기능',
//            '반응형',
//            '애니메이션 효과를 위해 CSS 트랜지션 효과를 최대한 사용',
//        )
//    ),
    '8' => array(
        'id' => 8,
        'title' => '배세복 치과의원',
        'kind' => '개인 작업',
        'summary' => '치과 홈페이지<br>인스타그램 연동',
        'service' => '퍼블리싱, 인스타그램 연동',
        'stack' => array(
            array(
                'tag' => 'fro',
                'text' => 'javascript'
            ),
            array(
                'tag' => 'fro',
                'text' => 'jQuery'
            ),
            array(
                'tag' => 'pub',
                'text' => 'CSS'
            ),
            array(
                'tag' => 'etc',
                'text' => 'API'
            ),
        ),
        'link' => 'http://www.baedent.com/index.html',
        'thumb' => array(
            'image' => 'http://www.baedent.com/images/logo/main.png',
            'style' => 'background: #f3f3f3',
            'imageStyle' => 'width: 70%;',
        ),
        'direct' => true,
    ),
);
?>


