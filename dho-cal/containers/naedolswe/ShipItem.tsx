'use client';

import Image from 'next/image';
import { ShipItemProps } from './ShipItemProps';

import styles from './naedolswe.module.css';
import Input from '@/components/Input';

export default function ShipItem({
  option,
  index,
}: {
  option: ShipItemProps;
  index: number;
}) {
  const statRow = [
    {
      kor: '내파',
      eng: 'nae',
      placeholder: '내파 수치 입력',
    },
    {
      kor: '돌파',
      eng: 'dol',
      placeholder: '돌파 수치 입력',
    },
    {
      kor: '쇄빙',
      eng: 'swe',
      placeholder: '쇄빙 수치 입력',
    },
  ];

  return (
    <li className={styles.item}>
      <section className={styles.menu}>CRUD</section>
      <section className={styles.head}>
        <div className={styles.icon}>
          <Image src="/shipItem/ic-ship.png" alt="" width={64} height={64} />
        </div>
        <div className={styles.name}>
          <Input
            id={`ship_name_${index}`}
            value={option.name}
            className={styles.input}
            placeholder="선박 이름"
          />
        </div>
      </section>
      <section className={styles.body}>
        {statRow.map((stat) => (
          <div className={styles.stat_row}>
            <label htmlFor={`${stat.eng}_${index}`}>{stat.kor}</label>
            <Input
              id={`${stat.eng}_${index}`}
              className={styles.input}
              placeholder={stat.placeholder}
            />
          </div>
        ))}
      </section>
    </li>
  );
}
