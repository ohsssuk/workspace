import { ButtonHTMLAttributes, Ref, forwardRef, useId } from 'react';
import styled from 'styled-components';

import colors from '../constants/colors';

const StyledButton = styled.button`
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 56px;
  border: 0 solid transparent;
  border-radius: 8px;
  background-color: ${colors.keyColor};
  color: #ffffff;
  font-size: 17px;
  font-weight: 600;
  white-space: nowrap;
  user-select: none;
  -webkit-font-smoothing: antialiased;
  transition: color 0.1s ease-in-out, background-color 0.1s ease-in-out;
  cursor: pointer;

  &:focus {
    outline: none;
  }

  &:disabled {
    opacity: 0.26;
    cursor: not-allowed;
  }

  &:active {
    background-color: ${colors.activeColor};
  }
`;

interface Props extends ButtonHTMLAttributes<HTMLButtonElement> {
  fullWidth?: boolean;
}
const Button = forwardRef(function Button(props: Props, forwardedRef: Ref<HTMLButtonElement>) {
  const { fullWidth = true, children, ...rest } = props;
  const buttonId = useId();

  return (
    <StyledButton
      style={{
        width: fullWidth ? '100%' : 'auto'
      }}
      ref={forwardedRef}
      id={buttonId}
      {...rest}>
      {children}
    </StyledButton>
  );
});

export default Button;
