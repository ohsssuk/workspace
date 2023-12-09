<?php
    $workReceipt = [
        [
            'head' => '영상 장보기',
            'sub' => [
                '숏폼 컨텐츠 제공 서비스',
            ],
            'participation' => array(
                'FrontEnd(100%)',
                'BackEnd(80%)',
            )
        ],
        [
            'head' => '베스트 상품 목록 개편',
            'sub' => [
                '비동기 방식 상품 목록 동적 생성',
                'js 관리 일원화 개편',
            ],
            'participation' => array(
                'FrontEnd(100%)',
            )
        ],
        [
            'head' => '인플루언서 성과 측정 기능',
            'sub' => [
                'ElasticSearch 사용하여 유입 로그 저장',
                '통계 조회',
            ],
            'participation' => array(
                'FrontEnd(100%)',
                'BackEnd(100%)',
            )
        ],
        [
            'head' => '카트 재구매 기능',
            'sub' => [
                '이전 주문, 상품 재구매 기능',
            ],
            'participation' => array(
                'FrontEnd(100%)',
                'BackEnd(100%)',
            )
        ],
        [
            'head' => '이벤트 운영',
            'sub' => [
                '사용자 참여 투표/퀴즈 관리',
                '관리 기능 개선',
                '연관 쿠폰, 상품 연결 - 쿠폰 사용 프로그레스',
                '템플릿 구조화',
                '필요 기능 개발',
            ],
            'participation' => array(
                'FrontEnd(100%)',
                'BackEnd(100%)',
            )
        ],
        [
            'head' => 'Admin 통계 개편',
            'sub' => [
                'GA, ElasticSearch, DB',
            ],
            'participation' => array(
                'FrontEnd(100%)',
                'BackEnd(100%)',
            )
        ],
        [
            'head' => 'Admin 운영 자동화',
            'sub' => [
                '컨텐츠, GNB, 이미지 메뉴, 팝업 관리 기능 추가',
                '이벤트 관리 기능 추가(ckEditor 플러그인)',
            ],
            'participation' => array(
                'FrontEnd(100%)',
                'BackEnd(90%)',
            )
        ],
        [
            'head' => '특가 컨텐츠 리뉴얼',
            'participation' => array(
                'FrontEnd(100%)',
            )
        ],
        [
            'head' => '영상 컨텐츠 관리',
            'sub' => [
                'Admin 업로드 변환 / 대량 변환 기능',
                '스트리밍, 1 player, 스크롤 방식 재생으로 리소스 효율 개선',
            ],
            'participation' => array(
                'FrontEnd(100%)',
                'BackEnd(80%)',
            )
        ],
        [
            'head' => '메인 리소스 효율 개선',
            'sub' => [
                '영상 컨텐츠 1 player',
                '요소 동적 로딩',
            ],
            'participation' => array(
                'FrontEnd(100%)',
                'BackEnd(100%)',
            )
        ],
        [
            'head' => '팝업 개편',
            'sub' => [
                '종류별 팝업 우선순위, 노출 조건 개편',
            ],
            'participation' => array(
                'FrontEnd(90%)',
            )
        ],
        [
            'head' => '파트 리뉴얼',
            'sub' => [
                '스타일 전체 개편',
                '마이페이지 개편',
                '등급 개편',
                '상품 옵션 개편 등',
                '예약 기능 개편 등',
            ],
            'participation' => array(
                'FrontEnd(80%)',
                'BackEnd(20%)',
            )
        ],
        [
            'head' => '운영 업무 전반',
            'sub' => [
                '플랫폼 기능 추가, 유지/보수 FrontEnd, BackEnd',
                'Admin 기능 추가, 유지/보수 FrontEnd, BackEnd',
                'ES 조회, Kibana 로그 확인',
                '유관 부서 프로젝트 개발 지원',
            ],
        ],
    ];
?>
   

<div class="detail_content">
    <h2>주요 프로젝트</h2>
    <?php foreach($workReceipt as $row) : ?>
        <div class="main_item">
            <div class="head"><?=$row['head'] ?></div>
            <?php if(!empty($row['sub'])) : ?>
                <div class="sub">
                    <?php foreach($row['sub'] as $sub) : ?>
                        <p><?=$sub ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if(!empty($row['participation'])) : ?>
                <div class="participation"><?=implode(' / ', $row['participation']) ?></div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    
    <div class="all_item">
        <h2>전체</h2>
        <pre>
