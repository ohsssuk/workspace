import { ReactNode } from 'react';
import styled from 'styled-components';

import colors from '../../constants/colors';

const StyledLUl = styled.ul`
   border: 1px solid ${colors.keyColor};
   list-style: none;
   border-radius: 8px;
   color: ${colors.keyColor};
   display: flex;
   flex-wrap: wrap;
   min-width: 300px;
   padding: 4px;
`;

interface Props {
   children: ReactNode;
 }
 
function List({ children }: Props) {
  return (
    <StyledLUl>
      {children}
    </StyledLUl>
  );
}

export default List;
