type CheckboxProps = {
  id: string;
  label: string;
  checked: boolean;
  onChange: (checked: boolean) => void;
};

export default function Checkbox({
  id,
  label,
  checked,
  onChange,
}: CheckboxProps) {
  const handleCheckboxChange = (event: React.ChangeEvent<HTMLInputElement>) => {
    onChange(event.target.checked);
  };

  return (
    <div>
      <input
        type="checkbox"
        id={id}
        checked={checked}
        onChange={handleCheckboxChange}
      />
      <label htmlFor={id}>{label}</label>
    </div>
  );
}
