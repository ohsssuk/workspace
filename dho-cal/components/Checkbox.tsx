import { faCheckSquare, faSquare } from '@fortawesome/free-regular-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

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
    <div className="inline-flex items-center">
      <input
        type="checkbox"
        id={id}
        checked={checked}
        onChange={handleCheckboxChange}
        className="sr-only"
      />
      <label
        htmlFor={id}
        className={`inline-flex items-center cursor-pointer text-base rounded-md pl-1 pr-2 py-1 ${checked ? 'bg-gray-600' : ''}`}
      >
        <FontAwesomeIcon
          icon={checked ? faCheckSquare : faSquare}
          className={`mr-1 w-6 h-6 ${checked ? 'text-white' : 'text-gray-500'}`}
        />
        <span className={`text-sm ${checked ? 'text-white' : 'text-gray-500'}`}>
          {label}
        </span>
      </label>
    </div>
  );
}
