import { useEffect, useState } from 'react';

type InputProps = {
  id?: string;
  className?: string;
  placeholder: string;
  value?: string;
  type?: string;
  onChange?: (value: string) => void;
};

export default function Input({
  id = '',
  className = '',
  value = '',
  placeholder,
  type = 'text',
  onChange,
}: InputProps) {
  const [inputValue, setInputValue] = useState(value);

  const handleChange = (value: string) => {
    setInputValue(value);

    if (onChange) {
      onChange(value);
    }
  };

  useEffect(() => {
    setInputValue(value);
  }, [value]);

  return (
    <div className={className}>
      <input
        id={id}
        type={type}
        value={inputValue}
        placeholder={placeholder}
        onChange={(e: React.ChangeEvent<HTMLInputElement>) =>
          handleChange(e.target.value)
        }
      />
    </div>
  );
}
