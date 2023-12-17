import { ReactNode } from 'react';
import styled from 'styled-components';

interface Props {
  children: ReactNode;
}
  
const StyledDiv = styled.div`
  max-width: 100%;
  padding: 0;
  margin: 0;
  height: auto;

  @media (min-width: 700px) {
    padding: 24px;
  }
`;

function Container({ children }: Props) {
  return (
    <StyledDiv>
      <div>
        {children}
      </div>
    </StyledDiv>
  );
}

export default Container;
