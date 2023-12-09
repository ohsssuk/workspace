var jawon = [
    {
        name : '목재 재료',
        data : [
            ['삼나무 껍질','./images/rcs/wood_common_1.png'],
            ['물푸레 나뭇가지','./images/rcs/wood_common_2.png'],
            ['송진','./images/rcs/wood_common_3.png'],
            
            ['레드우드','./images/rcs/wood_uncommon_1.png'],
            ['흰물푸레 나무','./images/rcs/wood_uncommon_2.png'],
            ['노간주 나무','./images/rcs/wood_uncommon_3.png'],
//            ['자작나무껍질','./images/rcs/update/jajakggup.png','벌목공'],
        ]
    },
    {
        name : '광물 재료',
        data : [
            ['철광석','./images/rcs/stone_common_1.png'],
            ['구리 광석','./images/rcs/stone_common_2.png'],
            ['알루미늄 광석','./images/rcs/stone_common_3.png'],
            
            ['금운모','./images/rcs/stone_uncommon_1.png'],
            ['말라카이트','./images/rcs/stone_uncommon_2.png'],
            ['시트린','./images/rcs/stone_uncommon_3.png'],
        ]
    },
    {
        name : '천 재료',
        data : [
            ['목화 씨앗','./images/rcs/silk_common_1.png'],
            ['아사 씨앗','./images/rcs/silk_common_2.png'],
            ['흰 목화 씨앗','./images/rcs/silk_common_3.png'],
            
            ['목화 솜','./images/rcs/silk_uncommon_1.png'],
            ['아사 목화','./images/rcs/silk_uncommon_2.png'],
            ['흰 목화꽃','./images/rcs/silk_uncommon_3.png'],
        ]
    },
    {
        name : '몬스터 재료',
        data : [
            ['찢어진 가죽','./images/rcs/monster_common_1.png'],
            ['짐승 가죽 조각','./images/rcs/monster_common_2.png'],
            ['상급 짐승 가죽','./images/rcs/monster_common_3.png'],
            
            ['동물의 이빨','./images/rcs/monster_uncommon_1.png'],
            ['힘줄','./images/rcs/monster_uncommon_2.png'],
            ['동물의 뿔','./images/rcs/monster_uncommon_3.png'],
        ]
    },
    {
        name : '그 외 재료',
        data : [
            ['목재','./images/rcs/ex_2.png'],
            ['돌','./images/rcs/ex_1.png'],
            ['식물섬유','./images/rcs/ex_3.png'],
            ['기름','./images/rcs/ex_4.png'],
            ['희귀 금속','./images/rcs/ex_5.png'],
            ['희귀 플레이트','./images/rcs/ex_6.png'],
            ['이온막','./images/rcs/ex_7.png'],
        ]
    },
];
var banjepoom = [
    {
        name : '목판',
        need : [
            ['목재', 250],
            ['삼나무 껍질', 5],
            ['찢어진 가죽', 4],
            ['레드우드', 3],
            ['동물의 이빨', 1],
        ],
        src : './images/ban/wood_1.png',
    },
    {
        name : '철 합금',
        need : [
            ['돌', 70],
            ['삼나무 껍질', 4],
            ['철광석', 5],
            ['레드우드', 1],
            ['금운모', 3],
        ],
        src : './images/ban/stone_1.png',
    },
    {
        name : '투박한 가죽',
        need : [
            ['기름', 15],
            ['목화 씨앗', 4],
            ['찢어진 가죽', 5],
            ['목화 솜', 1],
            ['동물의 이빨', 3],
        ],
        src : './images/ban/monster_1.png',
    },
    {
        name : '부직포',
        need : [
            ['식물섬유', 20],
            ['철광석', 4],
            ['목화 씨앗', 5],
            ['금운모', 1],
            ['목화 솜', 3],
        ],
        src : './images/ban/silk_1.png',
    },
    
    {
        name : '합판',
        need : [
            ['목재', 350],
            ['물푸레 나뭇가지', 5],
            ['짐승 가죽 조각', 4],
            ['흰물푸레 나무', 3],
            ['힘줄', 1],
        ],
        src : './images/ban/wood_2.png',
    },
    {
        name : '구리 합금',
        need : [
            ['돌', 90],
            ['물푸레 나뭇가지', 4],
            ['구리 광석', 5],
            ['흰물푸레 나무', 1],
            ['말라카이트', 3],
        ],
        src : './images/ban/stone_2.png',
    },
    {
        name : '일반 가죽',
        need : [
            ['기름', 15],
            ['아사 씨앗', 4],
            ['짐승 가죽 조각', 5],
            ['아사 목화', 1],
            ['힘줄', 3],
        ],
        src : './images/ban/monster_2.png',
    },
    {
        name : '부드러운 융단',
        need : [
            ['식물섬유', 20],
            ['구리 광석', 4],
            ['아사 씨앗', 5],
            ['말라카이트', 1],
            ['아사 목화', 3],
        ],
        src : './images/ban/silk_2.png',
    },
    
    {
        name : '파티클 보드',
        need : [
            ['목재', 400],
            ['송진', 5],
            ['상급 짐승 가죽', 4],
            ['노간주 나무', 3],
            ['동물의 뿔', 1],
        ],
        src : './images/ban/wood_3.png',
    },
    {
        name : '단단한 알루미늄 합금',
        need : [
            ['돌', 100],
            ['송진', 4],
            ['알루미늄 광석', 5],
            ['노간주 나무', 1],
            ['시트린', 3],
        ],
        src : './images/ban/stone_3.png',
    },
    {
        name : '좋은 가죽',
        need : [
            ['기름', 15],
            ['흰 목화 씨앗', 4],
            ['상급 짐승 가죽', 5],
            ['흰 목화꽃', 1],
            ['동물의 뿔', 3],
        ],
        src : './images/ban/monster_3.png',
    },
    {
        name : '화학섬유 천',
        need : [
            ['식물섬유', 20],
            ['알루미늄 광석', 4],
            ['흰 목화 씨앗', 5],
            ['시트린', 1],
            ['흰 목화꽃', 3],
        ],
        src : './images/ban/silk_3.png',
    },
//    {
//        name : '강철 플라스틱 복합 파이프',
//        need : [
//            ['쐐기풀 잎',7],
//            ['자작나무껍질',13],
//            ['촉수',4],
//        ],
//        src : './images/rcs/update/ganchulpla.png',
//        special : '목수'
//    },
];

