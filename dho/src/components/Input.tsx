import { Children, InputHTMLAttributes, ReactElement, ReactNode, cloneElement, useId } from 'react';
import styled from 'styled-components';

import colors from '../constants/colors';

interface InputProps extends InputHTMLAttributes<HTMLInputElement> {
  label?: ReactNode;
  bottomText?: string;
  type? : string;
  isError? : boolean;
  width?: string;
}

const StyledInput = styled.input`
  display: block;
  padding: 0 2px;
  font-size: 15px;
  font-weight: 500;
  line-height: 1.6;
  color: ${colors.keyColor};
  width: 100%;
`;

function Input({ label, type, width, bottomText, isError, style, ...props }: InputProps) {
  const generatedId = useId();
  type = type ?? 'text';

  return (
    <div style={{
        display: 'inline-block',
        width: width ? width : 'auto',
      }}>
      {label != null ? (
      <label
        style={{
          display: 'inline-block',
          padding: '0 4px',
          fontSize: '13px',
          fontWeight: '500',
          lineHeight: 1.6,
          color: colors.keyColor,
        }}
      >
        {label}
      </label>
      ) : null}
      <StyledInput type={type} style={{...style}} {...props}></StyledInput>
      {bottomText != null ? (
        <p
          style={{
            color: isError ? colors.errorColor : colors.keyColor,
            marginTop: '4px',
            display: 'inline-block',
            fontWeight: 400,
            fontSize: '13px',
            width: '100%'
          }}
        >
          {bottomText}
        </p>
      ) : null}
    </div>
  );
}

export default Input;
