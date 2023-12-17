import { ReactNode, HTMLAttributes } from 'react';
import styled from 'styled-components';

interface Props extends HTMLAttributes<HTMLDivElement>{
  children: ReactNode;
}
  
const StyledDiv = styled.div`
  
`;

function Row({ children, ...props }: Props) {
  return (
    <StyledDiv {...props}>
      {children}
    </StyledDiv>
  );
}

export default Row;