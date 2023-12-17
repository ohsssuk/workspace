import { HTMLAttributes } from 'react';

interface Props extends HTMLAttributes<HTMLImageElement> {
  name: string;
  size: number;
  className?: string;
}

function Icon({ name, size, className, ...rest }: Props) {
  return (
    <img
      alt={name}
      src={`../images/icon/${name}`}
      width={size}
      height={size}
      className={className}
      {...rest}
    />
  );
}

export default Icon;
