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
  const handleInputChange = (value: string) => {
    if (onChange) {
      onChange(value);
    }
  };

  return (
    <div className={className}>
      <input
        id={id}
        type={type}
        value={value}
        placeholder={placeholder}
        onChange={(e: React.ChangeEvent<HTMLInputElement>) =>
          handleInputChange(e.target.value)
        }
      />
    </div>
  );
}