var wanjepoom = [
    {
        name : '열가소성 코팅',
        need : [
            ['합판', 1],
            ['구리 합금', 1],
            ['부드러운 융단', 1],
            ['일반 가죽', 1],
            ['이온막', 4],
        ],
        src : './images/ban/eon_1.png',
    },
    {
        name : '이온 코팅',
        need : [
            ['파티클 보드', 1],
            ['단단한 알루미늄 합금', 1],
            ['화학섬유 천', 1],
            ['좋은 가죽', 1],
            ['이온막', 4],
        ],
        src : './images/ban/eon_2.png',
    },
    
    {
        name : '수리 부품(1등급)',
        need : [
            ['철광석', 5],
            ['찢어진 가죽', 5],
            ['삼나무 껍질', 5],
            ['목화 씨앗', 5],
        ],
        src : './images/icon/fix.png',
    },
    {
        name : '수리 부품(2등급)',
        need : [
            ['구리 광석', 5],
            ['짐승 가죽 조각', 5],
            ['물푸레 나뭇가지', 5],
            ['아사 씨앗', 5],
        ],
        src : './images/icon/fix.png',
    },
    {
        name : '수리 부품(3등급)',
        need : [
            ['알루미늄 광석', 5],
            ['상급 짐승 가죽', 5],
            ['송진', 5],
            ['흰 목화 씨앗', 5],
        ],
        src : './images/icon/fix.png',
    },
    
    {
        name : '10레벨 총기류',
        need : [
            ['철광석', 15],
            ['찢어진 가죽', 15],
            ['삼나무 껍질', 15],
            ['목화 씨앗', 15],
        ],
        src : './images/icon/gun.png',
    },
    {
        name : '10레벨 근접 무기',
        need : [
            ['철광석', 3],
            ['찢어진 가죽', 3],
            ['삼나무 껍질', 3],
            ['목화 씨앗', 3],
        ],
        src : './images/icon/sword.png',
    },
    {
        name : '20레벨 총기류',
        need : [
            ['목판', 1],
            ['철 합금', 3],
            ['투박한 가죽', 1],
            ['희귀 금속', 1],
        ],
        src : './images/icon/gun.png',
    },
    {
        name : '20레벨 근접 무기',
        need : [
            ['철 합금', 3],
            ['희귀 금속', 1],
        ],
        src : './images/icon/sword.png',
    },
    {
        name : '30레벨 총기류',
        need : [
            ['철 합금', 2],
            ['합판', 2],
            ['구리 합금', 5],
            ['일반 가죽', 2],
            ['희귀 금속', 2],
        ],
        src : './images/icon/gun.png',
    },
    {
        name : '30레벨 중화기',
        need : [
            ['철 합금', 4],
            ['합판', 4],
            ['구리 합금', 10],
            ['일반 가죽', 4],
            ['희귀 금속', 4],
        ],
        src : './images/icon/machine.png',
    },
    {
        name : '30레벨 근접 무기',
        need : [
            ['부드러운 융단', 2],
            ['희귀 금속', 1],
        ],
        src : './images/icon/sword.png',
    },
    {
        name : '40레벨 총기류',
        need : [
            ['합판', 2],
            ['구리 합금', 6],
            ['일반 가죽', 3],
            ['희귀 금속', 2],
        ],
        src : './images/icon/gun.png',
    },
    {
        name : '40레벨 중화기',
        need : [
            ['합판', 4],
            ['구리 합금', 12],
            ['일반 가죽', 6],
            ['희귀 금속', 4],
        ],
        src : './images/icon/machine.png',
    },
    {
        name : '40레벨 근접 무기',
        need : [
            ['구리 합금', 2],
            ['희귀 금속', 1],
        ],
        src : './images/icon/sword.png',
    },
    {
        name : '50레벨 총기류',
        need : [
            ['구리 합금', 3],
            ['파티클 보드', 3],
            ['단단한 알루미늄 합금', 6],
            ['좋은 가죽', 3],
            ['희귀 금속', 3],
        ],
        src : './images/icon/gun.png',
    },
    {
        name : '50레벨 중화기',
        need : [
            ['구리 합금', 6],
            ['파티클 보드', 6],
            ['단단한 알루미늄 합금', 12],
            ['좋은 가죽', 6],
            ['희귀 금속', 6],
        ],
        src : './images/icon/machine.png',
    },
    {
        name : '50레벨 근접 무기',
        need : [
            ['구리 합금', 1],
            ['단단한 알루미늄 합금', 2],
            ['희귀 금속', 1],
        ],
        src : './images/icon/sword.png',
    },
    {
        name : '60레벨 총기류',
        need : [
            ['파티클 보드', 4],
            ['단단한 알루미늄 합금', 10],
            ['좋은 가죽', 5],
            ['희귀 금속', 4],
        ],
        src : './images/icon/gun.png',
    },
    {
        name : '60레벨 중화기',
        need : [
            ['파티클 보드', 8],
            ['단단한 알루미늄 합금', 20],
            ['좋은 가죽', 10],
            ['희귀 금속', 8],
        ],
        src : './images/icon/machine.png',
    },
    {
        name : '60레벨 근접 무기',
        need : [
            ['단단한 알루미늄 합금', 4],
            ['희귀 금속', 1],
        ],
        src : './images/icon/sword.png',
    },
    
    {
        name : '호크 돌격 상의',
        need : [
            ['부드러운 융단', 2],
            ['파티클 보드', 2],
            ['화학섬유 천', 3],
            ['희귀 플레이트', 1],
        ],
        src : './images/icon/armor.png',
    },
    {
        name : '호크 전술 하의',
        need : [
            ['일반 가죽', 1],
            ['파티클 보드', 1],
            ['좋은 가죽', 3],
            ['희귀 플레이트', 1],
        ],
        src : './images/icon/armor.png',
    },
    {
        name : '호크 야구 모자',
        need : [
            ['부드러운 융단', 1],
            ['파티클 보드', 1],
            ['화학섬유 천', 3],
            ['희귀 플레이트', 1],
        ],
        src : './images/icon/armor.png',
    },
    {
        name : '호크 전술 장갑',
        need : [
            ['부드러운 융단', 1],
            ['화학섬유 천', 1],
            ['좋은 가죽', 2],
            ['희귀 플레이트', 1],
        ],
        src : './images/icon/armor.png',
    },
    {
        name : '호크 전술 신발',
        need : [
            ['부드러운 융단', 1],
            ['파티클 보드', 1],
            ['화학섬유 천', 3],
            ['희귀 플레이트', 1],
        ],
        src : './images/icon/armor.png',
    },
    {
        name : '방폭 아머',
        need : [
            ['부드러운 융단', 4],
            ['파티클 보드', 2],
            ['화학섬유 천', 6],
            ['좋은 가죽', 3],
            ['희귀 플레이트', 3],
        ],
        src : './images/icon/armor.png',
    },
    
    {
        name : '엘리게이터 돌격 상의',
        need : [
            ['파티클 보드', 3],
            ['화학섬유 천', 6],
            ['희귀 플레이트', 2],
        ],
        src : './images/icon/armor.png',
    },
    {
        name : '엘리게이터 작업 하의',
        need : [
            ['파티클 보드', 2],
            ['좋은 가죽', 5],
            ['희귀 플레이트', 1],
        ],
        src : './images/icon/armor.png',
    },
    {
        name : '엘리게이터 군모',
        need : [
            ['파티클 보드', 1],
            ['화학섬유 천', 4],
            ['좋은 가죽', 2],
            ['희귀 플레이트', 1],
        ],
        src : './images/icon/armor.png',
    },
    {
        name : '엘리게이터 돌격 장갑',
        need : [
            ['화학섬유 천', 1],
            ['좋은 가죽', 3],
            ['희귀 플레이트', 1],
        ],
        src : './images/icon/armor.png',
    },
    {
        name : '엘리게이터 전술 장화',
        need : [
            ['파티클 보드', 1],
            ['화학섬유 천', 3],
            ['희귀 플레이트', 1],
        ],
        src : './images/icon/armor.png',
    },
    {
        name : '크롬 강철 아머',
        need : [
            ['파티클 보드', 3],
            ['화학섬유 천', 10],
            ['좋은 가죽', 5],
            ['희귀 플레이트', 4],
        ],
        src : './images/icon/armor.png',
    },
    
    {
        name : '3등급 항속 모듈',
        need : [
            ['희귀 금속', 4],
            ['구리 합금', 2],
            ['파티클 보드', 3],
            ['단단한 알루미늄 합금', 10],
            ['좋은 가죽', 5],
        ],
        src : './images/icon/drone.png',
    },
    {
        name : '3등급 드론 부품(파워 모듈, 항속 모듈, 칩)',
        need : [
            ['희귀 금속', 4],
            ['구리 합금', 2],
            ['파티클 보드', 3],
            ['단단한 알루미늄 합금', 10],
            ['좋은 가죽', 5],
        ],
        src : './images/icon/drone.png',
    },
    {
        name : '3등급 드론 부품(구조 모듈, 화력 모듈)',
        need : [
            ['희귀 금속', 3],
            ['철 합금', 2],
            ['합판', 3],
            ['구리 합금', 8],
            ['일반 가죽', 4],
        ],
        src : './images/icon/drone.png',
    },
    {
        name : '3등급 드론 부품(코어 모듈)',
        need : [
            ['희귀 금속', 6],
            ['철 합금', 4],
            ['합판', 7],
            ['구리 합금', 15],
            ['일반 가죽', 8],
        ],
        src : './images/icon/drone.png',
    },
    
    {
        name : '4등급 드론 부품(파워 모듈, 항속 모듈, 칩)',
        need : [
            ['희귀 금속', 4],
            ['단단한 알루미늄 합금', 3],
            ['섬유판', 4],
            ['주석 합금', 7],
            ['부드러운 가죽', 3],
        ],
        src : './images/icon/drone.png',
    },
    {
        name : '4등급 드론 부품(구조 모듈, 화력 모듈)',
        need : [
            ['희귀 금속', 4],
            ['구리 합금', 3],
            ['파티클 보드', 4],
            ['단단한 알루미늄 합금', 7],
            ['좋은 가죽', 3],
        ],
        src : './images/icon/drone.png',
    },
    {
        name : '4등급 드론 부품(코어 모듈)',
        need : [
            ['희귀 금속', 8],
            ['구리 합금', 6],
            ['파티클 보드', 8],
            ['단단한 알루미늄 합금', 15],
            ['좋은 가죽', 6],
        ],
        src : './images/icon/drone.png',
    },
];

//    {
//        name : '',
//        need : [
//            ['',],
//        ],
//        src : './images/rcs/fullitem/.png',
//    },





