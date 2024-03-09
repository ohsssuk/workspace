'use client';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faTrashAlt, faSailboat } from '@fortawesome/free-solid-svg-icons';

import Image from 'next/image';
import { ShipItemProps } from './ShipItemProps';

import styles from './fleet.module.css';
import Input from '@/components/Input';

import { statRow } from './data';
import Checkbox from '@/components/Checkbox';
import Button from '@/components/Button';

export default function ShipItem({
  option,
  index,
  onChange,
}: {
  option: ShipItemProps;
  index: number;
  onChange: (option: ShipItemProps, index: number) => void;
}) {
  const changeShipStat = ({
    index,
    key,
    value,
  }: {
    index: number;
    key: string;
    value: string | number | boolean;
  }) => {
    option[key] = value;
    onChange(option, index);
  };

  const deleteShipItem = () => {
    if (!confirm(`[${option.name}]을 삭제할까요?`)) {
      return;
    }

    option.isDelete = true;
    onChange(option, index);
  };

  return (
    <li className={styles.item}>
      <section className={styles.menu}>
        <div>
          <Checkbox
            id={`isUse_${index}`}
            label={`${option.isUse ? '사용' : '대기'}`}
            checked={option.isUse}
            onChange={(value) => changeShipStat({ index, key: 'isUse', value })}
          />
        </div>
        <div>
          <Button onClick={deleteShipItem}>
            <FontAwesomeIcon icon={faTrashAlt} className="text-gray-500" />
          </Button>
        </div>
      </section>
      <section className={styles.head}>
        <div className={styles.icon}>
          <FontAwesomeIcon icon={faSailboat} />
        </div>
        <div className={styles.name}>
          <Input
            id={`name_${index}`}
            value={option.name}
            className={styles.input}
            placeholder="선박 이름"
            onChange={(value) => changeShipStat({ index, key: 'name', value })}
          />
        </div>
      </section>
      <section className={styles.body}>
        {statRow.map((stat) => (
          <div key={stat.val} className={styles.stat_row}>
            <label htmlFor={`${stat.val}_${index}`}>{stat.kor}</label>
            <Input
              type="number"
              id={`${stat.val}_${index}`}
              className={styles.input}
              value={String(option[stat.val] ?? '')}
              placeholder={`${stat.placeholder ?? `${stat.kor} 입력`}`}
              onChange={(value) =>
                changeShipStat({ index, key: stat.val, value: Number(value) })
              }
            />
          </div>
        ))}
      </section>
    </li>
  );
}