통계 페이지 개발(Admin)
 - 내부 검색어 순위 분석(ES 검색순위, GA 검색어에 해당하는 상품 실제 클릭 횟수,비율)
 - 방문자 통계(GA)
 - 클릭 분석(GA)
 - 상품별 페이지 뷰(ES)
 - 유입 경로 분석(GA)
 - 매출 순위, 배송, 주문 통계(DB)
 - TV 시청 통계(ES) 등
상품 관리 개선
 - crontab 이용한 예약 관리 기능 - 재고 입출고 예약, 판매 수량 제한 예약
 - ck에디터 상품상세 페이지 편집
 - 옵션, 제품 관리
이벤트 퀴즈,투표 기능 개발
 - 참여형 퀴즈,투표 기능
 - 관리자가 퀴즈,투표 만들고 확인, 결과 엑셀 다운로드, 정답 체크 등(정답 유무, 다중 정답 가능)
디자인 개편
 - 디자인 분기별 전체 개편 
 - 공통 컴포넌트 리뉴얼
섹션 관리
 - 마켓 내 관리 컨텐츠 관리 기능
공통 소스 라이브러리화
온보딩 팝업 개편
상품 옵션, 제품 관리 개편
기획전 쿠폰 연결 기능 / 기획전 쿠폰 프로그레스바
주문시 쿠폰 자동 사용
ES 개인정보 이슈 관련 작업(ES)
카테고리 - 최근 본 상품 추가
상품 목록 리뉴얼
베스트 서브 카테고리 추가
전체 스타일 리뉴얼
쿠캣배송 페이지 추가, 카테고리 페이지 쿠캣배송 필터, 베스트 쿠캣배송 필터
쿠폰 최대할인 자동선택 기능 추가
알림 모아보기 기능
주문 재구매 기능
앱 설치 유도 팝업
메인 컨텐츠 개편
영상 장보기
영상 변환 관리 기능
신규 프로젝트 주소록 관리
이주의 상품 리뉴얼
동적 썸네일 관리 기능
개인정보처리방침 개정
주요 카테고리 메뉴, 인기키워드 메인 추가
특정 기능 들어간 기획전
상품 카테고리 세일 페이지 추가
마이페이지 리뉴얼
이벤트 에디터 - 페이 템플릿, 유의사항 템플릿 추가
기획전 알림 신청 기능
블랙프라이데이 기획전
쿠캣데이 기획전
신상마켓 서비스
스낵컨텐츠
메인 효율 개선
영상 장보기 API 내부시스템으로 개편
런칭특가 개편
팝업 라이브러리 개편, 팝업 추가
회원 정보 분리보관
반복 업무 자동화(숏메뉴 관리, 이벤트 레이아웃, 기획전 커스텀 상품목록, GNB 관리 기능 추가)
상품 상세 페이지 영상 썸네일 기능
카테고리 개편
쿠캣데이 라벨 적용 / 타임딜 자동화
Admin 엑셀 다운로드 추가
큐레이션 상세 페이지 생성
ES 버전업 대응
판매가 대체문구 관리
에디터 이벤트 페이지 상품 템플릿 추가
신상품,베스트 생성 정책 변경
CCMC 기간 설정 초단위 일원화
미디어 마이그레이션 기능 추가
CK에디터 요청사항 대응
딥링크 동적 생성
메인 서비스 구조 수정
런칭특가 라벨 관리
쿠캣데이
채널톡 정보 연동
스낵이벤트
팝업 타입 추가
베스트 개편
        </pre>
    </div>
</div>
    
<style>
    .detail_content h2{
        font-size: 16px;
        font-weight: 700;
        margin: 24px 0;
    }
    .detail_content{
        line-height: 1.4;
    }
    .detail_content strong{
        font-weight: 700;
    }
    .detail_content .main_item{
        margin-top: 24px;
    }
    .detail_content .head{
        font-weight: 700;
        font-size: 18px;
    }
    .detail_content .sub{
        font-size: 16px;
        margin-top: 4px;
    }
    .detail_content .sub p{
        padding-left: 10px;
        position: relative;
        margin-top :4px;
    }
    .detail_content .sub p::before{
        content: '-';
        width: 10px;
        position: absolute;
        top: 0;
        left: 0;
        text-align: left;
    }
    .detail_content .participation{
        font-size: 12px;
        margin-top: 8px;
    }
    .detail_content .all_item{
        margin-top: 100px;
        line-height: 1.6;
    }
</style>







