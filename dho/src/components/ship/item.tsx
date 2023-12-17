import React from 'react';

import colors from '../../constants/colors';
import Input from '../Input';
import Row from '../Row';
import Col from '../Col';

import styled from 'styled-components';


const StyledLi = styled.li`
  border: 1px solid ${colors.keyColor};
  list-style: none;
  border-radius: 8px;
  box-sizing: border-box;
  padding: 8px;
  margin: 4px;
  max-width: calc(50% - 8px);

  @media (min-width: 700px) {
    max-width: calc(25% - 8px);
  }
`;

const StyledTitle = styled.p`
  display: block;
  padding: 0 4px;
  font-size: 13px;
  font-weight: 500;
  line-height: 1.6;
  color: ${colors.keyColor};
  width: 100%;
  background: #dddddd;
  margin-bottom: 4px;
`;

interface ItemProps {
  itemRef: React.RefObject<HTMLLIElement>;
}

interface itemRow {
  title: string;
  name: string;
  isHaveBonus: boolean;
}

function Item({
  itemRef
}: ItemProps) {
  const itemRow: itemRow[] = [
    {
      title: '내파',
      name: 'naepha',
      isHaveBonus: true,
    },
    {
      title: '돌파',
      name: 'dolpha',
      isHaveBonus: true,
    },
    {
      title: '쇄빙',
      name: 'shebing',
      isHaveBonus: true,
    }
  ];
  
  return (
    <StyledLi ref={itemRef}>
      {itemRow.map((row, index) => (
      <div key={index} style={{ marginTop: index === 0 ? '0' : '10px' }}>
        <Row><StyledTitle>{row.title}</StyledTitle></Row>
        <Row>
          <Col>
            <Input 
              name={row.name}
              type="number"
            />
          </Col>
          {row.isHaveBonus ? 
          <Col style={{color: colors.bonusValue, display:'flex', alignItems:'center'}}>
            (+<Input 
              name={`${row.name}_bonus`}
              type="number"
              style={{color: colors.bonusValue}}
            />)
          </Col>
          : null}
        </Row>
      </div>
      ))}
    </StyledLi>
  );
}

export default Item;
